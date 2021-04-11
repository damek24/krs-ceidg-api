<?php


namespace Damianjozwiak\KrsApi\ResponseModels;


use ReflectionProperty;

class BaseResponseModel
{
    public function __construct($childNodes)
    {
        $reflection = new \ReflectionClass($this);
        foreach ($childNodes as $cnode) {
            if (!$reflection->hasProperty($cnode->nodeName)) {
                continue;
            }
            $property = new ReflectionProperty($this, $cnode->nodeName);
            $property->setAccessible(true);
            $property->setValue($this, $cnode->nodeValue ?? '');
        }
    }
}