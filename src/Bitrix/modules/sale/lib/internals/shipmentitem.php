<?php

namespace Bitrix\Sale\Internals;

/**
 * Class OrderDeliveryBasketTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ORDER_DELIVERY_ID int mandatory
 * <li> BASKET_ID int mandatory
 * <li> QUANTITY unknown mandatory
 * <li> RESERVED_QUANTITY unknown mandatory
 * </ul>
 *
 * @package Bitrix\Sale
 **/
class ShipmentItemTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns path to the file which contains definition of the class.
     *
     * @return string
     */
    public static function getFilePath()
    {
    }
    /**
     * @param $id
     * @return Main\Entity\DeleteResult
     * @throws Main\ArgumentException
     */
    public static function deleteWithItems($id)
    {
    }
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
}