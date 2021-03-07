<?php

namespace Bitrix\Sale\TradingPlatform\Ebay\Api;

abstract class Entity
{
    protected $siteId;
    protected $apiCaller;
    protected $authToken;
    protected $ebaySiteId;
    protected $warningLevel = "High";
    public function __construct($siteId)
    {
    }
    protected function array2Tags(array $params)
    {
    }
}