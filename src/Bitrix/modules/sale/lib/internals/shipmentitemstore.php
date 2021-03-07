<?php

namespace Bitrix\Sale\Internals;

/**
 * Class ShipmentItemStoreTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> BASKET_ID int mandatory
 * <li> BARCODE string(100) optional
 * <li> STORE_ID int mandatory
 * <li> QUANTITY double mandatory
 * <li> DATE_CREATE datetime optional
 * <li> DATE_MODIFY datetime optional
 * <li> CREATED_BY int optional
 * <li> MODIFIED_BY int optional
 * </ul>
 *
 * @package Bitrix\Sale
 **/
class ShipmentItemStoreTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for BARCODE field.
     *
     * @return array
     */
    public static function validateBarcode()
    {
    }
}