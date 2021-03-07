<?php

namespace Bitrix\Catalog\Discount;

class DiscountManager
{
    protected static $discountCache = array();
    protected static $typeCache = array();
    protected static $editUrlTemplate = array();
    protected static $saleIncluded = null;
    protected static $preloadedPriceData = array();
    protected static $preloadedProductsData = array();
    protected static $productProperties = array();
    /**
     * Return methods for prepare discount.
     *
     * @param Main\Event $event					Event data from discount manager.
     * @return Main\EventResult
     */
    public static function catalogDiscountManager(
        /** @noinspection PhpUnusedParameterInspection */
        \Bitrix\Main\Event $event
    )
    {
    }
    /**
     * Prepare discount before saving.
     *
     * @param array $discount				Discount data.
     * @param array $params					Params.
     * @return array|bool
     */
    public static function prepareData($discount, $params = array())
    {
    }
    /**
     * Return url for edit discount.
     *
     * @param array $discount			Discount data.
     * @return string
     */
    public static function getEditUrl($discount)
    {
    }
    /**
     * Check apply coupons.
     *
     * @param array $couponsList		Coupons.
     * @param array $basket				Basket data.
     * @param array $params				Calculate params.
     * @return array
     * @throws Main\ArgumentException
     */
    public static function calculateApplyCoupons(array $couponsList, array $basket, array $params)
    {
    }
    /**
     * Round basket item price.
     * @deprecated
     * @see \Bitrix\Catalog\Discount\DiscountManager::roundBasket
     *
     * @param array $basketItem		Basket item data.
     * @param array $roundData		Round rule.
     * @return array
     */
    public static function roundPrice(array $basketItem, array $roundData = array())
    {
    }
    /**
     * Round basket prices.
     *
     * @param array $basket				Basket.
     * @param array $basketRoundData	Round rules.
     * @param array $order				Order fields (without basket, can be absent).
     * @return array
     */
    public static function roundBasket(array $basket, array $basketRoundData = array(), array $order = array())
    {
    }
    /**
     * Apply catalog discount by basket item.
     *
     * @param array &$product			Product data.
     * @param array $discount			Discount data.
     * @return void
     */
    public static function applyDiscount(&$product, $discount)
    {
    }
    /**
     * Returns price for product which has catalog group.
     *
     * @param int $productId		Product id.
     * @param int $catalogGroupId	Catalog group.
     * @return null|array
     */
    public static function getPriceDataByProductId($productId, $catalogGroupId)
    {
    }
    /**
     * Set property values cache for product.
     *
     * @param int $productId		Product id.
     * @param array $props			Property values.
     * @return void
     */
    public static function setProductPropertiesCache($productId, $props)
    {
    }
    /**
     * Clear property values cache.
     *
     * @return void
     */
    public static function clearProductPropertiesCache()
    {
    }
    /**
     * Clear products cache.
     *
     * @return void
     */
    public static function clearProductsCache()
    {
    }
    /**
     * Clear product prices cache.
     *
     * @return void
     */
    public static function clearProductPricesCache()
    {
    }
    /**
     * Preloads prices for products with catalog groups.
     *
     * @param array $productIds		List of product ids.
     * @param array $catalogGroups	Catalog groups.
     * @return void
     */
    public static function preloadPriceData(array $productIds, array $catalogGroups)
    {
    }
    private static function fillByPreloadedPrices(array &$productData, array $priceList)
    {
    }
    /**
     * Load product data for calculate discounts.
     *
     * @param array $productIds		Product id list.
     * @param array $userGroups		User group list.
     * @return void
     */
    public static function preloadProductDataToExtendOrder(array $productIds, array $userGroups)
    {
    }
    /**
     * Extend basket data.
     *
     * @param Main\Event $event			Event.
     * @return Main\EventResult
     */
    public static function extendOrderData(\Bitrix\Main\Event $event)
    {
    }
    protected static function getCacheKeyForEntityList(array $entityList)
    {
    }
    protected static function extendProductIdsToOffer(array $productIds)
    {
    }
    /**
     * Filter for catalog basket items.
     *
     * @param array $basketItem			Basket item data.
     * @return bool
     */
    protected static function basketFilter($basketItem)
    {
    }
    /**
     * Filter for stop discount calculate for basket item.
     *
     * @param array $basketItem			Basket item data.
     * @return bool
     */
    protected static function lastDiscountFilter($basketItem)
    {
    }
    /**
     * Load discount data from db.
     * @param int $id					Discount id.
     * @param array $discount			Exist discount data.
     * @return bool|array
     */
    protected static function loadFromDatabase($id, $discount)
    {
    }
    /**
     * Prepare entity to iblock and catalog fields.
     *
     * @param array $entityList			Entity list.
     * @return array|bool
     */
    protected static function prepareEntity($entityList)
    {
    }
    /**
     * Returns product separate by iblocks.
     *
     * @param array $productList		Product id list.
     * @return array
     */
    protected static function getProductIblocks($productList)
    {
    }
    /**
     * Create property list for discounts.
     *
     * @param array &$entityData			Entity data.
     * @param array $iblockData				Iblock data.
     * @return void
     */
    protected static function fillProductPropertyList(&$entityData, $iblockData)
    {
    }
    /**
     * Convert properties values to discount format.
     *
     * @param array &$productData			Product data.
     * @param array $propertyValues			Product properties.
     * @param array $entityData				Entity data.
     * @param array $iblockData				Iblock data.
     * @return void
     */
    protected static function convertProperties(&$productData, $propertyValues, $entityData, $iblockData)
    {
    }
    /**
     * Returns parent product data.
     *
     * @param array &$productData			Product data.
     * @param array $entityData				Entity data.
     * @param array $iblockData				Iblock data.
     * @return void
     */
    protected static function getParentProducts(&$productData, $entityData, $iblockData)
    {
    }
    protected static function loadIblockFields(array $productIds, array $fields)
    {
    }
    protected static function loadSections(array $productIds)
    {
    }
    protected static function loadCatalogFields(array $productIds, array $fields)
    {
    }
    protected static function fillProperties(array &$productData, array $productIds, array $iblockData, array $entityData)
    {
    }
    /**
     * Returns product data.
     *
     * @param array &$productData			Product data.
     * @param array $entityData				Entity data.
     * @param array $iblockData				Iblock list data.
     * @return void
     */
    protected static function getProductData(&$productData, $entityData, $iblockData)
    {
    }
    /**
     * Create sale action.
     *
     * @param array &$discount			Discount data.
     * @param array $params				Manager parameters.
     * @return void
     */
    protected static function createSaleAction(&$discount, $params)
    {
    }
    protected static function fillProductPriceList(&$entityData, $priceIds)
    {
    }
    /**
     * Rounded catalog discount value.
     *
     * @param float|int $value Value.
     * @param string $currency Currency.
     * @return float
     */
    protected static function roundValue($value, $currency)
    {
    }
    /**
     * Returns data after price rounding.
     * @internal
     *
     * @param array $basketItem     Basket row data.
     * @param array $roundData      Round rule.
     * @return array
     */
    private static function getRoundResult(array $basketItem, array $roundData)
    {
    }
    private static function getPriceDataByPriceId($priceId)
    {
    }
    private static function getCachedProductProperty($productId, $propertyId)
    {
    }
}