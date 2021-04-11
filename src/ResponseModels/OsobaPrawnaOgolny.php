<?php


namespace Damianjozwiak\KrsApi\ResponseModels;


class OsobaPrawnaOgolny extends BaseResponseModel
{
    private string $praw_nip;
    private string $praw_statusNip;
    private string $praw_nazwa;
    private string $praw_nazwaSkrocona;
    private string $praw_numerWRejestrzeEwidencji;
    private string $praw_dataWpisuDoRejestruEwidencji;
    private string $praw_dataPowstania;
    private string $praw_dataRozpoczeciaDzialalnosci;
    private string $praw_dataWpisuDoRegon;
    private string $praw_dataZawieszeniaDzialalnosci;
    private string $praw_dataWznowieniaDzialalnosci;
    private string $praw_dataZaistnieniaZmiany;
    private string $praw_dataZakonczeniaDzialalnosci;
    private string $praw_dataSkresleniaZRegon;
    private string $praw_dataOrzeczeniaOUpadlosci;
    private string $praw_dataZakonczeniaPostepowaniaUpadlosciowego;
    private string $praw_adSiedzKraj_Symbol;
    private string $praw_adSiedzWojewodztwo_Symbol;
    private string $praw_adSiedzPowiat_Symbol;
    private string $praw_adSiedzGmina_Symbol;
    private string $praw_adSiedzKodPocztowy;
    private string $praw_adSiedzMiejscowoscPoczty_Symbol;
    private string $praw_adSiedzMiejscowosc_Symbol;
    private string $praw_adSiedzUlica_Symbol;
    private string $praw_adSiedzNumerNieruchomosci;
    private string $praw_adSiedzNumerLokalu;
    private string $praw_adSiedzNietypoweMiejsceLokalizacji;
    private string $praw_numerTelefonu;
    private string $praw_numerWewnetrznyTelefonu;
    private string $praw_numerFaksu;
    private string $praw_adresEmail;
    private string $praw_adresStronyinternetowej;
    private string $praw_adSiedzKraj_Nazwa;
    private string $praw_adSiedzWojewodztwo_Nazwa;
    private string $praw_adSiedzPowiat_Nazwa;
    private string $praw_adSiedzGmina_Nazwa;
    private string $praw_adSiedzMiejscowosc_Nazwa;
    private string $praw_adSiedzMiejscowoscPoczty_Nazwa;
    private string $praw_adSiedzUlica_Nazwa;
    private string $praw_podstawowaFormaPrawna_Symbol;
    private string $praw_szczegolnaFormaPrawna_Symbol;
    private string $praw_formaFinansowania_Symbol;
    private string $praw_formaWlasnosci_Symbol;
    private string $praw_organZalozycielski_Symbol;
    private string $praw_organRejestrowy_Symbol;
    private string $praw_rodzajRejestruEwidencji_Symbol;
    private string $praw_podstawowaFormaPrawna_Nazwa;
    private string $praw_szczegolnaFormaPrawna_Nazwa;
    private string $praw_formaFinansowania_Nazwa;
    private string $praw_formaWlasnosci_Nazwa;
    private string $praw_organZalozycielski_Nazwa;
    private string $praw_organRejestrowy_Nazwa;
    private string $praw_rodzajRejestruEwidencji_Nazwa;
    private string $praw_liczbaJednLokalnych;

    /**
     * @return string
     */
    public function getNip(): string
    {
        return $this->praw_nip;
    }

    /**
     * @return string
     */
    public function getStatusNip(): string
    {
        return $this->praw_statusNip;
    }

    /**
     * @return string
     */
    public function getNazwa(): string
    {
        return $this->praw_nazwa;
    }

    /**
     * @return string
     */
    public function getNazwaSkrocona(): string
    {
        return $this->praw_nazwaSkrocona;
    }

    /**
     * @return string
     */
    public function getNumerWRejestrzeEwidencji(): string
    {
        return $this->praw_numerWRejestrzeEwidencji;
    }

