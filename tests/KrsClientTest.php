<?php


namespace Damianjozwiak\KrsApi\Tests;


use Damianjozwiak\KrsApi\KrsClient;
use Damianjozwiak\KrsApi\RequestModels\PelnyRaport;
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
use PHPUnit\Framework\TestCase;
use stdClass;

class KrsClientTest extends TestCase
{
    private string $key = 'API_KEY';

    public function testZaloguj()
    {
        $client = new KrsClient();
        $data = $client->Zaloguj(new Zaloguj($this->key));
        $this->assertInstanceOf(ZalogujResult::class, $data);
    }

    private function testSingleItem(DanePodmiotuResult $data)
    {
        $this->assertEquals('8842528987', $data->getNip());
        $this->assertEquals('021047123', $data->getRegon());
        $this->assertEquals('ART.OGRODY MACIEJ WIĄCEK', $data->getNazwa());
        $this->assertEquals('DOLNOŚLĄSKIE', $data->getWojewodztwo());
        $this->assertEquals('świdnicki', $data->getPowiat());
        $this->assertEquals('Świebodzice', $data->getMiejscowosc());
        $this->assertEquals('58-160', $data->getKodPocztowy());
        $this->assertEquals('ul. Sienna', $data->getUlica());
        $this->assertEquals('11a', $data->getNrNieruchomosci());
        $this->assertEquals('', $data->getDataZakonczeniaDzialalnosci());
    }

    public function testDaneSzukajPodmioty()
    {
        $client = new KrsClient();
        $client->Zaloguj(new Zaloguj($this->key));
        $data = $client->DaneSzukajPodmioty(new SzukajPodmioty(Nip: '8842528987'));
        $this->assertInstanceOf(DanePodmiotuResult::class, $data);
        $this->testSingleItem($data);
        $data2 = $client->DaneSzukajPodmioty(new SzukajPodmioty(Nipy: '8842528987 6161044425'));
        $this->assertInstanceOf(DanePodmiotowResult::class, $data2);
        $this->testSingleItem($data2->podmioty[0]);
    }

    public function testPobierzPelnyRaport()
    {
        $client = new KrsClient();
        $client->Zaloguj(new Zaloguj($this->key));
        $data = $client->DanePobierzPelnyRaport(new PelnyRaport('362217064',PelnyRaport::TYP_PODMIOTU));
        $this->assertInstanceOf(TypPodmiotu::class, $data);
        $data = $client->DanePobierzPelnyRaport(new PelnyRaport('362217064',PelnyRaport::OSOBA_PRAWNA_OGOLNE));
        $this->assertInstanceOf(OsobaPrawnaOgolny::class, $data);
        $data = $client->DanePobierzPelnyRaport(new PelnyRaport('190154916',PelnyRaport::OSOBA_FIZYCZNA_CEIDG));
        $this->assertInstanceOf(OsobaFizycznaCeidg::class, $data);
    }

}