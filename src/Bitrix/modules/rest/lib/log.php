<?php

namespace Bitrix\Rest;

/**
 * Class LogTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TIMESTAMP_X datetime mandatory default 'CURRENT_TIMESTAMP'
 * <li> CLIENT_ID string(45) optional
 * <li> PASSWORD_ID int optional
 * <li> SCOPE string(50) optional
 * <li> METHOD string(255) optional
 * <li> REQUEST_URI string(255) optional
 * <li> REQUEST_DATA string optional
 * <li> RESPONSE_DATA string optional
 * </ul>
 *
 * @package Bitrix\Rest
 **/
class LogTable extends \Bitrix\Main\Entity\DataManager
{
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
    /**
     * Checks if logging is applicable to the data and logs it if this is the case.
     *
     * @param \CRestServer $server REST call context.
     * @param string $data Response content.
     *
     * @return void
     *
     * @see \Bitrix\Rest\Log::checkEntry
     * @see \Bitrix\Rest\Log::addEntry
     */
    public static function log(\CRestServer $server, $data)
    {
    }
    /**
     * Checks if logging is applicable to the rest call.
     *
     * @param \CRestServer $server REST call context.
     *
     * @return void
     */
    public static function checkEntry(\CRestServer $server)
    {
    }
    /**
     * Adds a log entry.
     *
     * @param \CRestServer $server REST call context.
     * @param string $data Response content.
     *
     * @return void
     */
    public static function addEntry(\CRestServer $server, $data)
    {
    }
    public static function getCountAll()
    {
    }
    public static function clearAll()
    {
    }
    public static function cleanUpAgent()
    {
    }
}