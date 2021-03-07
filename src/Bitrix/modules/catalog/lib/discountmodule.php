<?php

namespace Bitrix\Catalog;

/**
 * Class DiscountModuleTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> DISCOUNT_ID int mandatory
 * <li> MODULE_ID string(50) mandatory
 * </ul>
 *
 * @package Bitrix\Catalog
 **/
class DiscountModuleTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for MODULE_ID field.
     *
     * @return array
     */
    public static function validateModuleId()
    {
    }
    /**
     * Delete modules by discount.
     *
     * @param int $discount			Discount id.
     * @return void
     */
    public static function deleteByDiscount($discount)
    {
    }
}