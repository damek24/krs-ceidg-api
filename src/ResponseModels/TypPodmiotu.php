<?php


namespace Damianjozwiak\KrsApi\ResponseModels;


class TypPodmiotu extends BaseResponseModel
{
    public const OSOBA_FIZYCZNA = 'F';
    public const OSOBA_PRAWNA = 'P';
    private string $Typ;

    /**
     * @return string
     */
    public function getTyp(): string
    {
        return $this->Typ;
    }


}