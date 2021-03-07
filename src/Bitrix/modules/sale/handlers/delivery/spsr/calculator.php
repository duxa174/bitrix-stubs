<?php

namespace Sale\Handlers\Delivery\Spsr;

class Calculator
{
    protected static $url = "http://www.cpcr.ru/cgi-bin/postxml.pl";
    protected static function getHttpClient()
    {
    }
    protected static function getLocationCode(\Bitrix\Sale\Shipment $shipment)
    {
    }
    protected static function buildRequest(\Bitrix\Sale\Shipment $shipment, array $additional)
    {
    }
    public static function calculate(\Bitrix\Sale\Shipment $shipment, $additional)
    {
    }
    protected static function sendRequest($request)
    {
    }
    protected static function utfDecode($str)
    {
    }
}