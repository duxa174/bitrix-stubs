<?php

namespace Bitrix\Sale\Delivery\Pecom;

/**
 * Class Location
 * @package Bitrix\Sale\Delivery\Pecom
 */
class Location extends \Bitrix\Sale\Delivery\ExternalLocationMap
{
    const EXTERNAL_SERVICE_CODE = 'PECOM';
    const CSV_FILE_PATH = '/bitrix/modules/sale/ru/delivery/pecom/location.csv';
    public static function compare($startKey = 0, $timeout = 0, $updateExist = false)
    {
    }
    /**
     * @param array $locations
     * @param int $srvId
     * @param int $startKey
     * @param int $timeout
     * @param bool $updateExist
     * @return int Last processed id.
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\ArgumentException
     */
    protected static function mapByNames($locations, $srvId, $startKey = 0, $timeout = 0, $updateExist = false)
    {
    }
    protected static function setMap(array $cities)
    {
    }
    /**
     * @return Result
     */
    protected static function getAllLocations()
    {
    }
    /**
     * Find regions by city names.
     * @param array $cityNames
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    protected static function getParents(array $cityNames)
    {
    }
    /**
     * SOKOLOVSKOE (GULKELIVICHSKIY R-N) => GULKELIVICHSKIY R-N
     * @param $cityName
     * @return string
     */
    protected static function extractDistrict(&$cityName)
    {
    }
}