    /**
     * @return string
     */
    public function getDataWpisuDoRejestruEwidencji(): string
    {
        return $this->praw_dataWpisuDoRejestruEwidencji;
    }

    /**
     * @return string
     */
    public function getDataPowstania(): string
    {
        return $this->praw_dataPowstania;
    }

    /**
     * @return string
     */
    public function getDataRozpoczeciaDzialalnosci(): string
    {
        return $this->praw_dataRozpoczeciaDzialalnosci;
    }

    /**
     * @return string
     */
    public function getDataWpisuDoRegon(): string
    {
        return $this->praw_dataWpisuDoRegon;
    }

    /**
     * @return string
     */
    public function getDataZawieszeniaDzialalnosci(): string
    {
        return $this->praw_dataZawieszeniaDzialalnosci;
    }

    /**
     * @return string
     */
    public function getDataWznowieniaDzialalnosci(): string
    {
        return $this->praw_dataWznowieniaDzialalnosci;
    }

    /**
     * @return string
     */
    public function getDataZaistnieniaZmiany(): string
    {
        return $this->praw_dataZaistnieniaZmiany;
    }

    /**
     * @return string
     */
    public function getDataZakonczeniaDzialalnosci(): string
    {
        return $this->praw_dataZakonczeniaDzialalnosci;
    }

    /**
     * @return string
     */
    public function getDataSkresleniaZRegon(): string
    {
        return $this->praw_dataSkresleniaZRegon;
    }

    /**
     * @return string
     */
    public function getDataOrzeczeniaOUpadlosci(): string
    {
        return $this->praw_dataOrzeczeniaOUpadlosci;
    }

    /**
     * @return string
     */
    public function getDataZakonczeniaPostepowaniaUpadlosciowego(): string
    {
        return $this->praw_dataZakonczeniaPostepowaniaUpadlosciowego;
    }

    /**
     * @return string
     */
    public function getAdSiedzKrajSymbol(): string
    {
        return $this->praw_adSiedzKraj_Symbol;
    }

    /**
     * @return string
     */
    public function getAdSiedzWojewodztwoSymbol(): string
    {
        return $this->praw_adSiedzWojewodztwo_Symbol;
    }

    /**
     * @return string
     */
    public function getAdSiedzPowiatSymbol(): string
    {
        return $this->praw_adSiedzPowiat_Symbol;
    }

    /**
     * @return string
     */
    public function getAdSiedzGminaSymbol(): string
    {
        return $this->praw_adSiedzGmina_Symbol;
    }

    /**
     * @return string
     */
    public function getAdSiedzKodPocztowy(): string
    {
        return $this->praw_adSiedzKodPocztowy;
    }

    /**
     * @return string
     */
    public function getAdSiedzMiejscowoscPocztySymbol(): string
    {
        return $this->praw_adSiedzMiejscowoscPoczty_Symbol;
    }

    /**
     * @return string
     */
    public function getAdSiedzMiejscowoscSymbol(): string
    {
        return $this->praw_adSiedzMiejscowosc_Symbol;
    }

    /**
     * @return string
     */
    public function getAdSiedzUlicaSymbol(): string
    {
        return $this->praw_adSiedzUlica_Symbol;
    }

    /**
     * @return string
     */
    public function getAdSiedzNumerNieruchomosci(): string
    {
        return $this->praw_adSiedzNumerNieruchomosci;
    }

    /**
     * @return string
     */
    public function getAdSiedzNumerLokalu(): string
    {
        return $this->praw_adSiedzNumerLokalu;
    }

    /**
     * @return string
     */
    public function getAdSiedzNietypoweMiejsceLokalizacji(): string
    {
        return $this->praw_adSiedzNietypoweMiejsceLokalizacji;
    }

    /**
     * @return string
     */
    public function getNumerTelefonu(): string
    {
        return $this->praw_numerTelefonu;
    }

    /**
     * @return string
     */
    public function getNumerWewnetrznyTelefonu(): string
    {
        return $this->praw_numerWewnetrznyTelefonu;
    }

    /**
     * @return string
     */
    public function getNumerFaksu(): string
    {
        return $this->praw_numerFaksu;
    }

