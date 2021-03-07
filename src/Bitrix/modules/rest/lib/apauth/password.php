<?php

namespace Bitrix\Rest\APAuth;

/**
 * Class ApTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> USER_ID int mandatory
 * <li> AP string(50) mandatory
 * <li> ACTIVE bool optional default 'Y'
 * <li> TITLE string(255) optional
 * <li> COMMENT string(255) optional
 * <li> DATE_CREATE datetime optional
 * <li> DATE_LOGIN datetime optional
 * <li> LAST_IP string(255) optional
 * </ul>
 *
 * @package Bitrix\Rest
 **/
class PasswordTable extends \Bitrix\Main\Entity\DataManager
{
    const ACTIVE = 'Y';
    const INACTIVE = 'N';
    const DEFAULT_LENGTH = 16;
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
    public static function generatePassword($length = self::DEFAULT_LENGTH)
    {
    }
    /**
     * Generates AP for REST access.
     *
     * @param string $siteTitle Site title for AP description.
     *
     * @return bool|string password or false
     * @throws \Exception
     */
    public static function createPassword($userId, array $scopeList, $siteTitle, $returnArray = false)
    {
    }
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
}