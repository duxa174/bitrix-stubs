<?php

namespace Bitrix\MobileApp\Designer;

/**
 * Class ConfigTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> APP_CODE string(255) optional
 * <li> PLATFORM string(255) optional
 * <li> PARAMS string optional
 * <li> DATE_CREATE datetime optional
 * </ul>
 *
 * @package Bitrix\Mobileapp
 **/
class ConfigTable extends \Bitrix\Main\Entity\DataManager
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
    public static function validateAppCode()
    {
    }
    public static function validatePlatform()
    {
    }
    public static function getSupportedPlatforms()
    {
    }
    public static function checkFields(\Bitrix\Main\Entity\Result $result, $primary, array $data)
    {
    }
    public static function isExists($appCode, $platform)
    {
    }
}