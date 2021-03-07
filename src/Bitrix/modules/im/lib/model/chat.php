<?php

namespace Bitrix\Im\Model;

/**
 * Class ChatTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TITLE string(255) optional
 * <li> DESCRIPTION text optional
 * <li> TYPE string(1) optional
 * <li> AUTHOR_ID int mandatory
 * <li> AVATAR int optional
 * <li> COLOR string optional
 * <li> CALL_TYPE int optional
 * <li> CALL_NUMBER string(20) optional
 * <li> EXTRANET bool optional default 'N'
 * <li> ENTITY_TYPE string(50) optional
 * <li> ENTITY_ID string(255) optional
 * <li> ENTITY_DATA_1 string(255 optional
 * <li> ENTITY_DATA_2 string(255) optional
 * <li> ENTITY_DATA_3 string(255) optional
 * <li> DISK_FOLDER_ID int optional
 * <li> AUTHOR reference to {@link \Bitrix\User\UserTable}
 * </ul>
 *
 * @package Bitrix\Im
 **/
class ChatTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public static function onAfterAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onAfterUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function indexRecord($id)
    {
    }
    /**
     * @param array $fields Record as returned by getList
     * @return string
     */
    public static function generateSearchContent(array $fields)
    {
    }
    public static function validateTitle()
    {
    }
    public static function validateType()
    {
    }
    public static function validateColor()
    {
    }
    public static function validateEntityType()
    {
    }
    public static function validateEntityId()
    {
    }
    public static function validateCallNumber()
    {
    }
    public static function validateEntityData()
    {
    }
    public static function getCurrentDate()
    {
    }
    public static function validateMessageStatus()
    {
    }
}