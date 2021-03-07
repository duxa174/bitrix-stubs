<?php

namespace Bitrix\Socialservices;

/**
 * Class ContactConnectTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TIMESTAMP_X datetime optional default 'CURRENT_TIMESTAMP'
 * <li> CONTACT_ID int mandatory
 * <li> CONTACT_PROFILE_ID int mandatory
 * <li> CONTACT_PORTAL string(255) mandatory
 * <li> CONNECT_TYPE string(1) optional default 'P'
 * </ul>
 *
 * @package Bitrix\Socialservices
 **/
class ContactConnectTable extends \Bitrix\Main\Entity\DataManager
{
    const TYPE_PORTAL = 'P';
    // bitrix24 portal
    const TYPE_EXTERNAL = 'E';
    // external site (box)
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
    public static function deleteByLink($linkId)
    {
    }
    public static function deleteByContact($contactId)
    {
    }
}