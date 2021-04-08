<?php


namespace Damianjozwiak\KrsApi\RequestModels;


abstract class BaseModel
{
    public abstract function getParams(): array;
}