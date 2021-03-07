<?php

namespace Bitrix\Main\Service\GeoIp;

/**
 * Class Extension
 * @package Bitrix\Main\Service\GeoIp
 * Uses standard php GeoIP extension
 * @link http://php.net/manual/ru/book.geoip.php
 */
class Extension extends \Bitrix\Main\Service\GeoIp\Base
{
    /**
     * @return string Class title
     */
    public function getTitle()
    {
    }
    /**
     * @return string Class description
     */
    public function getDescription()
    {
    }
    /**
     * Languages supported by handler ISO 639-1
     * @return array
     */
    public function getSupportedLanguages()
    {
    }
    /**
     * @param string $ip Ip address
     * @param string $lang Language identifier
     * @return Result
     */
    public function getDataResult($ip, $lang = '')
    {
    }
    /**
     * Determine if GeoIP Database is available.
     *
     * @return bool
     */
    protected static function isAvailable()
    {
    }
    /**
     * Determine if GeoIP Country Database is available (GEOIP_COUNTRY_EDITION).
     *
     * @return bool
     */
    protected static function isAvailableBaseCountry()
    {
    }
    /**
     * Determine if GeoIP City Database is available (GEOIP_CITY_EDITION_REV0).
     *
     * @return bool
     */
    protected static function isAvailableBaseCity()
    {
    }
    /**
     * Determine if GeoIP Organization Database is available (GEOIP_ORG_EDITION).
     *
     * @return bool
     */
    protected static function isAvailableBaseOrganization()
    {
    }
    /**
     * Determine if GeoIP ISP Database is available (GEOIP_ISP_EDITION).
     *
     * @return bool
     */
    protected static function isAvailableBaseIsp()
    {
    }
    /**
     * Determine if GeoIP ASN Database is available (GEOIP_ASNUM_EDITION).
     *
     * @return bool
     */
    protected static function isAvailableBaseAsn()
    {
    }
    /**
     * Is this handler installed and ready for using.
     * @return bool
     */
    public function isInstalled()
    {
    }
    /**
     * @return array Set of fields description for administration purposes.
     */
    public function getConfigForAdmin()
    {
    }
    /**
     * @return ProvidingData Geolocation information witch handler can return.
     */
    public function getProvidingData()
    {
    }
}