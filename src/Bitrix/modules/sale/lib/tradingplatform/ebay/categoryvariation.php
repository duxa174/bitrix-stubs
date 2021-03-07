<?php

namespace Bitrix\Sale\TradingPlatform\Ebay;

/**
 * Class CategoryVariationTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> CATEGORY_ID int mandatory
 * <li> NAME string(255) mandatory
 * <li> REQUIRED string(1) mandatory
 * <li> MIN_VALUES int mandatory
 * <li> MAX_VALUES int mandatory
 * <li> SELECTION_MODE string(255) mandatory
 * <li> ALLOWED_AS_VARIATION string(1) optional
 * <li> HELP_URL string(255) optional
 * <li> VALUE text optional
 * </ul>
 *
 * @package Bitrix\Sale\TradingPlatform\Ebay
 **/
class CategoryVariationTable extends \Bitrix\Main\Entity\DataManager
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
    public static function validateName()
    {
    }
    public static function validateValue()
    {
    }
    public static function validateRequired()
    {
    }
    public static function validateSelectionMode()
    {
    }
    public static function validateAllowedAsVariation()
    {
    }
    public static function validateHelpUrl()
    {
    }
}