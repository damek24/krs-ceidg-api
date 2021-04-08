<?php


namespace Damianjozwiak\KrsApi\RequestModels;


/**
 * Class SzukajPodmioty
 * @package Damianjozwiak\KrsApi\RequestModels
 */
class SzukajPodmioty extends BaseModel
{

    /**
     * SzukajPodmioty constructor.
     * @param string|null $Krs
     * @param string|null $Krsy
     * @param string|null $Nip
     * @param string|null $Nipy
     * @param string|null $Regon
     * @param string|null $Regony14
     * @param string|null $Regony9
     */
    public function __construct(
        private ?string $Krs = null,
        private ?string $Krsy = null,
        private ?string $Nip = null,
        private ?string $Nipy = null,
        private ?string $Regon = null,
        private ?string $Regony14 = null,
        private ?string $Regony9 = null
    ) {
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return [
            [
                'pParametryWyszukiwania' => [
                    'Krs' => $this->Krs,
                    'Krsy' => $this->Krsy,
                    'Nip' => $this->Nip,
                    'Nipy' => $this->Nipy,
                    'Regon' => $this->Regon,
                    'Regony14zn' => $this->Regony14,
                    'Regony9zn' => $this->Regony9
                ]
            ]
        ];
    }
}