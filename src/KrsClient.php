<?php


namespace Damianjozwiak\KrsApi;


use Damianjozwiak\KrsApi\RequestModels\PelnyRaport;
use Damianjozwiak\KrsApi\RequestModels\RequiredHeaders;
use Damianjozwiak\KrsApi\RequestModels\SzukajPodmioty;
use Damianjozwiak\KrsApi\RequestModels\Zaloguj;
use Damianjozwiak\KrsApi\ResponseModels\DanePodmiotowResult;
use Damianjozwiak\KrsApi\ResponseModels\DanePodmiotuResult;
use Damianjozwiak\KrsApi\ResponseModels\OsobaFizycznaCeidg;
use Damianjozwiak\KrsApi\ResponseModels\OsobaFizycznaOgolny;
use Damianjozwiak\KrsApi\ResponseModels\OsobaPrawnaOgolny;
use Damianjozwiak\KrsApi\ResponseModels\TypPodmiotu;
use Damianjozwiak\KrsApi\ResponseModels\ZalogujResult;
use DOMDocument;
use DOMXPath;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use SoapClient;

class KrsClient extends SoapClient
{
    public const WSDL = 'https://wyszukiwarkaregon.stat.gov.pl/wsBIR/wsdl/UslugaBIRzewnPubl-ver11-prod.wsdl';
    public ?string $sid = null;

    private string $lastRequest;
    private array $options = [
        'soap_version' => SOAP_1_2,
        'encoding' => 'UTF-8',
        'trace' => true,
        'exceptions' => true,
        'cache_wsdl' => WSDL_CACHE_BOTH,
        'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
        'compression' => true
    ];

    public function __construct(array $options = [])
    {
        parent::__construct(self::WSDL, array_merge($this->options, $options));
    }

    public function __doRequest($request, $location, $action, $version, $one_way = null): string
    {
        $header = [
            'Content-type: application/soap+xml',
            'Accept: application/xop+xml',
            'Cache-Control: no-cache',
            'Pragma: no-cache',
            'SOAPAction: ' . $action,
            'Content-length: ' . strlen($request),
        ];
        if (!is_null($this->sid)) {
            $header[] = 'sid: ' . $this->sid;
        }
        //var_dump($header);
        $config = [
            'curl' => [
                CURLOPT_HTTPHEADER => $header,
            ]
        ];
        $client = new Client($config);
        $this->lastRequest = $request;
        $output = $client->post($location, ['body' => $request])->getBody()->getContents();
        if (str_contains($output, "Content-Type: application/xop+xml")) {
            $tempstr = stristr($output, "<s:");
            $output = substr($tempstr, 0, strpos($tempstr, "</s:Envelope>")) . "</s:Envelope>";
        }
        return $output;
    }

    /**
     * @return string
     */
    public function getLastRequest(): string
    {
        return $this->lastRequest;
    }

    /**
     * @param Zaloguj $zaloguj
     * @return ZalogujResult
     */
    public function Zaloguj(Zaloguj $zaloguj): ZalogujResult
    {
        $headers = new RequiredHeaders('Zaloguj');
        $this->__setSoapHeaders($headers->getHeaders());
        $sid = $this->__soapCall('Zaloguj', $zaloguj->getParams());
        $result = new ZalogujResult($sid->ZalogujResult);
        $this->sid = $result->getSid();
        return $result;
    }

    public function DaneSzukajPodmioty(SzukajPodmioty $szukajPodmioty): DanePodmiotuResult|DanePodmiotowResult|null
    {
        $headers = new RequiredHeaders('DaneSzukajPodmioty');
        $this->__setSoapHeaders($headers->getHeaders());
        $data = $this->__soapCall('DaneSzukajPodmioty', $szukajPodmioty->getParams());
        $root = new DOMDocument('1.0', 'UTF-8');
        $root->loadXML($data->DaneSzukajPodmiotyResult);
        $xpathvar = new Domxpath($root);
        $res = $xpathvar->query('//dane');
        if ($res->count() === 1) {
            return new DanePodmiotuResult($res->item(0)->childNodes);
        } else {
            if ($res->count() > 1) {
                $result = new DanePodmiotowResult();
                foreach ($res as $dataItem) {
                    $result->podmioty[] = new DanePodmiotuResult($dataItem->childNodes);
                }
                return $result;
            }
        }
        return null;
    }

