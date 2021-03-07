<?php

namespace Bitrix\Catalog;

/**
 * Class StoreProductTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> PRODUCT_ID int mandatory
 * <li> AMOUNT double mandatory
 * <li> STORE_ID int mandatory
 * <li> STORE reference to {@link \Bitrix\Catalog\StoreTable}
 * <li> PRODUCT reference to {@link \Bitrix\Catalog\ProductTable}
 * </ul>
 *
 * @package Bitrix\Catalog
 **/
class StoreProductTable extends \Bitrix\Main\Entity\DataManager
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