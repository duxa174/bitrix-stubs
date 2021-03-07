<?php

namespace Bitrix\Sale;

/**
 * Class SalesZone
 * @package Bitrix\Sale *
 */
class SalesZone
{
    const CONN_ENTITY_NAME = 'Bitrix\\Sale\\Location\\SiteLocation';
    const LOCATION_ENTITY_NAME = 'Bitrix\\Sale\\Location\\Location';
    static $zoneCache = array();
    // functionality is called hell number of times outside, so a little cache is provided
    /**
     * @param string $lang - language Id
     * @return array - list of all regions
     */
    public static function getAllRegions($lang)
    {
    }
    /**
     * @param string $lang - language Id
     * @return array - list of all cities
     */
    public static function getAllCities($lang)
    {
    }
    /**
     * Checks if country Id is in list of sales zone countries Ids.
     * @param int $countryId
     * @param string $siteId
     * @return bool
     */
    public static function checkCountryId($countryId, $siteId)
    {
    }
    /**
     * Checks if regionId is in list of sales zone regions Ids
     * @param int $regionId
     * @param string $siteId
     * @return bool
     */
    public static function checkRegionId($regionId, $siteId)
    {
    }
    /**
     * Checks if citiy Id is in list of sales zone cities Ids
     * @param int $cityId
     * @param string $siteId
     * @return bool
     */
    public static function checkCityId($cityId, $siteId)
    {
    }
    /**
     * Checks if location id is in sales zone
     * @param int $locationId
     * @param string $siteId
     * @return bool
     */
    public static function checkLocationId($locationId, $siteId)
    {
    }
    private static function checkLocationIsInLinkedPart($locationId, $siteId)
    {
    }
    public static function setSelectedIds($siteId, $ids)
    {
    }
    public static function getSelectedIds($siteId)
    {
    }
    // returns a list of IDs of locations that are linked with $siteId and have type of $type
    private static function getSelectedTypeIds($type, $siteId)
    {
    }
    /**
     * @param string $siteId
     * @return array - sales zones cities Ids
     */
    public static function getCitiesIds($siteId)
    {
    }
    /**
     * @param string $siteId
     * @return array - sales zones regions Ids
     */
    public static function getRegionsIds($siteId)
    {
    }
    /**
     * @param string $siteId
     * @return array - sales zones countries Ids
     */
    public static function getCountriesIds($siteId)
    {
    }
    /**
     * A very important function. Here we decide what locations we need to take, 
     * making a descision based on $_REQUEST from sales zone selector.
     * 
     * Then we normalize the selection and store to database.
     * 
     * Also this function is used in data migrator.
     */
    public static function saveSelectedTypes($typeList, $siteId)
    {
    }
    /**
     * Returns filter for using in queries such as in bitrix/modules/sale/install/components/bitrix/sale.ajax.locations/search.php
     * @param string $object (city|region|country)
     * @param string $siteId
     * @return array
     */
    public static function makeSearchFilter($object, $siteId)
    {
    }
    /**
     * @param array $countriesIds
     * @param string $lang
     * @return array - regions from sales zone
     */
    public static function getRegions($countriesIds = array(), $lang = LANGUAGE_ID)
    {
    }
    /**
     * @param array $countriesIds
     * @param array $regionsIds
     * @param string $lang
     * @return array cities list from sales zone
     */
    public static function getCities($countriesIds = array(), $regionsIds = array(), $lang)
    {
    }
}