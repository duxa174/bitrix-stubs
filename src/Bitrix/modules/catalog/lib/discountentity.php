<?php

namespace Bitrix\Catalog;

/**
 * Class DiscountEntityTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> DISCOUNT_ID int mandatory
 * <li> MODULE_ID string(50) mandatory
 * <li> ENTITY string(255) mandatory
 * <li> ENTITY_ID int optional
 * <li> ENTITY_VALUE string(255) optional
 * <li> FIELD_ENTITY string(255) mandatory
 * <li> FIELD_TABLE string(255) mandatory
 * </ul>
 *
 * @package Bitrix\Catalog
 **/
class DiscountEntityTable extends \Bitrix\Main\ORM\Data\DataManager
{
    const ENTITY_ELEMENT = 'ELEMENT';
    const ENTITY_ELEMENT_PROPERTY = 'ELEMENT_PROPERTY';
    const ENTITY_PRODUCT = 'PRODUCT';
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
     * Return entity by discount list.
     *
     * @param array $discountList			Discount id list.
     * @param array $filter				Additional filter.
     * @param bool $groupModule			Group by modules.
     * @return array
     */
    public static function getByDiscount(array $discountList, $filter = [], $groupModule = true)
    {
    }
}