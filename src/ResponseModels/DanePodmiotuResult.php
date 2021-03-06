<?php


namespace Damianjozwiak\KrsApi\ResponseModels;


use DOMDocument;
use DOMXPath;
use ReflectionProperty;

class DanePodmiotuResult extends BaseResponseModel
{
    private string $Regon;
    private string $Nip;
    private string $Nazwa;
    private string $Wojewodztwo;
    private string $Powiat;
    private string $Gmina;
    private string $Miejscowosc;
    private string $KodPocztowy;
    private string $Ulica;
    private string $NrLokalu;
    private string $NrNieruchomosci;
    private string $DataZakonczeniaDzialalnosci;
    private string $MiejscowoscPoczty;

    /**
     * @return string
     */
    public function getRegon(): string
    {
        return $this->Regon;
    }

    /**
     * @return string
     */
    public function getNip(): string
    {
        return $this->Nip;
    }

    /**
     * @return string
     */
    public function getNazwa(): string
    {
        return $this->Nazwa;
    }

    /**
     * @return string
     */
    public function getWojewodztwo(): string
    {
        return $this->Wojewodztwo;
    }

    /**
     * @return string
     */
    public function getPowiat(): string
    {
        return $this->Powiat;
    }

    /**
     * @return string
     */
    public function getGmina(): string
    {
        return $this->Gmina;
    }

    /**
     * @return string
     */
    public function getMiejscowosc(): string
    {
        return $this->Miejscowosc;
    }

    /**
     * @return string
     */
    public function getKodPocztowy(): string
    {
        return $this->KodPocztowy;
    }

    /**
     * @return string
     */
    public function getUlica(): string
    {
        return $this->Ulica;
    }

    /**
     * @return string
     */
    public function getNrLokalu(): string
    {
        return $this->NrLokalu;
    }

    /**
     * @return string
     */
    public function getNrNieruchomosci(): string
    {
        return $this->NrNieruchomosci;
    }

    /**
     * @return string
     */
    public function getDataZakonczeniaDzialalnosci(): string
    {
        return $this->DataZakonczeniaDzialalnosci;
    }

    /**
     * @return string
     */
    public function getMiejscowoscPoczty(): string
    {
        return $this->MiejscowoscPoczty;
    }


}