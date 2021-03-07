<?php

namespace Bitrix\Sale\Internals;

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
 * @package Bitrix\Sale\Internals
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
     * @param int $discount				Discount id.
     * @return void
     */
    public static function deleteByDiscount($discount)
    {
    }
    /**
     * Update module list by discount.
     *
     * @param int $discount			Discount id.
     * @param array $moduleList		Modules list.
     * @param bool $clear			Clear old values.
     * @return bool
     */
    public static function updateByDiscount($discount, $moduleList, $clear)
    {
    }
    /**
     * Returns modules by discount list.
     *
     * @param array $discountList			Discount list.
     * @param array $filter				Additional filter.
     * @return array
     */
    public static function getByDiscount($discountList, $filter = array())
    {
    }
}