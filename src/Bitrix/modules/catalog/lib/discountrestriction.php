<?php

namespace Bitrix\Catalog;

/**
 * Class DiscountRestrictionTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> DISCOUNT_ID int mandatory
 * <li> ACTIVE bool optional
 * <li> USER_GROUP_ID int mandatory default -1
 * <li> PRICE_TYPE_ID int mandatory default -1
 * </ul>
 *
 * @package Bitrix\Catalog
 **/
class DiscountRestrictionTable extends \Bitrix\Main\Entity\DataManager
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
     * Change active flag in table by discount.
     *
     * @param int $discount			Discount id.
     * @param string $active		Discount active flag.
     * @return void
     */
    public static function changeActiveByDiscount($discount, $active)
    {
    }
    /**
     * Delete restriction list by discount.
     *
     * @param int $discount			Discount id.
     * @return void
     */
    public static function deleteByDiscount($discount)
    {
    }
}