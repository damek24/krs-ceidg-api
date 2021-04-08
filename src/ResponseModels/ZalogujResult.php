<?php


namespace Damianjozwiak\KrsApi\ResponseModels;


class ZalogujResult
{
    public function __construct(private string $sid)
    {

    }

    /**
     * @return string
     */
    public function getSid(): string
    {
        return $this->sid;
    }

}