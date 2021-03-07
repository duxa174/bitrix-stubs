<?php

namespace Bitrix\Rest;

/**
 * Class UsageStatTable
 *
 * Fields:
 * <ul>
 * <li> STAT_DATE date mandatory
 * <li> ENTITY_ID int mandatory
 * <li> IS_SENT bool optional default 'N'
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
class UsageStatTable extends \Bitrix\Main\Entity\DataManager
{
    protected static $data = array();
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
    public static function logHookMethod($passwordID, $methodName)
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
    public static function logRobot($clientId, $clientCode)
    {
    }
    public static function logActivity($clientId, $clientCode)
    {
    }
    public static function logConfiguration($clientId, $clientCode)
    {
    }
    public static function logMessage($clientId, $messageType)
    {
    }
    public static function logLanding($clientId, $type, $count = 1)
    {
    }
    protected static function increment($entityType, $entityId, $subEntityType, $subEntityName)
    {
    }
    protected static function getEntityKey($entityType, $entityId, $subEntityType, $subEntityName)
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
     * @param array $fields
     */
    public static function updateByFilter(array $filter, array $fields)
    {
    }
    /**
     * @param array $filter
     */
    public static function deleteByFilter(array $filter)
    {
    }
    public static function cleanUpAgent()
    {
    }
    public static function sendAgent()
    {
    }
    public static function sendDateStat($date)
    {
    }
}