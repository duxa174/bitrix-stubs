<?php

namespace Bitrix\Sale\Internals;

/**
 * Class OrderDiscountTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> MODULE_ID string(50) mandatory
 * <li> DISCOUNT_ID int mandatory
 * <li> NAME string(255) mandatory
 * <li> DISCOUNT_HASH string(32) mandatory
 * <li> CONDITIONS string optional
 * <li> UNPACK string optional
 * <li> ACTIONS string optional
 * <li> APPLICATION string optional
 * <li> USE_COUPONS bool mandatory
 * <li> SORT int mandatory
 * <li> PRIORITY int mandatory
 * <li> LAST_DISCOUNT bool mandatory
 * </ul>
 *
 * @package Bitrix\Sale\Internals
 **/
class OrderDiscountTable extends \Bitrix\Main\Entity\DataManager
{
    protected static $requiredFields = array('MODULE_ID', 'DISCOUNT_ID', 'NAME', 'CONDITIONS', 'UNPACK', 'ACTIONS', 'APPLICATION', 'USE_COUPONS', 'SORT', 'PRIORITY', 'LAST_DISCOUNT', 'ACTIONS_DESCR');
    protected static $replaceFields = array('DISCOUNT_ID' => 'ID', 'CONDITIONS' => 'CONDITIONS_LIST', 'ACTIONS' => 'ACTIONS_LIST', 'MODULE_ID' => 'MODULE');
    protected static $revertFields = array('CONDITIONS' => 'CONDITIONS_LIST', 'ACTIONS' => 'ACTIONS_LIST');
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
     * Returns validators for NAME field.
     *
     * @return array
     */
    public static function validateName()
    {
    }
    /**
     * Returns validators for DISCOUNT_HASH field.
     *
     * @return array
     */
    public static function validateDiscountHash()
    {
    }
    /**
     * Return discount id by hash.
     *
     * @param string $hash				Discount hash.
     * @return int|bool
     */
    public static function getDiscountByHash($hash)
    {
    }
    /**
     * Calculate discount hash.
     *
     * @param array $discount			Discount data.
     * @return bool|string
     */
    public static function calculateHash($discount)
    {
    }
    /**
     * Calculate hash for fields CONDITIONS and ACTIONS.
     *
     * @param array $discount			Discount data.
     * @return bool|string
     */
    public static function calculateRuleHash($discount)
    {
    }
    /**
     * Prepare discount data for save.
     *
     * @param array $discount			Discount data.
     * @return array|bool
     */
    public static function prepareDiscountData($discount)
    {
    }
    /**
     * Return fields list, need for prepareDiscountData.
     *
     * @param array $discount			Discount data.
     * @return array|bool
     */
    public static function getEmptyFields($discount)
    {
    }
    /**
     * Return discount modules list.
     * @deprecated
     *
     * @param array $discount			Discount data.
     * @return array
     */
    public static function getDiscountModules($discount)
    {
    }
    /**
     * Remove discount list.
     *
     * @param array|int $discount			Order discount list.
     * @return void
     */
    public static function clearList($discount)
    {
    }
}
/**
 * Class OrderCouponsTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ORDER_ID int mandatory
 * <li> BASKET_ID int mandatory
 * <li> ORDER_DISCOUNT_ID int mandatory
 * <li> COUPON string(32) mandatory
 * <li> TYPE int mandatory
 * </ul>
 *
 * @package Bitrix\Sale\Internals
 **/
class OrderCouponsTable extends \Bitrix\Main\Entity\DataManager
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
     * Remove order coupons.
     *
     * @param int $order			Order id.
     * @return void
     */
    public static function clearByOrder($order)
    {
    }
    /**
     * Remove coupon list.
     *
     * @param array|int $coupon			Order coupon list.
     * @return void
     */
    public static function clearList($coupon)
    {
    }
    /**
     * Save order in order coupons.
     *
     * @param array $coupons			Coupons id list.
     * @param int $order				Order id.
     * @return void
     */
    public static function applyOrder($coupons, $order)
    {
    }
}
/**
 * Class OrderModulesTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ORDER_DISCOUNT_ID int mandatory
 * <li> MODULE_ID string(50) mandatory
 * </ul>
 *
 * @package Bitrix\Sale\Internals
 **/
class OrderModulesTable extends \Bitrix\Main\Entity\DataManager
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
     * Save order discount modules.
     *
     * @param int $discountId			Order discount id.
     * @param array $moduleList			Module list.
     * @return bool
     */
    public static function saveOrderDiscountModules($discountId, $moduleList)
    {
    }
    /**
     * Remove module discount list.
     *
     * @param array|int $discount			Discount list.
     * @return void
     */
    public static function clearByDiscount($discount)
    {
    }
}
/**
 * Class OrderDiscountDataTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ORDER_ID int mandatory
 * <li> ENTITY_TYPE int mandatory
 * <li> ENTITY_ID int mandatory
 * <li> ENTITY_VALUE string(255) optional
 * <li> ENTITY_DATA string mandatory
 * </ul>
 *
 * @package Bitrix\Sale\Internals
 **/
