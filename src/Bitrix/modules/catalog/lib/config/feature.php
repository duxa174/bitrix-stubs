<?php

namespace Bitrix\Catalog\Config;

/**
 * Class Feature
 * Provides unified methods for check B24 tariff limits and Bitrix edition limits.
 *
 * @package Bitrix\Catalog\Config
 */
final class Feature
{
    private const PRODUCT_SETS = 'catalog_product_sets';
    private const MULTI_PRICE_TYPES = 'catalog_multi_price_types';
    private const CUMULATIVE_DISCOUNTS = 'catalog_cumulative_discounts';
    private const MULTI_WARENHOUSES = 'catalog_multi_warenhouses';
    private const EXTENDED_PRICES = 'catalog_price_quantity_ranges';
    private const INVENTORY_MANAGEMENT = 'catalog_inventory_management';
    private const COMMON_PRODUCT_PROCESSING = 'catalog_common_product_processing';
    private const PRODUCT_LIMIT = 'catalog_product_limit';
    /** @var null|bool sign of the presence of Bitrix24 */
    private static $bitrix24Included = null;
    /** @var array features hit cache */
    private static $featureList = [];
    /** @var array map of compliance with tariff and edition restrictions */
    private static $tranferList = [self::PRODUCT_SETS => 'CatCompleteSet', self::MULTI_PRICE_TYPES => 'CatMultiPrice', self::CUMULATIVE_DISCOUNTS => 'CatDiscountSave', self::MULTI_WARENHOUSES => 'CatMultiStore'];
    /** @var array edition restrictions */
    private static $retailExist = [self::PRODUCT_SETS => true, self::MULTI_PRICE_TYPES => true, self::CUMULATIVE_DISCOUNTS => true, self::MULTI_WARENHOUSES => true];
    /** @var array bitrix24 restrictions */
    private static $bitrix24exist = [self::PRODUCT_SETS => true, self::EXTENDED_PRICES => true, self::MULTI_PRICE_TYPES => true, self::MULTI_WARENHOUSES => true, self::INVENTORY_MANAGEMENT => true, self::COMMON_PRODUCT_PROCESSING => true];
    /** @var array bitrix24 articles about tarif features */
    private static $bitrix24helpCodes = [self::PRODUCT_SETS => 'limit_shop_bundles', self::MULTI_PRICE_TYPES => 'limit_shop_variable_prices', self::EXTENDED_PRICES => 'limit_shop_variable_prices', self::MULTI_WARENHOUSES => 'limit_shop_stocks', self::INVENTORY_MANAGEMENT => 'limit_shop_inventory_management', self::PRODUCT_LIMIT => 'limit_shop_products'];
    private static $helpCodesCounter = 0;
    private static $initUi = false;
    /**
     * Returns true if product sets are allowed.
     *
     * @return bool
     */
    public static function isProductSetsEnabled() : bool
    {
    }
    /**
     * Returns true if price quantity ranges are allowed.
     *
     * @return bool
     */
    public static function isPriceQuantityRangesEnabled() : bool
    {
    }
    /**
     * Returns true if multi types of prices are allowed.
     *
     * @return bool
     */
    public static function isMultiPriceTypesEnabled() : bool
    {
    }
    /**
     * Return true if cumulative discounts are allowed.
     *
     * @return bool
     */
    public static function isCumulativeDiscountsEnabled() : bool
    {
    }
    /**
     * Returns true if multiple warehouses are allowed.
     *
     * @return bool
     */
    public static function isMultiStoresEnabled() : bool
    {
    }
    /**
     * Returns true if warehouse inventory management is allowed.
     *
     * @return bool
     */
    public static function isInventoryManagementEnabled() : bool
    {
    }
    /**
     * Returns true if common product processing is enabled.
     *
     * @return bool
     */
    public static function isCommonProductProcessingEnabled() : bool
    {
    }
    /**
     * Returns url description for help article about sets and bunles.
     *
     * @return array|null
     */
    public static function getProductSetsHelpLink() : ?array
    {
    }
    /**
     * Returns url description for help article about price quantity ranges.
     *
     * @return array|null
     */
    public static function getPriceQuantityRangesHelpLink() : ?array
    {
    }
    /**
     * Returns url description for help article about multi price types.
     *
     * @return array|null
     */
    public static function getMultiPriceTypesHelpLink() : ?array
    {
    }
    /**
     * Returns url description for help article about multi stores.
     *
     * @return array|null
     */
    public static function getMultiStoresHelpLink() : ?array
    {
    }
    /**
     * Returns url description for help article about inventory managment.
     *
     * @return array|null
     */
    public static function getInventoryManagementHelpLink() : ?array
    {
    }
    /**
     * Returns url description for help article about product limits.
     *
     * @return array|null
     */
    public static function getProductLimitHelpLink() : ?array
    {
    }
    /**
     * Init ui scope for show help links on internal pages.
     *
     * @return void
     */
    public static function initUiHelpScope() : void
    {
    }
    /**
     * Check restriction.
     *
     * @param string $featureId		Restriction name.
     * @return bool
     */
    private static function isFeatureEnabled(string $featureId) : bool
    {
    }
    /**
     * Returns javascript link to bitrx24 feature help article.
     *
     * @param string $featureId
     * @return array|null
     */
    private static function getHelpLink(string $featureId) : ?array
    {
    }
    /**
     * Return true if Bitrix24 is exists.
     *
     * @return bool
     * @throws \Bitrix\Main\LoaderException
     */
    private static function isBitrix24() : bool
    {
    }
}