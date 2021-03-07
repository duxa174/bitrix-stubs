<?php

namespace Bitrix\Sale\Discount\Gift;

/**
 * @internals
 *
 * Class RelatedDataTable.
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> DISCOUNT_ID int mandatory
 * <li> ELEMENT_ID int optional
 * <li> SECTION_ID int optional
 * <li> MAIN_PRODUCT_SECTION_ID int optional
 * </ul>
 *
 * @package Bitrix\Sale\Discount\Gift
 **/
final class RelatedDataTable extends \Bitrix\Main\Entity\DataManager
{
    const MAX_LENGTH_BATCH_MYSQL_QUERY = 2048;
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
     * Deletes rows by discounts.
     *
     * @param array $discountIds List of discount ids.
     * @return void
     */
    public static function deleteByDiscounts(array $discountIds)
    {
    }
    /**
     * Deletes rows by discount id.
     *
     * @param int $discountId Id of discount.
     * @return void
     */
    public static function deleteByDiscount($discountId)
    {
    }
    /**
     * Fills table of related data by discount.
     *
     * @param array $discount Discount.
     * @return void
     */
    public static function fillByDiscount(array $discount)
    {
    }
    /**
     * Returns gift data which contains list of section id, element id. It's gifts for the discount.
     *
     * @param array $discount The discount.
     * @return array
     */
    public static function getGiftsData(array $discount)
    {
    }
    /**
     * Returns main product data which contains list of section id, element id. It's main products for the discount.
     *
     * @param array $discount The discount.
     * @return array
     */
    public static function getProductsData(array $discount)
    {
    }
    /**
     * Adds rows to table.
     * @param array $items Items.
     * @internal
     */
    private static function insertBatch(array $items)
    {
    }
}