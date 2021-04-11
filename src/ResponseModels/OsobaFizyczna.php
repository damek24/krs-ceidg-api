<?php


namespace Damianjozwiak\KrsApi\ResponseModels;


class OsobaFizyczna extends BaseResponseModel
{
    private string $fiz_nazwa;
    private string $fiz_nazwaSkrocona;
    private string $fiz_dataPowstania;
    private string $fiz_dataRozpoczeciaDzialalnosci;
    private string $fiz_dataWpisuDzialalnosciDoRegon;
    private string $fiz_dataZawieszeniaDzialalnosci;
    private string $fiz_dataWznowieniaDzialalnosci;
    private string $fiz_dataZaistnieniaZmianyDzialalnosci;
    private string $fiz_dataZakonczeniaDzialalnosci;
    private string $fiz_dataSkresleniaDzialalnosciZRegon;
    private string $fiz_dataOrzeczeniaOUpadlosci;
    private string $fiz_dataZakonczeniaPostepowaniaUpadlosciowego;
    private string $fiz_adSiedzKraj_Symbol;
    private string $fiz_adSiedzWojewodztwo_Symbol;
    private string $fiz_adSiedzPowiat_Symbol;
    private string $fiz_adSiedzGmina_Symbol;
    private string $fiz_adSiedzKodPocztowy;
    private string $fiz_adSiedzMiejscowoscPoczty_Symbol;
    private string $fiz_adSiedzMiejscowosc_Symbol;
    private string $fiz_adSiedzUlica_Symbol;
    private string $fiz_adSiedzNumerNieruchomosci;
    private string $fiz_adSiedzNumerLokalu;
    private string $fiz_adSiedzNietypoweMiejsceLokalizacji;
    private string $fiz_numerTelefonu;
    private string $fiz_numerWewnetrznyTelefonu;
    private string $fiz_numerFaksu;
    private string $fiz_adresEmail;
    private string $fiz_adresStronyinternetowej;
    private string $fiz_adSiedzKraj_Nazwa;
    private string $fiz_adSiedzWojewodztwo_Nazwa;
    private string $fiz_adSiedzPowiat_Nazwa;
    private string $fiz_adSiedzGmina_Nazwa;
    private string $fiz_adSiedzMiejscowosc_Nazwa;
    private string $fiz_adSiedzMiejscowoscPoczty_Nazwa;
    private string $fiz_adSiedzUlica_Nazwa;
    private string $fizC_dataWpisuDoRejestruEwidencji;
    private string $fizC_dataSkresleniaZRejestruEwidencji;
    private string $fizC_numerWRejestrzeEwidencji;
    private string $fizC_OrganRejestrowy_Symbol;
    private string $fizC_OrganRejestrowy_Nazwa;
    private string $fizC_RodzajRejestru_Symbol;
    private string $fizC_RodzajRejestru_Nazwa;
    private string $fizC_NiePodjetoDzialalnosci;

    /**
     * @return string
     */
    public function getNazwa(): string
    {
        return $this->fiz_nazwa;
    }

    /**
     * @return string
     */
    public function getNazwaSkrocona(): string
    {
        return $this->fiz_nazwaSkrocona;
    }

    /**
     * @return string
     */
    public function getDataPowstania(): string
    {
        return $this->fiz_dataPowstania;
    }

    /**
     * @return string
     */
    public function getDataRozpoczeciaDzialalnosci(): string
    {
        return $this->fiz_dataRozpoczeciaDzialalnosci;
    }

    /**
     * @return string
     */
    public function getDataWpisuDzialalnosciDoRegon(): string
    {
        return $this->fiz_dataWpisuDzialalnosciDoRegon;
    }

    /**
     * @return string
     */
    public function getDataZawieszeniaDzialalnosci(): string
    {
        return $this->fiz_dataZawieszeniaDzialalnosci;
    }

    /**
     * @return string
     */
    public function getDataWznowieniaDzialalnosci(): string
    {
        return $this->fiz_dataWznowieniaDzialalnosci;
    }

    /**
     * @return string
     */
    public function getDataZaistnieniaZmianyDzialalnosci(): string
    {
        return $this->fiz_dataZaistnieniaZmianyDzialalnosci;
    }

    /**
     * @return string
     */
    public function getDataZakonczeniaDzialalnosci(): string
    {
        return $this->fiz_dataZakonczeniaDzialalnosci;
    }

    /**
     * @return string
     */
    public function getDataSkresleniaDzialalnosciZRegon(): string
    {
        return $this->fiz_dataSkresleniaDzialalnosciZRegon;
    }

    /**
     * @return string
     */
    public function getDataOrzeczeniaOUpadlosci(): string
    {
        return $this->fiz_dataOrzeczeniaOUpadlosci;
    }

    /**
     * @return string
     */
    public function getDataZakonczeniaPostepowaniaUpadlosciowego(): string
    {
        return $this->fiz_dataZakonczeniaPostepowaniaUpadlosciowego;
    }

    /**
     * @return string
     */
    public function getAdSiedzKrajSymbol(): string
    {
        return $this->fiz_adSiedzKraj_Symbol;
    }