    public function DanePobierzPelnyRaport(PelnyRaport $pelnyRaport):
    null|\stdClass|TypPodmiotu|OsobaPrawnaOgolny|OsobaFizycznaOgolny | OsobaFizycznaCeidg | DanePodmiotowResult {
        $headers = new RequiredHeaders('DanePobierzPelnyRaport');
        $this->__setSoapHeaders($headers->getHeaders());
        $data = $this->__soapCall('DanePobierzPelnyRaport', $pelnyRaport->getParams());
        $root = new DOMDocument('1.0', 'UTF-8');
        $root->loadXML($data->DanePobierzPelnyRaportResult);
        $xpathvar = new Domxpath($root);
        $res = $xpathvar->query('//dane');
        if ($res->count() === 1) {
            $nodes = $res->item(0)->childNodes;
            return match ($pelnyRaport->getRaport()) {
                PelnyRaport::TYP_PODMIOTU => new TypPodmiotu($nodes),
                PelnyRaport::OSOBA_PRAWNA_OGOLNE => new OsobaPrawnaOgolny($nodes),
                PelnyRaport::OSOBA_FIZYCZNA_OGOLNE => new OsobaFizycznaOgolny($nodes),
                PelnyRaport::OSOBA_FIZYCZNA_CEIDG => new OsobaFizycznaCeidg($nodes),
                default => $data
            };
        } else {
            if ($res->count() > 1) {
                $result = new DanePodmiotowResult();
                foreach ($res as $dataItem) {
                    $result->podmioty[] = match ($pelnyRaport->getRaport()) {
                        PelnyRaport::TYP_PODMIOTU => new TypPodmiotu($dataItem->childNodes),
                        PelnyRaport::OSOBA_PRAWNA_OGOLNE => new OsobaPrawnaOgolny($dataItem->childNodes),
                        PelnyRaport::OSOBA_FIZYCZNA_OGOLNE => new OsobaFizycznaOgolny($dataItem->childNodes),
                        PelnyRaport::OSOBA_FIZYCZNA_CEIDG => new OsobaFizycznaCeidg($dataItem->childNodes),
                        default => $data
                    };
                }
                return $result;
            }
        }
        return null;
    }

    /**
     * @param string $regon Pojedynczy regon lub lista maksymalnie 20 wartosci rozdzielonych spacjami
     * @return TypPodmiotu|DanePodmiotowResult
     */
    public function PobierzTypDzialanosci(string $regon): TypPodmiotu | DanePodmiotowResult
    {
        $pelnyRaport = new PelnyRaport($regon, PelnyRaport::TYP_PODMIOTU);
        return $this->DanePobierzPelnyRaport($pelnyRaport);
    }

    /**
     * @param string $regon Pojedynczy regon lub lista maksymalnie 20 wartosci rozdzielonych spacjami
     * @return TypPodmiotu|DanePodmiotowResult
     */
    public function PobierzDaneOsobyFizycznej(string $regon): OsobaFizycznaOgolny | DanePodmiotowResult
    {
        $pelnyRaport = new PelnyRaport($regon, PelnyRaport::OSOBA_FIZYCZNA_OGOLNE);
        return $this->DanePobierzPelnyRaport($pelnyRaport);
    }

    /**
     * @param string $regon Pojedynczy regon lub lista maksymalnie 20 wartosci rozdzielonych spacjami
     * @return TypPodmiotu|DanePodmiotowResult
     */
    public function PobierzDaneOsobyFizycznejCeidg(string $regon): OsobaFizycznaCeidg | DanePodmiotowResult
    {
        $pelnyRaport = new PelnyRaport($regon, PelnyRaport::OSOBA_FIZYCZNA_CEIDG);
        return $this->DanePobierzPelnyRaport($pelnyRaport);
    }

    /**
     * @param string $regon Pojedynczy regon lub lista maksymalnie 20 wartosci rozdzielonych spacjami
     * @return TypPodmiotu|DanePodmiotowResult
     */
    public function PobierzDaneOsobyPrawnej(string $regon): OsobaPrawnaOgolny | DanePodmiotowResult
    {
        $pelnyRaport = new PelnyRaport($regon, PelnyRaport::OSOBA_PRAWNA_OGOLNE);
        return $this->DanePobierzPelnyRaport($pelnyRaport);
    }
}