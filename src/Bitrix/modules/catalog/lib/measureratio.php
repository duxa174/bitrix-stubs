<?php

namespace Bitrix\Catalog;

/**
 * Class MeasureRatioTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> PRODUCT_ID int mandatory
 * <li> RATIO double mandatory default 1
 * </ul>
 *
 * @package Bitrix\Catalog
 **/
class MeasureRatioTable extends \Bitrix\Main\Entity\DataManager
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
     * Return ratio for product list.
     *
     * @param array|int $product			Product id list.
     * @return array|bool
     * @throws Main\ArgumentException
     */
    public static function getCurrentRatio($product)
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