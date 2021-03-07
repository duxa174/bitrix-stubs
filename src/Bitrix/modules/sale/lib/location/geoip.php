<?php

namespace Bitrix\Sale\Location;

class GeoIp
{
    /**
     * @param string $ip Ip address.
     * @param string $lang Language identifier.
     * @return int Location id.
     */
    public static function getLocationId($ip = '', $lang = LANGUAGE_ID)
    {
    }
    /**
     * @param string $ip Ip address.
     * @param string $lang Language identifier.
     * @return string Location code.
     */
    public static function getLocationCode($ip = '', $lang = LANGUAGE_ID)
    {
    }
    /**
     * @param string $ip Ip address.
     * @param string $lang Language.
     * @return string Zip (postal) code.
     */
    public static function getZipCode($ip, $lang = LANGUAGE_ID)
    {
    }
    /**
     * @param string $ip Ip address.
     * @param string $lang Language identifier.
     * @return Result.
     */
    protected static function getData($ip, $lang)
    {
    }
    /**
     * @param Result $geoIpData.
     * @param string $lang
     * @return array Location fields.
     */
    protected static function getLocationFields(\Bitrix\Main\Service\GeoIp\Result $geoIpData, $lang = LANGUAGE_ID)
    {
    }
    protected static function isParentsEmpty(\Bitrix\Main\Service\GeoIp\Data $geoData)
    {
    }
    protected static function specifyLocationByParents(\Bitrix\Main\Service\GeoIp\Data $geoData, array $locations, $lang)
    {
    }
    protected static function getLocationIdsByMargins(array $locations, $leftMargin, $rightMargin)
    {
    }
    /**
     * @param string $lang
     * @return Normalizer\INormalizer
     */
    protected static function getNameNormalizer($lang)
    {
    }
    /**
     * @param Data $geoData
     * @param string $name
     * @param string $lang
     * @return bool
     */
    protected static function isNameMatched(\Bitrix\Main\Service\GeoIp\Data $geoData, $name, $lang)
    {
    }
    /**
     * @param string $name
     * @param string $country
     * @param string $region
     * @param string $subregion
     * @return bool
     *
     * We are suggesting that names are already normalized for performance purposes.
     */
    protected static function isNormalizedNamesMatched($name, $country, $region, $subregion)
    {
    }
}