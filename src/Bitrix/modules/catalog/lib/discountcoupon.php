<?php

namespace Bitrix\Catalog;

/**
 * Class DiscountCouponTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> DISCOUNT_ID int mandatory
 * <li> ACTIVE bool optional default 'Y'
 * <li> COUPON string(32) mandatory
 * <li> DATE_APPLY datetime optional
 * <li> TYPE enum optional default 'O'
 * <li> TIMESTAMP_X datetime optional
 * <li> MODIFIED_BY int optional
 * <li> DATE_CREATE datetime optional
 * <li> CREATED_BY int optional
 * <li> DESCRIPTION string optional
 * <li> CREATED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * <li> MODIFIED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * <li> DISCOUNT reference to {@link \Bitrix\Catalog\DiscountTable}
 * </ul>
 *
 * @package Bitrix\Catalog
 **/
class DiscountCouponTable extends \Bitrix\Main\Entity\DataManager
{
    const TYPE_ONE_ROW = 'Y';
    const TYPE_ONE_ORDER = 'O';
    const TYPE_NO_LIMIT = 'N';
    protected static $existCouponsManager = null;
    protected static $types = array();
    protected static $typeUnknown = false;
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
     * Returns validators for DISCOUNT_ID field.
     *
     * @return array
     */
    public static function validateDiscountId()
    {
    }
    /**
     * Returns validators for COUPON field.
     *
     * @return array
     */
    public static function validateCoupon()
    {
    }
    /**
     * Check discount id.
     *
     * @param int $value					Discount id.
     * @param array|int $primary			Primary key.
     * @param array $row					Current data.
     * @param Main\Entity\Field $field		Field object.
     * @return bool|string
     */
    public static function checkDiscountId($value, $primary, array $row, \Bitrix\Main\Entity\Field $field)
    {
    }
    /**
     * Validate coupon.
     *
     * @param int $value					Coupon.
     * @param array|int $primary			Primary key.
     * @param array $row					Current data.
     * @param Main\Entity\Field $field		Field object.
     * @return bool|string
     */
    public static function checkCoupon($value, $primary, array $row, \Bitrix\Main\Entity\Field $field)
    {
    }
    /**
     * Default onBeforeAdd handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Current data for add.
     * @return Main\Entity\EventResult
     */
    public static function onBeforeAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Default onBeforeUpdate handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Current data for update.
     * @return Main\Entity\EventResult
     */
    public static function onBeforeUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Delete all coupons for discount.
     *
     * @param int $discount			Discount id.
     * @return void
     */
    public static function deleteByDiscount($discount)
    {
    }
    /**
     * Return methods for coupons manager.
     *
     * @param Main\Event $event			Event from coupons manager.
     * @return Main\EventResult
     */
    public static function couponManager(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Return coupon description.
     *
     * @param string $coupon			Coupon for search.
     * @return array|false
     */
    public static function getData($coupon)
    {
    }
    /**
     * Check existing coupon.
     *
     * @param string $coupon			Coupon for checking.
     * @return array|false
     */
    public static function isExist($coupon)
    {
    }
    /**
     * Save apllied coupons.
     *
     * @param array $coupons					Coupons list.
     * @param int $userId						Order user id.
     * @param Main\Type\DateTime $currentTime		Apply time.
     * @return array|bool
     */
    public static function saveApplied($coupons, $userId, \Bitrix\Main\Type\DateTime $currentTime)
    {
    }
    /**
     * Returns coupon types list.
     *
     * @param bool $extendedMode			Get type ids or ids with title.
     * @return array
     */
    public static function getCouponTypes($extendedMode = false)
    {
    }
    /**
     * Init use mode.
     *
     * @return void
     */
    protected static function initUseMode()
    {
    }
    /**
     * Set types table.
     *
     * @param Main\Event $event				Manager data.
     * @return void
     */
    protected static function initTypes(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Fill user id fields.
     *
     * @param array &$result			Modified data for add/update discount.
     * @param array $data				Current data for add/update discount.
     * @param array $keys				List with checked keys (userId info).
     * @return void
     */
    protected static function setUserID(&$result, $data, $keys)
    {
    }
    /**
     * Fill datetime fields.
     *
     * @param array &$result			Modified data for add/update discount.
     * @param array $data				Current data for add/update discount.
     * @param array $keys				List with checked keys (datetime info).
     * @return void
     */
    protected static function setTimestamp(&$result, $data, $keys)
    {
    }
}