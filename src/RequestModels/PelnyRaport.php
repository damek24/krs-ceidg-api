<?php


namespace Damianjozwiak\KrsApi\RequestModels;


use ReflectionClass;

class PelnyRaport extends BaseModel
{
    public const OSOBA_FIZYCZNA_OGOLNE = 'BIR11OsFizycznaDaneOgolne';
    public const OSOBA_FIZYCZNA_CEIDG = 'BIR11OsFizycznaDzialalnoscCeidg';
    public const OSOBA_FIZYCZNA_ROLNICZA = 'BIR11OsFizycznaDzialalnoscRolnicza';
    public const OSOBA_FIZYCZNA_POZOSTALA = 'BIR11OsFizycznaDzialalnoscPozostala';
    public const OSOBA_FIZYCZNA_PKD = 'BIR11OsFizycznaPkd';
    public const OSOBA_FIZYCZNA_LISTA_JEDNOSTEK = 'BIR11OsFizycznaListaJednLokalnych';
    public const OSOBA_FIZYCZNA_DANE_JEDNOSTKI = 'BIR11JednLokalnaOsFizycznej';
    public const OSOBA_FIZYCZNA_KODY_PKD_JEDNOSTKI_LOKALNEJ = 'BIR11JednLokalnaOsFizycznejPkd';
    public const OSOBA_PRAWNA_OGOLNE = 'BIR11OsPrawna';
    public const OSOBA_PRAWNA_PKD = 'BIR11OsPrawnaPkd';
    public const OSOBA_PRAWNA_SP_CYWILNA_WSPOLNICY = 'BIR11OsPrawnaSpCywilnaWspolnicy';
    public const TYP_PODMIOTU = 'BIR11TypPodmiotu';

    public function __construct(private string $regon, private string $raport)
    {
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        $reflection = new ReflectionClass($this);
        $constants = $reflection->getConstants();
        if (!in_array($this->raport, $constants)){
            throw new \InvalidArgumentException('raport '.$this->raport.' nie istnieje');
        }
        return [
            [
                'pRegon' => $this->regon,
                'pNazwaRaportu' => $this->raport
            ]
        ];
    }
}