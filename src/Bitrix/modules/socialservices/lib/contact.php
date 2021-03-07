<?php

namespace Bitrix\Socialservices;

/**
 * Class ContactTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TIMESTAMP_X datetime optional default 'CURRENT_TIMESTAMP'
 * <li> USER_ID int mandatory
 * <li> CONTACT_USER_ID int optional
 * <li> CONTACT_XML_ID int optional
 * <li> CONTACT_NAME string(255) optional
 * <li> CONTACT_LAST_NAME string(255) optional
 * <li> CONTACT_PHOTO string(255) optional
 * <li> NOTIFY bool optional default 'N'
 * </ul>
 *
 * @package Bitrix\Socialservices
 **/
class ContactTable extends \Bitrix\Main\Entity\DataManager
{
    const NOTIFY = 'Y';
    const DONT_NOTIFY = 'N';
    const NOTIFY_CONTACT_COUNT = 3;
    const NOTIFY_POSSIBLE_COUNT = 3;
    const POSSIBLE_LAST_AUTHORIZE_LIMIT = '-1 weeks';
    const POSSIBLE_RESET_TIME = 2592000;
    // 86400 * 30
    const POSSIBLE_RESET_TIME_KEY = "_ts";
    protected static $notifyStack = array();
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
    /**
     * @deprecated
     */
    public static function onUserLoginSocserv($params)
    {
    }
    public static function onNetworkBroadcast($data)
    {
    }
    protected static function processContacts($owner, array $contactsList)
    {
    }
    protected static function processPossibleContacts($owner, array $contactsList)
    {
    }
    public static function getConnectId($connect)
    {
    }
    protected static function notifyJoin($contactId, array $contactInfo = null)
    {
    }
    protected static function notifyJoinFinish($userId)
    {
    }
    /**
     * @deprecated
     */
    protected static function notifyPossible($userId)
    {
    }
}