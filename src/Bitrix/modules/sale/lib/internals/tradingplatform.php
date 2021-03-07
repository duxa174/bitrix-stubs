<?php

namespace Bitrix\Sale;

/**
 * Class TradingPlatformTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> CODE string(20) mandatory
 * <li> NAME string(50) mandatory
 * <li> DESCRIPTION string(255) mandatory
 * <li> SETTINGS string mandatory
 * </ul>
 *
 * @package Bitrix\Sale
 **/
class TradingPlatformTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public static function validateCode()
    {
    }
    public static function validateActive()
    {
    }
    public static function validateName()
    {
    }
    public static function validateDescription()
    {
    }
    public static function validateCatalogSectionTabClassName()
    {
    }
    public static function validateClass()
    {
    }
}