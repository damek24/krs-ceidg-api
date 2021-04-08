<?php


namespace Damianjozwiak\KrsApi\RequestModels;


class Zaloguj extends BaseModel
{
    public function __construct(private string $pKluczUzytkownika){}

    public function getParams(): array
    {
        return [
            [
                'pKluczUzytkownika' => $this->pKluczUzytkownika
            ]
        ];
    }
}