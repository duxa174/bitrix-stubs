<?php

namespace Bitrix\Sale\Internals;

/**
 * Class DiscountGroupTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> DISCOUNT_ID int mandatory
 * <li> ACTIVE string(1) optional
 * <li> GROUP_ID int mandatory
 * <li> DISCOUNT reference to {@link \Bitrix\Sale\Internals\DiscountTable}
 * </ul>
 *
 * @package Bitrix\Sale\Internals
 **/
class DiscountGroupTable extends \Bitrix\Main\Entity\DataManager
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
     * Delete user group list by discount.
     *
     * @param int $discount			Discount id.
     * @return void
     */
    public static function deleteByDiscount($discount)
    {
    }
    /**
     * Update user group list by discount.
     *
     * @param int $discount			Discount id.
     * @param array $groupList		User group list.
     * @param string $active		Discount active flag.
     * @param bool $clear			Clear old values.
     * @return bool
     */
    public static function updateByDiscount($discount, $groupList, $active, $clear)
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
     * Returns discount list by user groups.
     *
     * @param array $groupList			User group list.
     * @param array $filter				Additional filter.
     * @return array
     */
    public static function getDiscountByGroups($groupList, $filter = array())
    {
    }
    /**
     * Return active discounts by user group list.
     *
     * @param array $groupList			User group list.
     * @return array
     */
    public static function getActiveDiscountByGroups($groupList)
    {
    }
}