<?php

namespace Bitrix\Main\Service\GeoIp;

/**
 * Class Data
 * @package Bitrix\Main\Service\GeoIp
 *
 * Structure for transferring geolocation data.
 */
class Data
{
    /** @var string Ip address. */
    public $ip = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string Storing data language. */
    public $lang = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string Country name  */
    public $countryName = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string Region name  */
    public $regionName = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string Subregion name  */
    public $subRegionName = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string City name  */
    public $cityName = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string Country code  */
    public $countryCode = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string Region code  */
    public $regionCode = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string Zip or postal code  */
    public $zipCode = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string Latitude*/
    public $latitude = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string Longitude*/
    public $longitude = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string Timezone*/
    public $timezone = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string Autonomous System Numbers (ASN) */
    public $asn = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string Internet Service Provider (ISP) name */
    public $ispName = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string Organization name */
    public $organizationName = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
    /** @var string Geolocation handler - source of information */
    public $handlerClass = \Bitrix\Main\Service\GeoIp\Manager::INFO_NOT_AVAILABLE;
}