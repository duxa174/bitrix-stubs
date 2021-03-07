<?php

namespace Bitrix\Rest;

/**
 * Class EventTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> APP_ID int mandatory
 * <li> EVENT_NAME string(255) mandatory
 * <li> EVENT_HANDLER string(255) mandatory
 * <li> USER_ID int optional
 * </ul>
 *
 * @package Bitrix\Rest
 **/
class EventTable extends \Bitrix\Main\Entity\DataManager
{
    const ERROR_EVENT_NOT_FOUND = 'ERROR_EVENT_NOT_FOUND';
    const TYPE_ONLINE = 'online';
    const TYPE_OFFLINE = 'offline';
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
     * Removes all application event handlers.
     *
     * @param int $appId Application ID.
     *
     * @return Main\DB\Result
     */
    public static function deleteByApp($appId)
    {
    }
    /**
     * Removes application install event handler.
     *
     * @param int $appId Application ID.
     *
     * @return Main\DB\Result
     */
    public static function deleteAppInstaller($appId)
    {
    }
    /**
     * @deprecated
     *
     * Use \Bitrix\Rest\HandlerHelper::checkCallback
     */
    public static function checkCallback($eventCallback, $appInfo, $checkInstallUrl = true)
    {
    }
    public static function onBeforeUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onBeforeAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function bind($eventName)
    {
    }
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onAfterUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    protected static function checkUniq(\Bitrix\Main\Entity\Event $event)
    {
    }
}