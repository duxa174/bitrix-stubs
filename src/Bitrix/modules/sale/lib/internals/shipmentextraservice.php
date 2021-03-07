<?php

namespace Bitrix\Sale\Internals;

/**
 * Class ShipmentExtraServiceTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> SHIPMENT_ID int mandatory
 * <li> EXTRA_SERVICE_ID int mandatory
 * <li> VALUE string(255) optional
 * </ul>
 *
 * @package Bitrix\Sale\Internals
 **/
class ShipmentExtraServiceTable extends \Bitrix\Main\Entity\DataManager
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
    public static function validateValue()
    {
    }
    public static function deleteByShipmentId($shipmentId)
    {
    }
}