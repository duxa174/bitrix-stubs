<?php

namespace Bitrix\Sale\Internals;

/**
 * Class DiscountEntitiesTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> DISCOUNT_ID int mandatory
 * <li> MODULE_ID string(50) mandatory
 * <li> ENTITY string(255) mandatory
 * <li> FIELD_ENTITY string(255) mandatory
 * <li> FIELD_TABLE string(255) mandatory
 * </ul>
 *
 * @package Bitrix\Sale\Internals
 **/
class DiscountEntitiesTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for ENTITY field.
     *
     * @return array
     */
    public static function validateEntity()
    {
    }
    /**
     * Returns validators for FIELD_ENTITY field.
     *
     * @return array
     */
    public static function validateFieldEntity()
    {
    }
    /**
     * Returns validators for FIELD_TABLE field.
     *
     * @return array
     */
    public static function validateFieldTable()
    {
    }
    /**
     * Delete entity list by discount.
     *
     * @param int $discount			Discount id.
     * @return void
     */
    public static function deleteByDiscount($discount)
    {
    }
    /**
     * Update entity list by discount.
     *
     * @param int $discount				Discount id.
     * @param array $entityList			Discount entity list.
     * @param bool $clear				Clear old values.
     * @return bool
     */
    public static function updateByDiscount($discount, $entityList, $clear)
    {
    }
    /**
     * Return entity by discount list.
     *
     * @param array $discountList			Discount id list.
     * @param array $filter				Additional filter.
     * @param bool $groupModule			Group by modules.
     * @return array
     */
    public static function getByDiscount($discountList, $filter = array(), $groupModule = true)
    {
    }
}