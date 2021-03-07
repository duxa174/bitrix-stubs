<?php

namespace Bitrix\Sale\Delivery\Requests;

/**
 * Class ShipmentTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> SHIPMENT_ID int mandatory *
 * <li> REQUEST_ID int optional
 * <li> EXTERNAL_ID int optional
 * <li> ERROR_DESCRIPTION string
 * </ul>
 *
 * @package Bitrix\Sale\Delivery\Requests
 **/
class ShipmentTable extends \Bitrix\Main\Entity\DataManager
{
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
    /**
     * @return array
     */
    public static function validateType()
    {
    }
    /**
     * @return array
     */
    public static function validateErrorDescription()
    {
    }
    public static function setShipment(array $fields)
    {
    }
}