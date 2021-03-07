<?php

namespace Bitrix\Main\Service\GeoIp;

/**
 * Class DataResult
 * @package Bitrix\Main\Service\GeoIp
 * Class-structure for transferring geolocation data
 * @deprecated
 */
class DataResult extends \Bitrix\Main\Result
{
    public $ip = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    public $lang = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    public $countryName = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    public $regionName = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    public $subRegionName = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    public $cityName = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    public $countryCode = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    public $regionCode = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    public $zipCode = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    public $latitude = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    public $longitude = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    public $timezone = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string Autonomous System Numbers (ASN) */
    public $asn = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string Internet Service Provider (ISP) name */
    public $ispName = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    public $organizationName = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    public $handlerClass = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
}