class OrderDiscountDataTable extends \Bitrix\Main\Entity\DataManager
{
    const ENTITY_TYPE_BASKET_ITEM = 0x1;
    /** @deprecated */
    const ENTITY_TYPE_BASKET = self::ENTITY_TYPE_BASKET_ITEM;
    const ENTITY_TYPE_DELIVERY = 0x2;
    const ENTITY_TYPE_SHIPMENT = 0x4;
    const ENTITY_TYPE_DISCOUNT = 0x8;
    const ENTITY_TYPE_ORDER = 0x10;
    const ENTITY_TYPE_ROUND = 0x20;
    const ENTITY_TYPE_DISCOUNT_STORED_DATA = 0x40;
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
     * Returns validators for ENTITY_VALUE field.
     *
     * @return array
     */
    public static function validateEntityValue()
    {
    }
    /**
     * Upsert basket item data.
     *
     * @param int $order				Order id.
     * @param int $basket				Basket id.
     * @param array $data				Data list.
     * @param bool $clear				Clear old values or update.
     * @return bool
     */
    public static function saveBasketItemData($order, $basket, $data, $clear = false)
    {
    }
    /**
     * Clear data for basket item.
     *
     * @param int $basket			Basket id.
     * @return bool
     */
    public static function clearByBasketItem($basket)
    {
    }
    /**
     * Delete data by order.
     *
     * @param int $order		Order id.
     * @return bool
     */
    public static function clearByOrder($order)
    {
    }
    /**
     * Clear data by discount list.
     *
     * @param array|int $discountList			Discount ids list.
     * @return bool
     */
    public static function clearByDiscount($discountList)
    {
    }
}
/**
 * Class OrderRulesTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ORDER_DISCOUNT_ID int mandatory
 * <li> ORDER_ID int mandatory
 * <li> ENTITY_TYPE int mandatory
 * <li> ENTITY_ID int mandatory
 * <li> ENTITY_VALUE string(255) optional
 * <li> COUPON_ID int mandatory
 * <li> APPLY bool mandatory
 * <li> ACTION_BLOCK_LIST text optional
 * <li> APPLY_BLOCK_COUNTER int mandatory default -1
 * </ul>
 *
 * @package Bitrix\Sale\Internals
 **/
class OrderRulesTable extends \Bitrix\Main\Entity\DataManager
{
    const ENTITY_TYPE_BASKET_ITEM = 0x1;
    /** @deprecated */
    const ENTITY_TYPE_BASKET = self::ENTITY_TYPE_BASKET_ITEM;
    const ENTITY_TYPE_DELIVERY = 0x2;
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
     * Returns validators for ENTITY_VALUE field.
     *
     * @return array
     */
    public static function validateEntityValue()
    {
    }
    /**
     * Clear apply list by basket item.
     *
     * @param int $basket			Basket id.
     * @return void
     */
    public static function clearByBasketItem($basket)
    {
    }
    /**
     * Clear sale discount rules.
     *
     * @param array $basketList				Basket id.
     * @return void
     */
    public static function clearBasketSaleDiscount($basketList)
    {
    }
    /**
     * Clear rules by order.
     *
     * @param int $order				Order id.
     * @return void
     */
    public static function clearByOrder($order)
    {
    }
    /**
     * Check use discount list for other basket items. Return list of unused order discount id.
     *
     * @param array &$orderDiscountList				Order discount list.
     * @param array &$ruleList						Rule id list.
     * @return void
     */
    protected static function checkUseOrderDiscounts(&$orderDiscountList, &$ruleList)
    {
    }
    /**
     * Check use coupon discount list for other basket items. Return list of unused order discount.
     *
     * @param array &$orderCouponList			Order coupon id list.
     * @param array &$ruleList					Rule id list.
     * @return void
     */
    protected static function checkUseOrderCoupons(&$orderCouponList, &$ruleList)
    {
    }
    /**
     * Clear rule list.
     *
     * @param array $filter				Filter for clear rules.
     * @return void
     */
    protected static function clear($filter)
    {
    }
}
/**
 * Class OrderRulesDescrTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> MODULE_ID string(50) mandatory
 * <li> ORDER_DISCOUNT_ID int mandatory
 * <li> ORDER_ID int mandatory
 * <li> RULE_ID int mandatory
 * <li> DESCR string mandatory
 * </ul>
 *
 * @package Bitrix\Sale\Internals
 **/
class OrderRulesDescrTable extends \Bitrix\Main\Entity\DataManager
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
}