    /**
     * @return string
     */
    public function getAdSiedzWojewodztwoSymbol(): string
    {
        return $this->fiz_adSiedzWojewodztwo_Symbol;
    }

    /**
     * @return string
     */
    public function getAdSiedzPowiatSymbol(): string
    {
        return $this->fiz_adSiedzPowiat_Symbol;
    }

    /**
     * @return string
     */
    public function getAdSiedzGminaSymbol(): string
    {
        return $this->fiz_adSiedzGmina_Symbol;
    }

    /**
     * @return string
     */
    public function getAdSiedzKodPocztowy(): string
    {
        return $this->fiz_adSiedzKodPocztowy;
    }

    /**
     * @return string
     */
    public function getAdSiedzMiejscowoscPocztySymbol(): string
    {
        return $this->fiz_adSiedzMiejscowoscPoczty_Symbol;
    }

    /**
     * @return string
     */
    public function getAdSiedzMiejscowoscSymbol(): string
    {
        return $this->fiz_adSiedzMiejscowosc_Symbol;
    }

    /**
     * @return string
     */
    public function getAdSiedzUlicaSymbol(): string
    {
        return $this->fiz_adSiedzUlica_Symbol;
    }

    /**
     * @return string
     */
    public function getAdSiedzNumerNieruchomosci(): string
    {
        return $this->fiz_adSiedzNumerNieruchomosci;
    }

    /**
     * @return string
     */
    public function getAdSiedzNumerLokalu(): string
    {
        return $this->fiz_adSiedzNumerLokalu;
    }

    /**
     * @return string
     */
    public function getAdSiedzNietypoweMiejsceLokalizacji(): string
    {
        return $this->fiz_adSiedzNietypoweMiejsceLokalizacji;
    }

    /**
     * @return string
     */
    public function getNumerTelefonu(): string
    {
        return $this->fiz_numerTelefonu;
    }

    /**
     * @return string
     */
    public function getNumerWewnetrznyTelefonu(): string
    {
        return $this->fiz_numerWewnetrznyTelefonu;
    }

    /**
     * @return string
     */
    public function getNumerFaksu(): string
    {
        return $this->fiz_numerFaksu;
    }

    /**
     * @return string
     */
    public function getAdresEmail(): string
    {
        return $this->fiz_adresEmail;
    }

    /**
     * @return string
     */
    public function getAdresStronyinternetowej(): string
    {
        return $this->fiz_adresStronyinternetowej;
    }

    /**
     * @return string
     */
    public function getAdSiedzKrajNazwa(): string
    {
        return $this->fiz_adSiedzKraj_Nazwa;
    }

    /**
     * @return string
     */
    public function getAdSiedzWojewodztwoNazwa(): string
    {
        return $this->fiz_adSiedzWojewodztwo_Nazwa;
    }

    /**
     * @return string
     */
    public function getAdSiedzPowiatNazwa(): string
    {
        return $this->fiz_adSiedzPowiat_Nazwa;
    }

    /**
     * @return string
     */
    public function getAdSiedzGminaNazwa(): string
    {
        return $this->fiz_adSiedzGmina_Nazwa;
    }

    /**
     * @return string
     */
    public function getAdSiedzMiejscowoscNazwa(): string
    {
        return $this->fiz_adSiedzMiejscowosc_Nazwa;
    }

    /**
     * @return string
     */
    public function getAdSiedzMiejscowoscPocztyNazwa(): string
    {
        return $this->fiz_adSiedzMiejscowoscPoczty_Nazwa;
    }

    /**
     * @return string
     */
    public function getAdSiedzUlicaNazwa(): string
    {
        return $this->fiz_adSiedzUlica_Nazwa;
    }

    /**
     * @return string
     */
    public function getCDataWpisuDoRejestruEwidencji(): string
    {
        return $this->fizC_dataWpisuDoRejestruEwidencji;
    }

    /**
     * @return string
     */
    public function getCDataSkresleniaZRejestruEwidencji(): string
    {
        return $this->fizC_dataSkresleniaZRejestruEwidencji;
    }

    /**
     * @return string
     */
    public function getCNumerWRejestrzeEwidencji(): string
    {
        return $this->fizC_numerWRejestrzeEwidencji;
    }

    /**
     * @return string
     */
    public function getCOrganRejestrowySymbol(): string
    {
        return $this->fizC_OrganRejestrowy_Symbol;
    }

    /**
     * @return string
     */
    public function getCOrganRejestrowyNazwa(): string
    {
        return $this->fizC_OrganRejestrowy_Nazwa;
    }

    /**
     * @return string
     */
    public function getCRodzajRejestruSymbol(): string
    {
        return $this->fizC_RodzajRejestru_Symbol;
    }

    /**
     * @return string
     */
    public function getCRodzajRejestruNazwa(): string
    {
        return $this->fizC_RodzajRejestru_Nazwa;
    }

    /**
     * @return string
     */
    public function getCNiePodjetoDzialalnosci(): string
    {
        return $this->fizC_NiePodjetoDzialalnosci;
    }
    
}