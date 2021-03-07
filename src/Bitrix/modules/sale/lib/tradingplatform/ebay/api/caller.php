<?php

namespace Bitrix\Sale\TradingPlatform\Ebay\Api;

class Caller
{
    protected $http;
    protected $apiUrl;
    public function __construct($params)
    {
    }
    public function sendRequest($callName, $data, $devId = "", $apiAppId = "", $certId = "")
    {
    }
}