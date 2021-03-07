<?php

namespace Sale\Handlers\Delivery\Additional;

/**
 * Class Location
 * Convert service locations to local and back
 * @package Sale\Handlers\Delivery\Additional
 * We explain that Location types codes are:
 * COUNTRY, REGION, SUBREGION, CITY, VILLAGE
 */
class Location extends \Bitrix\Sale\Delivery\ExternalLocationMap
{
    const EXTERNAL_SERVICE_CODE = 'ADD_DLV';
    //public path
    const ETHALON_LOCATIONS_PATH = '/bitrix/services/saleservices/locations.zip';
    public static function compareStepless()
    {
    }
    public static function compare($stage, $step = '', $progress = 0, $timeout = 0)
    {
    }
    protected static function getLastEthalonLoc()
    {
    }
    protected static function getLocationsFilePath()
    {
    }
    protected static function getReplacementClass()
    {
    }
    protected static function getCountryName()
    {
    }
    protected static function mapByNames($srvId, $startId = 0, $timeout = 0)
    {
    }
    protected static function mapByCodes($srvId)
    {
    }
    protected static function updateLinksInfo($srvId)
    {
    }
    protected static function saveCsvToTmpTable($path)
    {
    }
    protected static function unpackLocations($archivePath)
    {
    }
    protected static function downloadLocations()
    {
    }
}