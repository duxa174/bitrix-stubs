<?php

namespace Bitrix\Catalog;

/**
 * Class StoreBarcodeTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> PRODUCT_ID int mandatory
 * <li> BARCODE string(100) mandatory
 * <li> STORE_ID int optional
 * <li> ORDER_ID int optional
 * <li> DATE_MODIFY datetime optional
 * <li> DATE_CREATE datetime optional
 * <li> CREATED_BY int optional
 * <li> MODIFIED_BY int optional
 * <li> PRODUCT reference to {@link \Bitrix\Catalog\Product}
 * <li> STORE reference to {@link \Bitrix\Catalog\Store}
 * <li> CREATED_BY_USER reference to {@link \Bitrix\Main\User}
 * <li> MODIFIED_BY_USER reference to {@link \Bitrix\Main\User}
 * </ul>
 *
 * @package Bitrix\Catalog
 **/
class StoreBarcodeTable extends \Bitrix\Main\Entity\DataManager
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