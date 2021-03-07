<?php

/**
 * Class CSaleYMLocation
 * Mapping yandex locations to bitrix locations
 */
class CSaleYMLocation
{
    private $cityNames = \null;
    private $cacheId = "CSaleYMLocations";
    const EXTERNAL_SERVICE_CODE = 'YAMARKET';
    public function __construct()
    {
    }
    /**
     * returns locations data
     */
    private function getData()
    {
    }
    /**
     * Loads data from base
     */
    private function loadDataToCache()
    {
    }
    /**
     * @param $cityName
     * @return int location id
     */
    public function getLocationByCityName($cityName)
    {
    }
    protected function getLocationByExternalIds($yandexLocationsIds)
    {
    }
    protected function extractLocations($yandexLocation)
    {
    }
    public function getLocationId($yandexLocation)
    {
    }
}