    /**
     * @return string
     */
    public function getAdresEmail(): string
    {
        return $this->praw_adresEmail;
    }

    /**
     * @return string
     */
    public function getAdresStronyinternetowej(): string
    {
        return $this->praw_adresStronyinternetowej;
    }

    /**
     * @return string
     */
    public function getAdSiedzKrajNazwa(): string
    {
        return $this->praw_adSiedzKraj_Nazwa;
    }

    /**
     * @return string
     */
    public function getAdSiedzWojewodztwoNazwa(): string
    {
        return $this->praw_adSiedzWojewodztwo_Nazwa;
    }

    /**
     * @return string
     */
    public function getAdSiedzPowiatNazwa(): string
    {
        return $this->praw_adSiedzPowiat_Nazwa;
    }

    /**
     * @return string
     */
    public function getAdSiedzGminaNazwa(): string
    {
        return $this->praw_adSiedzGmina_Nazwa;
    }

    /**
     * @return string
     */
    public function getAdSiedzMiejscowoscNazwa(): string
    {
        return $this->praw_adSiedzMiejscowosc_Nazwa;
    }

    /**
     * @return string
     */
    public function getAdSiedzMiejscowoscPocztyNazwa(): string
    {
        return $this->praw_adSiedzMiejscowoscPoczty_Nazwa;
    }

    /**
     * @return string
     */
    public function getAdSiedzUlicaNazwa(): string
    {
        return $this->praw_adSiedzUlica_Nazwa;
    }

    /**
     * @return string
     */
    public function getPodstawowaFormaPrawnaSymbol(): string
    {
        return $this->praw_podstawowaFormaPrawna_Symbol;
    }

    /**
     * @return string
     */
    public function getSzczegolnaFormaPrawnaSymbol(): string
    {
        return $this->praw_szczegolnaFormaPrawna_Symbol;
    }

    /**
     * @return string
     */
    public function getFormaFinansowaniaSymbol(): string
    {
        return $this->praw_formaFinansowania_Symbol;
    }

    /**
     * @return string
     */
    public function getFormaWlasnosciSymbol(): string
    {
        return $this->praw_formaWlasnosci_Symbol;
    }

    /**
     * @return string
     */
    public function getOrganZalozycielskiSymbol(): string
    {
        return $this->praw_organZalozycielski_Symbol;
    }

    /**
     * @return string
     */
    public function getOrganRejestrowySymbol(): string
    {
        return $this->praw_organRejestrowy_Symbol;
    }

    /**
     * @return string
     */
    public function getRodzajRejestruEwidencjiSymbol(): string
    {
        return $this->praw_rodzajRejestruEwidencji_Symbol;
    }

    /**
     * @return string
     */
    public function getPodstawowaFormaPrawnaNazwa(): string
    {
        return $this->praw_podstawowaFormaPrawna_Nazwa;
    }

    /**
     * @return string
     */
    public function getSzczegolnaFormaPrawnaNazwa(): string
    {
        return $this->praw_szczegolnaFormaPrawna_Nazwa;
    }

    /**
     * @return string
     */
    public function getFormaFinansowaniaNazwa(): string
    {
        return $this->praw_formaFinansowania_Nazwa;
    }

    /**
     * @return string
     */
    public function getFormaWlasnosciNazwa(): string
    {
        return $this->praw_formaWlasnosci_Nazwa;
    }

    /**
     * @return string
     */
    public function getOrganZalozycielskiNazwa(): string
    {
        return $this->praw_organZalozycielski_Nazwa;
    }

    /**
     * @return string
     */
    public function getOrganRejestrowyNazwa(): string
    {
        return $this->praw_organRejestrowy_Nazwa;
    }

    /**
     * @return string
     */
    public function getRodzajRejestruEwidencjiNazwa(): string
    {
        return $this->praw_rodzajRejestruEwidencji_Nazwa;
    }

    /**
     * @return string
     */
    public function getLiczbaJednLokalnych(): string
    {
        return $this->praw_liczbaJednLokalnych;
    }



}