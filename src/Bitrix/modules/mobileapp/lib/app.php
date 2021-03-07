<?php

namespace Bitrix\MobileApp;

/**
 * Class AppTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> CODE string(255) optional
 * <li> PLATFORM string(255) optional
 * <li> SHORT_NAME string(20) optional
 * <li> NAME string(255) optional
 * <li> DESCRIPTION string(255) optional
 * <li> FOLDER string(255) optional
 * <li> DATE_CREATE datetime optional
 * </ul>
 *
 * @package Bitrix\Mobileapp
 **/
class AppTable extends \Bitrix\Main\Entity\DataManager
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
    public static function validateCode()
    {
    }
    public static function validateShortName()
    {
    }
    public static function validateName()
    {
    }
    public static function validateFolder()
    {
    }
    public static function isAppExists($code)
    {
    }
    public static function onAfterDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function checkFields(\Bitrix\Main\Entity\Result $result, $primary, array $data)
    {
    }
    public static function getSupportedPlatforms()
    {
    }
}