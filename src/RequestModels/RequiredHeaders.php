<?php


namespace Damianjozwiak\KrsApi\RequestModels;


use SoapHeader;

class RequiredHeaders
{
    public const ZALOGUJ = 'Zaloguj';
    public const DANE_SZUKAJ_PODMIOTY = 'DaneSzukajPodmioty';
    public const DANE_POBIERZ_PELNY_RAPORT = 'DanePobierzPelnyRaport';
    private SoapHeader $to;
    private SoapHeader $action;

    public function __construct(string $actionName)
    {
        $this->to = new SoapHeader(
            'http://www.w3.org/2005/08/addressing', 'To',
            'https://wyszukiwarkaregontest.stat.gov.pl/wsBIR/UslugaBIRzewnPubl.svc'
        );
        $this->action = new SoapHeader(
            'http://www.w3.org/2005/08/addressing', 'Action',
            'http://CIS/BIR/PUBL/2014/07/IUslugaBIRzewnPubl/' . $actionName
        );
    }

    public function getHeaders(): array
    {
        return [$this->to, $this->action];
    }
}
