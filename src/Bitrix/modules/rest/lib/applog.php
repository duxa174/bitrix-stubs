<?php

namespace Bitrix\Rest;

/**
 * Class AppLogTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TIMESTAMP_X datetime mandatory default 'CURRENT_TIMESTAMP'
 * <li> APP_ID int mandatory
 * <li> ACTION_TYPE string(50) mandatory
 * <li> USER_ID int mandatory
 * <li> USER_ADMIN bool optional default 'Y'
 * </ul>
 *
 * @package Bitrix\Rest
 **/
class AppLogTable extends \Bitrix\Main\Entity\DataManager
{
    const ACTION_TYPE_ADD = 'ADD';
    const ACTION_TYPE_INSTALL = 'INSTALL';
    const ACTION_TYPE_UPDATE = 'UPDATE';
    const ACTION_TYPE_UNINSTALL = 'UNINSTALL';
    const USER_ADMIN = 'Y';
    const USER_NOT_ADMIN = 'N';
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
    public static function log($appId, $action)
    {
    }
}