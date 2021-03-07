<?php

namespace Bitrix\Rest;

/**
 * Class EventOfflineTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TIMESTAMP_X datetime optional default 'CURRENT_TIMESTAMP'
 * <li> MESSAGE_ID varchar(100) mandatory
 * <li> APP_ID int mandatory
 * <li> EVENT_NAME string(255) mandatory
 * <li> EVENT_DATA string optional
 * <li> PROCESS_ID string(255) optional
 * <li> CONNECTOR_ID string(255) optional
 * </ul>
 *
 * @package Bitrix\Rest
 **/
class EventOfflineTable extends \Bitrix\Main\Entity\DataManager
{
    const PROCESS_ID_LIFETIME = 2952000;
    // 30 days
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
    public static function cleanProcessAgent()
    {
    }
    public static function callEvent($fields)
    {
    }
    public static function markEvents($filter, $order, $limit)
    {
    }
    public static function clearEvents($processId, $appId, $connectorId, $listIds = false)
    {
    }
    public static function clearEventsByMessageId($processId, $appId, $connectorId, $listIds = false)
    {
    }
    public static function markError($processId, $appId, $connectorId, array $listIds)
    {
    }
    protected static function getProcessId()
    {
    }
    protected static function getMessageId($fields)
    {
    }
}