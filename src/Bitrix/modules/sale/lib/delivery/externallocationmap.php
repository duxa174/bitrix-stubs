<?php

namespace Bitrix\Sale\Delivery;

/**
 * Class ExternalLocationMap
 * @package Bitrix\Sale\Delivery
 * Helper class for locations mapping.
 */
class ExternalLocationMap
{
    //Dlivery idtifyer, stored in \Bitrix\Sale\Location\ExternalServiceTable : CODE
    const EXTERNAL_SERVICE_CODE = '';
    //Path to file (if exist) were we can get prepared locations map
    const CSV_FILE_PATH = '';
    const CITY_NAME_IDX = 0;
    const REGION_NAME_IDX = 1;
    const CITY_XML_ID_IDX = 2;
    /**
     * Abstract.
     * Must return in Result->data all locations from external delivery service.
     * @return Result.
     * @throws SystemException
     */
    protected static function getAllLocations()
    {
    }
    /**
     * Returns internal location id
     * @param string $externalCode
     * @return int
     */
    public static function getInternalId($externalCode)
    {
    }
    /**
     * Returns external location id
     * @param int $locationId
     * @return int|string
     */
    public static function getExternalId($locationId)
    {
    }
    protected static function getUpperCityExternalId($locationId, $srvId)
    {
    }
    /**
     * Returns external location city id
     * @param int $locationId
     * @return int|string
     */
    public static function getCityId($locationId)
    {
    }
    /**
     * Install locations map.
     * @return Result
     */
    public static function install()
    {
    }
    /**
     * Uninstall locations map.
     * @return Result
     * @throws \Exception
     */
    public static function unInstall()
    {
    }
    /**
     * Check locations map was sat.
     * @return bool
     */
    public static function isInstalled()
    {
    }
    /**
     * Refresh locations map.
     * @return Result
     * @throws ArgumentNullException
     */
    public static function refresh()
    {
    }
    /**
     * Import locations map from csv file to database.
     * @param string $path
     * @return bool|int Quantity of mapped locations.
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Exception
     */
    public static function importFromCsv($path)
    {
    }
    /**
     * Export locations map from database to file, csv format.
     * @param string $path
     * @return bool|int
     */
    public static function exportToCsv($path)
    {
    }
    /**
     * If exist returns id, if not exist create it
     * @return int External service Id
     * @throws \Exception
     */
    public static function getExternalServiceId()
    {
    }
    /**
     * Decodes data from utf8 if we need
     * @param $str
     * @return bool|string
     */
    protected static function utfDecode($str)
    {
    }
    /**
     * Convert find location by city and region names and add mapping to base
     * @param array $cities
     * @return Result
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Exception
     */
    protected static function setMap(array $cities)
    {
    }
    /**
     * @param int $srvId
     * @param int $locationId
     * @param string $xmlId
     * @param bool $updateExist
     * @return \Bitrix\Main\Entity\AddResult|\Bitrix\Main\Entity\Result|\Bitrix\Main\Entity\UpdateResult
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Exception
     */
    public static function setExternalLocation2($srvId, $locationId, $xmlId, $updateExist = false)
    {
    }
    /**
     * @param int $srvId
     * @param int $locationId
     * @param string $xmlId
     * @param bool $updateExist
     * @return bool
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Exception
     */
    public static function setExternalLocation($srvId, $locationId, $xmlId, $updateExist = false)
    {
    }
    protected static function isNormalizedTableFilled()
    {
    }
    /**
     * Fill table b_sale_hdaln with locations with normalized names
     * @param int|bool $startId
     * @param int $timeout
     * @return int
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public static function fillNormalizedTable($startId = false, $timeout = 0)
    {
    }
    /**
     * @param string $name Location name.
     * @param string $city Citry name.
     * @param string $subregion Subregions name.
     * @param string $region Region name.
     * @param string $country Country name.
     * @param bool $exactOnly If we search exact name, or partly coincidence is enought
     * @return int
     * @throws \Bitrix\Main\Db\SqlQueryException
     * @throws \Exception
     */
    public static function getLocationIdByNames($name, $city, $subregion, $region, $country = '', $exactOnly = false)
    {
    }
    protected static function getIdByMargin($parentLeft, $parentRight, $lMargins)
    {
    }
    protected static function getNameByMargin($parentLeft, $parentRight, $lMargins)
    {
    }
}