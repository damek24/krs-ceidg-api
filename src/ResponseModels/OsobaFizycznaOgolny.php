<?php


namespace Damianjozwiak\KrsApi\ResponseModels;


class OsobaFizycznaOgolny extends BaseResponseModel
{
    private string $fiz_nip;
    private string $fiz_statusNip;
    private string $fiz_nazwisko;
    private string $fiz_imie1;
    private string $fiz_imie2;
    private string $fiz_dataWpisuPodmiotuDoRegon;
    private string $fiz_dataZaistnieniaZmiany;
    private string $fiz_dataSkresleniaPodmiotuZRegon;
    private string $fiz_podstawowaFormaPrawna_Symbol;
    private string $fiz_szczegolnaFormaPrawna_Symbol;
    private string $fiz_formaFinansowania_Symbol;
    private string $fiz_formaWlasnosci_Symbol;
    private string $fiz_podstawowaFormaPrawna_Nazwa;
    private string $fiz_szczegolnaFormaPrawna_Nazwa;
    private string $fiz_formaFinansowania_Nazwa;
    private string $fiz_formaWlasnosci_Nazwa;
    private string $fiz_dzialalnoscCeidg;
    private string $fiz_dzialalnoscRolnicza;
    private string $fiz_dzialalnoscPozostala;
    private string $fiz_dzialalnoscSkreslonaDo20141108;
    private string $fiz_liczbaJednLokalnych;

    /**
     * @return string
     */
    public function getNip(): string
    {
        return $this->fiz_nip;
    }

    /**
     * @return string
     */
    public function getStatusNip(): string
    {
        return $this->fiz_statusNip;
    }

    /**
     * @return string
     */
    public function getNazwisko(): string
    {
        return $this->fiz_nazwisko;
    }

    /**
     * @return string
     */
    public function getImie1(): string
    {
        return $this->fiz_imie1;
    }

    /**
     * @return string
     */
    public function getImie2(): string
    {
        return $this->fiz_imie2;
    }

    /**
     * @return string
     */
    public function getDataWpisuPodmiotuDoRegon(): string
    {
        return $this->fiz_dataWpisuPodmiotuDoRegon;
    }

    /**
     * @return string
     */
    public function getDataZaistnieniaZmiany(): string
    {
        return $this->fiz_dataZaistnieniaZmiany;
    }

    /**
     * @return string
     */
    public function getDataSkresleniaPodmiotuZRegon(): string
    {
        return $this->fiz_dataSkresleniaPodmiotuZRegon;
    }

    /**
     * @return string
     */
    public function getPodstawowaFormaPrawnaSymbol(): string
    {
        return $this->fiz_podstawowaFormaPrawna_Symbol;
    }

    /**
     * @return string
     */
    public function getSzczegolnaFormaPrawnaSymbol(): string
    {
        return $this->fiz_szczegolnaFormaPrawna_Symbol;
    }

    /**
     * @return string
     */
    public function getFormaFinansowaniaSymbol(): string
    {
        return $this->fiz_formaFinansowania_Symbol;
    }

    /**
     * @return string
     */
    public function getFormaWlasnosciSymbol(): string
    {
        return $this->fiz_formaWlasnosci_Symbol;
    }

    /**
     * @return string
     */
    public function getPodstawowaFormaPrawnaNazwa(): string
    {
        return $this->fiz_podstawowaFormaPrawna_Nazwa;
    }

    /**
     * @return string
     */
    public function getSzczegolnaFormaPrawnaNazwa(): string
    {
        return $this->fiz_szczegolnaFormaPrawna_Nazwa;
    }

    /**
     * @return string
     */
    public function getFormaFinansowaniaNazwa(): string
    {
        return $this->fiz_formaFinansowania_Nazwa;
    }

    /**
     * @return string
     */
    public function getFormaWlasnosciNazwa(): string
    {
        return $this->fiz_formaWlasnosci_Nazwa;
    }

    /**
     * @return string
     */
    public function getDzialalnoscCeidg(): string
    {
        return $this->fiz_dzialalnoscCeidg;
    }

    /**
     * @return string
     */
    public function getDzialalnoscRolnicza(): string
    {
        return $this->fiz_dzialalnoscRolnicza;
    }

    /**
     * @return string
     */
    public function getDzialalnoscPozostala(): string
    {
        return $this->fiz_dzialalnoscPozostala;
    }

    /**
     * @return string
     */
    public function getDzialalnoscSkreslonaDo20141108(): string
    {
        return $this->fiz_dzialalnoscSkreslonaDo20141108;
    }

    /**
     * @return string
     */
    public function getLiczbaJednLokalnych(): string
    {
        return $this->fiz_liczbaJednLokalnych;
    }


}