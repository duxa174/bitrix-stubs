<?php

namespace Bitrix\Sale\Delivery\ExtraServices;

/**
 * Class Table
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> CODE string(50) optional
 * <li> NAME string(255) mandatory
 * <li> DESCRIPTION string(255) optional
 * <li> CLASS_NAME string(255) mandatory
 * <li> PARAMS string optional
 * <li> RIGHTS string(3) mandatory
 * <li> DELIVERY_ID int mandatory
 * <li> INIT_VALUE string(255) optional
 * <li> ACTIVE string(1) mandatory
 * <li> SORT int optional default 100
 * </ul>
 *
 * @package Bitrix\Sale\Delivery\ExtraServices
 **/
class Table extends \Bitrix\Main\Entity\DataManager
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
    public static function validateName()
    {
    }
    public static function validateDescription()
    {
    }
    public static function validateClassName()
    {
    }
    public static function validateRights()
    {
    }
    public static function validateInitial()
    {
    }
    public static function validateActive()
    {
    }
    public static function onBeforeDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
}