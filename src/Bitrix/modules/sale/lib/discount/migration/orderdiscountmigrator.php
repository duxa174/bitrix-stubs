<?php

namespace Bitrix\Sale\Discount\Migration;

final class OrderDiscountMigrator
{
    const ERROR_ID = 'BX_SALE_ORDER_DISCOUNT_MIGRATOR';
    private static $catalogIncluded = null;
    private static $migrateDiscountsCache = array();
    private static $migrateCouponsCache = array();
    private static $catalogDiscountsCache = array();
    /**
     * Migrate discount data from b_sale_basket into new entity.
     *
     * @param array $order				Order data.
     * @return Sale\Result
     */
    public static function processing(array $order)
    {
    }
    /**
     * Convert discount for old order.
     *
     * @internal
     * @param int $orderId				Order id.
     * @param array &$data				Discount data.
     * @return bool
     * @throws Main\LoaderException
     */
    private static function migrateDiscount($orderId, array &$data)
    {
    }
    /**
     * Check coupon for convert.
     *
     * @internal
     * @param string $coupon				Coupon.
     * @return bool
     * @throws Main\LoaderException
     */
    private static function checkMigrateCoupon($coupon)
    {
    }
    /**
     * Create fake coupon.
     *
     * @internal
     * @param string $coupon			Coupon.
     * @return array
     */
    private static function createEmptyCoupon($coupon)
    {
    }
    /**
     * Create fake discount.
     *
     * @internal
     * @param array &$discountData					Discount data.
     * @param bool $accumulate				Accumulate discount.
     * @return void
     */
    private static function createEmptyDiscount(array &$discountData, $accumulate = false)
    {
    }
    /**
     * Check discount for convert.
     *
     * @internal
     * @param array &$discountData			Discount data.
     * @return void
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     */
    private static function checkMigrateDiscount(&$discountData)
    {
    }
    /**
     * Save converted discount.
     *
     * @internal
     * @param array $discountData				Discount data.
     * @return Sale\Result
     * @throws \Exception
     */
    private static function saveMigrateDiscount(array $discountData)
    {
    }
}