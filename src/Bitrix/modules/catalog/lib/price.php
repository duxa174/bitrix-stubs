<?php

namespace Bitrix\Catalog;

/**
 * Class PriceTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> PRODUCT_ID int mandatory
 * <li> EXTRA_ID int optional
 * <li> CATALOG_GROUP_ID int mandatory
 * <li> PRICE double mandatory
 * <li> CURRENCY string(3) mandatory
 * <li> TIMESTAMP_X datetime mandatory default 'CURRENT_TIMESTAMP'
 * <li> QUANTITY_FROM int optional
 * <li> QUANTITY_TO int optional
 * <li> TMP_ID string(40) optional
 * <li> PRICE_SCALE double optional
 * </ul>
 *
 * @package Bitrix\Catalog
 **/
class PriceTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for CURRENCY field.
     *
     * @return array
     */
    public static function validateCurrency()
    {
    }
    /**
     * Returns validators for TMP_ID field.
     *
     * @return array
     */
    public static function validateTmpId()
    {
    }
    /**
     * Delete all rows for product.
     * @internal
     *
     * @param int $id       Product id.
     * @return void
     */
    public static function deleteByProduct($id)
    {
    }
}