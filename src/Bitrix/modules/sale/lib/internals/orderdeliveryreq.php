<?php

namespace Bitrix\Sale\Internals;

/**
 * Class OrderDeliveryReqTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ORDER_ID int mandatory
 * <li> DELIVERY_LOCATION string(50) optional
 * <li> DATE_REQUEST datetime optional
 * <li> PARAMS string optional
 * </ul>
 *
 * @package Bitrix\Sale\Delivery
 **/
class OrderDeliveryReqTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public static function validateLocation()
    {
    }
}