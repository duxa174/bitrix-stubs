<?php

namespace Bitrix\Main\Service\GeoIp;

/**
 * Class for working with geolocation information.
 * @package Bitrix\Main\Service\GeoIp
 */
final class Manager
{
    /** @var array | null  */
    private static $handlers = null;
    /** @var Result */
    private static $data = array();
    /** @var bool */
    private static $logErrors = false;
    /**
     * Constant for parameters who information not available.
     */
    const INFO_NOT_AVAILABLE = null;
    const COOKIE_NAME = 'BX_GEO_IP';
    const COOKIE_EXPIRED = 86400;
    //day
    const STORE_VAR_NAME = 'BX_GEO_IP';
    /**
     * Get the two letter country code.
     * @param string $ip Ip address.
     * @param string $lang Language identifier.
     * @return string
     */
    public static function getCountryCode($ip = '', $lang = '')
    {
    }
    /**
     * Get the full country name.
     * @param string $ip Ip address.
     * @param string $lang Language identifier.
     * @return string
     */
    public static function getCountryName($ip = '', $lang = '')
    {
    }
    /**
     * Get the full city name.
     * @param string $ip Ip address.
     * @param string $lang Language identifier.
     * @return string|null
     */
    public static function getCityName($ip = '', $lang = '')
    {
    }
    /**
     * Get the Postal Code, FSA or Zip Code.
     * @param string $ip Ip address.
     * @param string $lang Language identifier.
     * @return string|null
     */
    public static function getCityPostCode($ip = '', $lang = '')
    {
    }
    /**
     * Get geo-position attribute.
     * @param string $ip Ip address.
     * @param string $lang Language identifier.
     * @return array|null
     */
    public static function getGeoPosition($ip = '', $lang = '')
    {
    }
    /**
     * Get the Latitude as signed double.
     * @param string $ip Ip address.
     * @param string $lang Language identifier.
     * @return string
     */
    public static function getGeoPositionLatitude($ip = '', $lang = '')
    {
    }
    /**
     * Get the Longitude as signed double.
     * @param string $ip Ip address.
     * @param string $lang Language identifier.
     * @return string
     */
    public static function getGeoPositionLongitude($ip = '', $lang = '')
    {
    }
    /**
     * Get the organization name.
     * @param string $ip Ip address.
     * @param string $lang Language identifier.
     * @return string
     */
    public static function getOrganizationName($ip = '', $lang = '')
    {
    }
    /**
     * Get the Internet Service Provider (ISP) name.
     * @param string $ip Ip address.
     * @param string $lang Language identifier.
     * @return string
     */
    public static function getIspName($ip = '', $lang = '')
    {
    }
    /**
     * Get the time zone for country and region code combo.
     * @param string $ip Ip address.
     * @param string $lang Language identifier.
     * @return string|null
     */
    public static function getTimezoneName($ip = '', $lang = '')
    {
    }
    /**
     * Get the all available information about geolocation.
     *
     * @param string  $ip Ip address.
     * @param string  $lang Language identifier.
     * @param array $required Required fields for result data.
     * @return Result | null
     */
    public static function getDataResult($ip = '', $lang = '', array $required = array())
    {
    }
    /**
     * @param $ip
     * @return bool| Result[]
     */
    private static function getFromStore($ip)
    {
    }
    /**
     * @param string $ip
     * @param Data[] $geoData
     */
    private static function saveToStore($ip, $geoData)
    {
    }
    /**
     * @return string
     */
    private static function getStoreVarName()
    {
    }
    /**
     * @param array $required
     * @param Data|ProvidingData $geoData
     * @return bool
     */
    private static function hasDataAllRequiredFields(array $required, $geoData)
    {
    }
    private static function initHandlers()
    {
    }
    /**
     * @param string $className
     * @return bool
     */
    private static function isHandlerClassValid($className)
    {
    }
    /**
     * @return string | false Ip address.
     */
    public static function getRealIp()
    {
    }
    /**
     * @return Base[] Handlers list.
     */
    public static function getHandlers()
    {
    }
    /**
     * @param string $className. Class name of handler.
     * @return Base | null Handler.
     */
    public static function getHandlerByClassName($className)
    {
    }
    /**
     * Turn on / off error logging for debugging purposes.
     * @param bool $isLog
     */
    public static function setLogErrors($isLog)
    {
    }
    /**
     * @param Base $handler
     * @return string Config HTML for admin interface form.
     */
    public static function getHandlerAdminConfigHtml(\Bitrix\Main\Service\GeoIp\Base $handler)
    {
    }
    /**
     * @param string $ip
     * @param string $lang
     * @param array $required
     * @return DataResult|null
     * @deprecated
     */
    public static function getData($ip = '', $lang = '', array $required = array())
    {
    }
    /**
     * @param bool $isUse
     * @deprecated
     */
    public static function useCookieToStoreInfo($isUse)
    {
    }
}