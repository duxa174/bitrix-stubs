<?php

namespace Bitrix\Rest;

/**
 * Class StatTable
 *
 * Fields:
 * <ul>
 * <li> STAT_DATE date mandatory
 * <li> APP_ID int mandatory
 * <li> METHOD_ID int mandatory
 * <li> PASSWORD_ID int mandatory
 * <li> HOUR_0 int mandatory
 * <li> HOUR_1 int mandatory
 * <li> HOUR_2 int mandatory
 * <li> HOUR_3 int mandatory
 * <li> HOUR_4 int mandatory
 * <li> HOUR_5 int mandatory
 * <li> HOUR_6 int mandatory
 * <li> HOUR_7 int mandatory
 * <li> HOUR_8 int mandatory
 * <li> HOUR_9 int mandatory
 * <li> HOUR_10 int mandatory
 * <li> HOUR_11 int mandatory
 * <li> HOUR_12 int mandatory
 * <li> HOUR_13 int mandatory
 * <li> HOUR_14 int mandatory
 * <li> HOUR_15 int mandatory
 * <li> HOUR_16 int mandatory
 * <li> HOUR_17 int mandatory
 * <li> HOUR_18 int mandatory
 * <li> HOUR_19 int mandatory
 * <li> HOUR_20 int mandatory
 * <li> HOUR_21 int mandatory
 * <li> HOUR_22 int mandatory
 * <li> HOUR_23 int mandatory
 * </ul>
 *
 * @package Bitrix\Rest
 **/
/**
 * Class StatTable
 * @deprecated
 */
class StatTable extends \Bitrix\Main\Entity\DataManager
{
    const STORE_PERIOD = 5184000;
    // 60*24*3600
    protected static $data = array();
    protected static $dataPassword = array();
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    public static function log(\CRestServer $server)
    {
    }
    public static function logApMethod($passwordID, $methodName)
    {
    }
    public static function logMethod($clientId, $methodName)
    {
    }
    public static function logEvent($clientId, $eventName)
    {
    }
    public static function logPlacement($clientId, $placementName)
    {
    }
    public static function logRobot($clientId)
    {
    }
    public static function logActivity($clientId)
    {
    }
    protected static function addApToLog($passwordID, $methodName, $methodType)
    {
    }
    protected static function addToLog($clientId, $methodName, $methodType)
    {
    }
    public static function finalize()
    {
    }
    public static function reset()
    {
    }
    /**
     * @param array $filter
     */
    public static function deleteByFilter(array $filter)
    {
    }
    /**
     * @param array $filter
     * @param array $fields
     */
    public static function updateByFilter(array $filter, array $fields)
    {
    }
    public static function cleanUpAgent()
    {
    }
}