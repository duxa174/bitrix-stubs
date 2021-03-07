<?php

namespace Bitrix\Sale\TradingPlatform;

/**
 * Class OrderTable
 * Links external order id with internal order id.
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ORDER_ID int mandatory
 * <li> TRADING_PLATFORM_ID int mandatory
 * <li> EXTERNAL_ORDER_ID string(100) mandatory
 * <li> EXTERNAL_ORDER \Bitrix\Sale\TradingPlatform optional
 * </ul>
 *
 * @package Bitrix\Sale\TradingPlatform
 **/
class OrderTable extends \Bitrix\Main\Entity\DataManager
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
    public static function validateExternalOrderId()
    {
    }
    public static function deleteByOrderId($orderId)
    {
    }
}