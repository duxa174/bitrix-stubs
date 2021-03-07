<?php

namespace Bitrix\Sale\Internals;

/**
 * Class DiscountCouponTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> DISCOUNT_ID int mandatory
 * <li> ACTIVE bool optional default 'Y'
 * <li> ACTIVE_FROM datetime optional
 * <li> ACTIVE_TO datetime optional
 * <li> COUPON string(32) mandatory
 * <li> TYPE int mandatory
 * <li> MAX_USE int mandatory
 * <li> USE_COUNT int mandatory
 * <li> USER_ID int mandatory
 * <li> DATE_APPLY datetime optional
 * <li> TIMESTAMP_X datetime optional
 * <li> MODIFIED_BY int optional
 * <li> DATE_CREATE datetime optional
 * <li> CREATED_BY int optional
 * <li> DESCRIPTION text optional
 * <li> CREATED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * <li> MODIFIED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * <li> DISCOUNT reference to {@link \Bitrix\Sale\Internals\DiscountTable}
 * </ul>
 *
 * @package Bitrix\Sale\Internals
 **/
class DiscountCouponTable extends \Bitrix\Main\Entity\DataManager
{
    const TYPE_UNKNOWN = 0x0;
    const TYPE_BASKET_ROW = 0x1;
    const TYPE_ONE_ORDER = 0x2;
    const TYPE_MULTI_ORDER = 0x4;
    const TYPE_ARCHIVED = 0x8;
    const EVENT_ON_GENERATE_COUPON = 'onGenerateCoupon';
    const EVENT_ON_AFTER_DELETE_DISCOUNT = 'onAfterDeleteDiscountCoupons';
    protected static $discountCheckList = array();
    protected static $checkDiscountCouponsUse = 0;
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
     * Returns validators for TYPE field.
     *
     * @return array
     */
    public static function validateType()
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
     * Check coupon type.
     *
     * @param int $value					Coupon type.
     * @param array|int $primary			Primary key.
     * @param array $row					Current data.
     * @param Main\Entity\Field $field		Field object.
     * @return bool|string
     */
    public static function checkType($value, $primary, array $row, \Bitrix\Main\Entity\Field $field)
    {
    }
    /**
     * Check coupon - unique and exist.
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
     * Default onAfterAdd handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Current data for add.
     * @return void
     */
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
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
     * Default onUpdate handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Current data for update.
     * @return void
     */
    public static function onUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Default onAfterUpdate handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Current data for update.
     * @return void
     */
    public static function onAfterUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Default onDelete handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Current data for delete.
     * @return void
     */
    public static function onDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Default onAfterDelete handler. Absolutely necessary.
     *
     * @param Main\Entity\Event $event		Current data for delete.
     * @return void
     */
    public static function onAfterDelete(\Bitrix\Main\Entity\Event $event)
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
     * Disable checking use coupons for discount before multiuse add/update/delete.
     *
     * @return void
     */
    public static function disableCheckCouponsUse()
    {
    }
    /**
     * Enable checking use coupons for discount after multiuse add/update/delete.
     *
     * @return void
     */
    public static function enableCheckCouponsUse()
    {
    }
    /**
     * Returns current checking use coupons mode.
     *
     * @return bool
     */
    public static function isCheckedCouponsUse()
    {
    }
    /**
     * Clear discount list for update use coupons flag.
     *
     * @return void
     */
    public static function clearDiscountCheckList()
    {
    }
    /**
     * Fill discount list for update use coupons flag.
     *
     * @param array|int $discountList			Discount ids for check.
     * @return void
     */
    public static function setDiscountCheckList($discountList)
    {
    }
    /**
     * Update use coupon flag for discount list.
     *
     * @return void
     */
    public static function updateUseCoupons()
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
     * Save coupons applyed info.
     *
     * @param array $coupons				Coupons list.
     * @param int $userId					User id.
     * @param Main\Type\DateTime $currentTime	Current datetime.
     * @return array|bool
     */
    public static function saveApplied($coupons, $userId, \Bitrix\Main\Type\DateTime $currentTime)
    {
    }
    /**
     * Create coupon code.
     *
     * @param bool $check		Check new coupon or no.
     * @return string
     */
    public static function generateCoupon($check = false)
    {
    }
    /**
     * Create one and more coupons for discount.
     *
     * @param array $data				Coupon data.
     * @param int $count				Coupos count.
     * @param int $limit				Maximum number of attempts.
     * @return Main\Entity\Result
     */
    public static function addPacket(array $data, $count, $limit = 0)
    {
    }
    /**
     * Check data for create one or more coupons.
     *
     * @param array $data				Coupon data.
     * @param bool $newDiscount			New discount flag.
     * @return Main\Entity\Result
     */
    public static function checkPacket(array $data, $newDiscount = false)
    {
    }
    /**
     * Prepare coupon data. Only for admin list pages.
     *
     * @param array &$fields				Coupon data.
     * @return Main\Entity\Result
     */
    public static function prepareCouponData(&$fields)
    {
    }
    /**
     * Check valid coupon type.
     *
     * @param int $couponType			Coupon type.
     * @return bool
     */
    public static function isValidCouponType($couponType)
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
    protected static function setUserID(array &$result, array $data, array $keys)
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
    protected static function setTimestamp(array &$result, array $data, array $keys)
    {
    }
}