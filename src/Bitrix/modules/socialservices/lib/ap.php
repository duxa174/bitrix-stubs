<?php

namespace Bitrix\Socialservices;

/**
 * Class ApTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TIMESTAMP_X datetime optional default 'CURRENT_TIMESTAMP'
 * <li> USER_ID int mandatory
 * <li> DOMAIN string(255) optional
 * <li> ENDPOINT string(255) optional
 * <li> LOGIN string(50) optional
 * <li> PASSWORD string(50) optional
 * <li> LAST_AUTHORIZE datetime optional
 * </ul>
 *
 * @package Bitrix\Socialservices
 **/
class ApTable extends \Bitrix\Main\Entity\DataManager
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
    public static function onBeforeUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function getConnection()
    {
    }
}