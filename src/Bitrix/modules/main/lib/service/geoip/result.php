<?php

namespace Bitrix\Main\Service\GeoIp;

/**
 * Class Result
 * @package Bitrix\Main\Service\GeoIp
 * Contains info about success or error descriptions of receiving geolocation information,
 * and geolocation information.
 */
class Result extends \Bitrix\Main\Result
{
    /** @var Data Geolocation data */
    protected $geoData = null;
    /**
     * Result constructor.
     */
    public function __construct()
    {
    }
    /**
     * @return Data
     */
    public function getGeoData()
    {
    }
    /**
     * @param Data $geoData
     */
    public function setGeoData(\Bitrix\Main\Service\GeoIp\Data $geoData)
    {
    }
}