<?php

namespace Bitrix\Catalog;

/**
 * Class ProductGroupAccessTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> PRODUCT_ID int mandatory
 * <li> GROUP_ID int mandatory
 * <li> ACCESS_LENGTH int mandatory
 * <li> ACCESS_LENGTH_TYPE string(1) mandatory default 'D'
 * <li> PRODUCT reference to {@link \Bitrix\Catalog\ProductTable}
 * </ul>
 *
 * @package Bitrix\Catalog
 **/
class ProductGroupAccessTable extends \Bitrix\Main\Entity\DataManager
{
    const ACCESS_LENGTH_HOUR = 'H';
    const ACCESS_LENGTH_DAY = 'D';
    const ACCESS_LENGTH_WEEK = 'W';
    const ACCESS_LENGTH_MONTH = 'M';
    const ACCESS_LENGTH_QUART = 'Q';
    const ACCESS_LENGTH_SEMIYEAR = 'S';
    const ACCESS_LENGTH_YEAR = 'Y';
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
     * Return access period list.
     *
     * @param bool $descr			With description.
     * @return array
     */
    public static function getAccessPeriods($descr = false)
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