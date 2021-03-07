<?php

namespace Bitrix\Rest;

/**
 * Class PlacementTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> APP_ID int optional
 * <li> PLACEMENT string(255) mandatory
 * <li> PLACEMENT_HANDLER string(255) mandatory
 * <li> TITLE string(255) optional
 * <li> COMMENT string(255) optional
 * <li> DATE_CREATE datetime optional
 * </ul>
 *
 * @package Bitrix\Rest
 **/
class PlacementTable extends \Bitrix\Main\Entity\DataManager
{
    const PLACEMENT_DEFAULT = 'DEFAULT';
    const ERROR_PLACEMENT_NOT_FOUND = 'ERROR_PLACEMENT_NOT_FOUND';
    const ERROR_PLACEMENT_MAX_COUNT = 'ERROR_PLACEMENT_MAX_COUNT';
    const CACHE_TTL = 86400;
    const CACHE_DIR = 'rest/placement';
    protected static $handlersListCache = array();
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
     * Returns list of placement handlers. Use \Bitrix\Rest\PlacementTable::getHandlersList.
     *
     * @param string $placement Placement ID.
     *
     * @return Main\DB\Result
     */
    public static function getHandlers($placement)
    {
    }
    /**
     * Removes all application placement handlers.
     *
     * @param int $appId Application ID.
     *
     * @return Main\DB\Result
     */
    public static function deleteByApp($appId)
    {
    }
    /**
     * Returns cached list of placement handlers.
     *
     * @param string $placement Placement ID
     * @param bool $skipInstallCheck Optional flag to allow placement from apps with unfinished install
     *
     * @return array
     */
    public static function getHandlersList($placement, $skipInstallCheck = false)
    {
    }
    public static function clearHandlerCache()
    {
    }
    public static function onBeforeUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onBeforeAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onAfterUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onAfterDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    protected static function getCacheId($placement)
    {
    }
    protected static function checkUniq(\Bitrix\Main\Entity\Event $event, $add = false)
    {
    }
}