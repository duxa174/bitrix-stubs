<?php

namespace Bitrix\Catalog;

/**
 * Class ProductTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> QUANTITY double mandatory
 * <li> QUANTITY_TRACE bool optional default 'N'
 * <li> WEIGHT double mandatory
 * <li> TIMESTAMP_X datetime mandatory default 'CURRENT_TIMESTAMP'
 * <li> PRICE_TYPE string(1) mandatory default 'S'
 * <li> RECUR_SCHEME_LENGTH int optional
 * <li> RECUR_SCHEME_TYPE string(1) mandatory default 'D'
 * <li> TRIAL_PRICE_ID int optional
 * <li> WITHOUT_ORDER bool optional default 'N'
 * <li> SELECT_BEST_PRICE bool optional default 'Y'
 * <li> VAT_ID int optional
 * <li> VAT_INCLUDED bool optional default 'Y'
 * <li> CAN_BUY_ZERO bool optional default 'N'
 * <li> NEGATIVE_AMOUNT_TRACE string(1) mandatory default 'D'
 * <li> TMP_ID string(40) optional
 * <li> PURCHASING_PRICE double optional
 * <li> PURCHASING_CURRENCY string(3) optional
 * <li> BARCODE_MULTI bool optional default 'N'
 * <li> QUANTITY_RESERVED double optional
 * <li> SUBSCRIBE string(1) optional
 * <li> WIDTH double optional
 * <li> LENGTH double optional
 * <li> HEIGHT double optional
 * <li> MEASURE int optional
 * <li> TYPE int optional
 * <li> AVAILABLE string(1) optional
 * <li> BUNDLE string(1) optional
 * <li> IBLOCK_ELEMENT reference to {@link \Bitrix\Iblock\ElementTable}
 * <li> TRIAL_IBLOCK_ELEMENT reference to {@link \Bitrix\Iblock\ElementTable}
 * <li> TRIAL_PRODUCT reference to {@link \Bitrix\Catalog\ProductTable}
 * </ul>
 *
 * @package Bitrix\Catalog
 **/
class ProductTable extends \Bitrix\Main\Entity\DataManager
{
    const USER_FIELD_ENTITY_ID = 'PRODUCT';
    const STATUS_YES = 'Y';
    const STATUS_NO = 'N';
    const STATUS_DEFAULT = 'D';
    const TYPE_PRODUCT = 1;
    const TYPE_SET = 2;
    const TYPE_SKU = 3;
    const TYPE_OFFER = 4;
    const TYPE_FREE_OFFER = 5;
    const TYPE_EMPTY_SKU = 6;
    const PAYMENT_TYPE_SINGLE = 'S';
    const PAYMENT_TYPE_REGULAR = 'R';
    const PAYMENT_TYPE_TRIAL = 'T';
    const PAYMENT_PERIOD_HOUR = 'H';
    const PAYMENT_PERIOD_DAY = 'D';
    const PAYMENT_PERIOD_WEEK = 'W';
    const PAYMENT_PERIOD_MONTH = 'M';
    const PAYMENT_PERIOD_QUART = 'Q';
    const PAYMENT_PERIOD_SEMIYEAR = 'S';
    const PAYMENT_PERIOD_YEAR = 'Y';
    const PAYMENT_PERIOD_DOUBLE_YEAR = 'T';
    const PRICE_MODE_SIMPLE = 'S';
    const PRICE_MODE_QUANTITY = 'Q';
    const PRICE_MODE_RATIO = 'R';
    protected static $defaultProductSettings = array();
    protected static $existProductCache = array();
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
     * Returns user fields entity id.
     *
     * @return string
     */
    public static function getUfId()
    {
    }
    /**
     * Returns validators for PRICE_TYPE field.
     *
     * @deprecated deprecated since catalog 16.5.0 - no longer needed.
     * @internal
     * @return array
     */
    public static function validatePriceType()
    {
    }
    /**
     * Returns validators for RECUR_SCHEME_TYPE field.
     *
     * @deprecated deprecated since catalog 16.5.0 - no longer needed.
     * @internal
     * @return array
     */
    public static function validateRecurSchemeType()
    {
    }
    /**
     * Returns validators for TMP_ID field.
     *
     * @internal
     * @return array
     */
    public static function validateTmpId()
    {
    }
    /**
     * Returns validators for PURCHASING_CURRENCY field.
     *
     * @internal
     * @return array
     */
    public static function validatePurchasingCurrency()
    {
    }
    /**
     * Returns fetch modificators for QUANTITY_TRACE field.
     *
     * @internal
     * @return array
     */
    public static function modifyQuantityTrace()
    {
    }
    /**
     * Returns fetch modificators for CAN_BUY_ZERO field.
     *
     * @internal
     * @return array
     */
    public static function modifyCanBuyZero()
    {
    }
    /**
     * Returns fetch modificators for NEGATIVE_AMOUNT_TRACE field.
     *
     * @internal
     * @return array
     */
    public static function modifyNegativeAmountTrace()
    {
    }
    /**
     * Returns fetch modificators for SUBSCRIBE field.
     *
     * @internal
     * @return array
     */
    public static function modifySubscribe()
    {
    }
    /**
     * Convert default QUANTITY_TRACE into real from module settings.
     *
     * @internal
     * @param string $value			QUANTITY_TRACE original value.
     * @return string
     */
    public static function prepareQuantityTrace($value)
    {
    }
    /**
     * Convert default CAN_BUY_ZERO into real from module settings.
     *
     * @internal
     * @param string $value			CAN_BUY_ZERO original value.
     * @return string
     */
    public static function prepareCanBuyZero($value)
    {
    }
    /**
     * Convert default NEGATIVE_AMOUNT_TRACE into real from module settings.
     *
     * @internal
     * @param string $value			NEGATIVE_AMOUNT_TRACE original value.
     * @return string
     */
    public static function prepareNegativeAmountTrace($value)
    {
    }
    /**
     * Convert default SUBSCRIBE into real from module settings.
     *
     * @internal
     * @param string $value			SUBSCRIBE original value.
     * @return string
     */
    public static function prepareSubscribe($value)
    {
    }
    /**
     * Return is exist product.
     *
     * @param int $product				Product id.
     * @return bool
     * @throws Main\ArgumentException
     */
    public static function isExistProduct($product)
    {
    }
    /**
     * Clear product cache.
     *
     * @param int $product			Product id or zero (clear all cache).
     * @return void
     */
    public static function clearProductCache($product = 0)
    {
    }
    /**
     * Returns ratio and measure for products.
     *
     * @param array|int $product				Product ids.
     * @return array|bool
     * @throws Main\ArgumentException
     */
    public static function getCurrentRatioWithMeasure($product)
    {
    }
    /**
     * Calculate available for product.
     *
     * @param array $fields					Product data.
     * @return string
     */
    public static function calculateAvailable($fields)
    {
    }
    /**
     * Load default product settings from module options.
     *
     * @internal
     * @return void
     */
    public static function loadDefaultProductSettings()
    {
    }
    /**
     * Return product type list.
     *
     * @param bool $descr			With description.
     * @return array
     */
    public static function getProductTypes($descr = false)
    {
    }
    /**
     * Return payment type list.
     *
     * @param bool $descr			With description.
     * @return array
     */
    public static function getPaymentTypes($descr = false)
    {
    }
    /**
     * Return payment period list.
     *
     * @param bool $descr			With description.
     * @return array
     */
    public static function getPaymentPeriods($descr = false)
    {
    }
    /**
     * Return default alailable settings.
     *
     * @return array
     */
    public static function getDefaultAvailableSettings()
    {
    }
}