<?php

namespace Bitrix\Sale;

abstract class OrderDiscountBase
{
    const EVENT_ON_BUILD_DISCOUNT_PROVIDERS = 'onBuildDiscountProviders';
    const ERROR_ID = 'BX_SALE_ORDER_DISCOUNT';
    const PROVIDER_ACTION_PREPARE_DISCOUNT = 'prepareData';
    const PROVIDER_ACTION_GET_URL = 'getEditUrl';
    const PROVIDER_ACTION_APPLY_COUPON = 'calculateApplyCoupons';
    const PROVIDER_ACTION_ROUND_ITEM_PRICE = 'roundPrice';
    const PROVIDER_ACTION_ROUND_BASKET_PRICES = 'roundBasket';
    const STORAGE_TYPE_DISCOUNT_ACTION_DATA = 'ACTION_DATA';
    const STORAGE_TYPE_ORDER_CONFIG = 'ORDER_CONFIG';
    const STORAGE_TYPE_ROUND_CONFIG = 'ROUND_CONFIG';
    const STORAGE_TYPE_BASKET_ITEM = 'BASKET_ITEM';
    protected static $init = false;
    protected static $errors = array();
    private static $discountProviders = array();
    private static $managerConfig = array();
    private static $discountCache = array();
    /**
     * Initial discount manager.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Set manager params.
     *
     * @param array $config			Manager params (site, currency, etc).
     * @return bool
     */
    public static function setManagerConfig($config)
    {
    }
    /**
     * Return current manager params.
     *
     * @return array
     */
    public static function getManagerConfig()
    {
    }
    /**
     * Convert and save discount.
     *
     * @param array $discount			Discount data.
     * @param bool $extResult			Result extended result data.
     * @return Result
     */
    public static function saveDiscount(array $discount, $extResult = false)
    {
    }
    /**
     * Save coupon.
     *
     * @param array $coupon		Coupon data.
     * @return Result
     */
    public static function saveCoupon($coupon)
    {
    }
    /**
     * Check apply discount.
     *
     * @param string $module			Discount module.
     * @param array $discount			Discount data.
     * @param array $basket				Basket data.
     * @param array $params				Calculate params.
     * @return bool|array
     */
    public static function calculateApplyCoupons($module, $discount, $basket, $params)
    {
    }
    /**
     * Round basket item price.
     *
     * @param array $basketItem			Basket item data.
     * @param array $roundData			Round data.
     * @return array
     */
    public static function roundPrice(array $basketItem, array $roundData = array())
    {
    }
    /**
     * Round basket prices.
     *
     * @param array $basket			Basket.
     * @param array $roundData		Round data.
     * @param array $orderData		Order (without basket).
     * @return array
     */
    public static function roundBasket(array $basket, array $roundData = array(), array $orderData = array())
    {
    }
    /**
     * Check existing discount provider for module.
     *
     * @param string $module			Module id.
     * @return bool
     */
    public static function checkDiscountProvider($module)
    {
    }
    /**
     * Return url for edit sale discount.
     *
     * @param array $discount			Discount data.
     * @return string
     */
    public static function getEditUrl(array $discount)
    {
    }
    /**
     * Clear discount cache.
     *
     * @return void
     */
    public static function clearCache()
    {
    }
    /**
     * Load discount result for order.
     *
     * @param int $order				Order id.
     * @param array|bool $basketList	Correspondence between basket ids and basket codes.
     * @param array $basketData			Basket data.
     * @return Result
     */
    public static function loadResultFromDb($order, array $basketList = [], array $basketData = [])
    {
    }
    /**
     * Load applied discount list.
     *
     * @param array $discountIds
     * @param array $discountOrder
     * @return array|null
     */
    protected static function loadOrderDiscountFromDb(array $discountIds, array $discountOrder)
    {
    }
    /**
     * Load stored data collection for order.
     * @internal
     *
     * @param int $order				Order id.
     * @param string $storageType		Storage type (only simple value, no mixed).
     * @param array $additionalFilter	Additional filter for internal getList.
     * @return array|null
     */
    public static function loadStoredDataFromDb($order, $storageType, array $additionalFilter = array())
    {
    }
    /**
     * Load order stored data row.
     * @internal
     *
     * @param int $order				Order id.
     * @param string $storageType		Storage type (only simple value, no mixed).
     * @return array|null
     */
    public static function loadOrderStoredDataFromDb($order, $storageType)
    {
    }
    /**
     * Save order stored data.
     *
     * @param int $order
     * @param string $storageType
     * @param array $data
     * @param array $options
     * @return Result
     */
    public static function saveOrderStoredData($order, $storageType, array $data, array $options = array())
    {
    }
    /**
     * Save stored data for entities.
     *
     * @param int $order
     * @param string $storageType
     * @param array $block
     * @param array $options
     * @return Result
     * @throws Main\Db\SqlQueryException
     */
    public static function saveStoredDataBlock($order, $storageType, array $block, array $options = array())
    {
    }
    public static function addResultBlock($order, array $block)
    {
    }
    public static function updateResultBlock($order, array $block)
    {
    }
    public static function addRoundBlock($order, array $block)
    {
    }
    public static function updateRoundBlock($order, array $block)
    {
    }
    /**
     * Delete all data by order.
     *
     * @param int $order			Order id.
     * @return void
     */
    public static function deleteByOrder($order)
    {
    }
    /**
     * Return parent entity type. The method must be overridden in the derived class.
     * @internal
     *
     * @return string
     * @throws Main\NotImplementedException
     */
    public static function getRegistryType()
    {
    }
    protected static function getDiscountClassName()
    {
    }
    /**
     * Returns true, if discount from module sale.
     *
     * @param string $module	Module id.
     * @return bool
     */
    protected static function isNativeModule($module)
    {
    }
    /**
     * Return valid provider action list.
     *
     * @return array
     */
    protected static function getDiscountProviderActions()
    {
    }
    /**
     * Initialization discount providers.
     *
     * @return void
     */
    protected static function initDiscountProviders()
    {
    }
    /**
     * Execute discount provider.
     *
     * @param array $provider			Provider info
     * 	keys are case sensitive:
     *		<ul>
     *		<li>string MODULE				Provider module id
     * 		<li>string METHOD				Prodider method id
     *		</ul>.
     * @param array $data				Data for execute.
     * @return mixed
     */
    protected static function executeDiscountProvider(array $provider, array $data)
    {
    }
    /**
     * Prepare sale discount before saving.
     *
     * @param array $discount				Discount data.
     * @return array|bool
     */
    protected static function prepareData($discount)
    {
    }
    /**
     * Get absent discount fields from database.
     *
     * @param array $fields		Current discount state.
     * @return array|null
     */
    protected static function fillAbsentDiscountFields(array $fields)
    {
    }
    /**
     * Clear raw data and calculate discount hash.
     *
     * @param array $rawFields	Discount information.
     * @return array|null
     */
    protected static function normalizeDiscountFields(array $rawFields)
    {
    }
    /**
     * Returns exists discount for discount hash (cached).
     *
     * @param string $hash		Discount hash.
     * @return array|null
     */
    protected static function searchDiscount($hash)
    {
    }
    /**
     * Save exist discount to cache.
     *
     * @param string $entity	Entity id (class name).
     * @param array $fields		Discount.
     * @return void
     */
    private static function setCacheItem($entity, array $fields)
    {
    }
    /**
     * Validate coupon.
     *
     * @param array $fields		Coupon data.
     * @return Result
     */
    protected static function validateCoupon(array $fields)
    {
    }
    /**
     * Add new coupon for order.
     *
     * @param array $fields			Tablet fields.
     * @return Result|null
     */
    protected static function addCoupon(array $fields)
    {
    }
    /**
     * Add new unique order discount.
     *
     * @param array $fields			Tablet fields.
     * @param array $rawFields		Additional fields.
     * @return Result|null
     */
    protected static function addDiscount(array $fields, array $rawFields)
    {
    }
    /**
     * Load discount modules.
     *
     * @param array $discountIds	Order discount id list.
     * @return array|null
     */
    protected static function loadModulesFromDb(array $discountIds)
    {
    }
    protected static function prepareDiscountModules(array $discount)
    {
    }
    /**
     * Returns entity code for discount and round results.
     *
     * @param array $row			Result row.
     * @param array $transferList	Transfer table (for example, basket id to basket code).
     * @return int|string
     */
    protected static function transferEntityCodeFromInternal(array $row, array $transferList)
    {
    }
    /**
     * Format rule result for basket discount.
     *
     * @param array $rule			Rule result from database.
     * @return array
     */
    protected static function formatBasketRuleResult(array $rule)
    {
    }
    /**
     * Format rule result for sale discount.
     *
     * @param array $rule			Rule result from database.
     * @return array
     */
    protected static function formatSaleRuleResult(array $rule)
    {
    }
    /**
     * Format rule item result for sale discount.
     *
     * @param array $rule			Rule result from database.
     * @return array
     */
    protected static function formatSaleItemRuleResult(array $rule)
    {
    }
    /**
     * Fill product fields in rule result.
     *
     * @param array &$result			Rule result.
     * @param array $basketData			Basket data.
     * @param int|string $index			Basket index.
     * @return void
     */
    protected static function fillRuleProductFields(array &$result, array $basketData, $index)
    {
    }
    /* discounts */
    /**
     * Discount getList (prototype).
     *
     * @param array $parameters		\Bitrix\Main\Entity\DataManager::getList parameters.
     * @return Main\DB\Result|null
     */
    protected static function getDiscountIterator(array $parameters)
    {
    }
    /* discounts end */
    /* coupons */
    /**
     * Check coupon type.
     *
     * @param int $type		Coupon type.
     * @return bool
     */
    protected static function isValidCouponTypeInternal($type)
    {
    }
    /* coupons end */
    /* order discounts */
    /**
     * Order discount getList (prototype).
     *
     * @param array $parameters		\Bitrix\Main\Entity\DataManager::getList parameters.
     * @return Main\DB\Result|null
     */
    protected static function getOrderDiscountIterator(array $parameters)
    {
    }
    /**
     * Low-level method add new discount for order (prototype).
     *
     * @param array $fields		Tablet fields.
     * @return Main\Entity\AddResult|null
     */
    protected static function addOrderDiscountInternal(array $fields)
    {
    }
    /**
     * Returns the list of missing discount fields (prototype).
     *
     * @param array $fields		Discount fields.
     * @return array
     */
    protected static function checkRequiredOrderDiscountFields(array $fields)
    {
    }
    /**
     * Clear raw order discount data (prototype).
     *
     * @param array $rawFields	Discount information.
     * @return array|null
     */
    protected static function normalizeOrderDiscountFieldsInternal(array $rawFields)
    {
    }
    /**
     * Calculate order discount hash (prototype).
     *
     * @param array $fields		Discount information.
     * @return string|null
     */
    protected static function calculateOrderDiscountHashInternal(array $fields)
    {
    }
    /* order discounts end */
    /* order coupons */
    /**
     * Order coupons getList (prototype).
     *
     * @param array $parameters \Bitrix\Main\Entity\DataManager::getList parameters.
     * @return Main\DB\Result|null
     */
    public static function getOrderCouponIterator(array $parameters)
    {
    }
    /**
     * Low-level method add new coupon for order (prototype).
     *
     * @param array $fields		Tablet fields.
     * @return Main\Entity\AddResult|null
     */
    protected static function addOrderCouponInternal(array $fields)
    {
    }
    /**
     * Load coupons for order.
     *
     * @param int $order		Order id.
     * @return array
     */
    protected static function loadCouponsFromDb($order)
    {
    }
    /* order coupons end */
    /* order discount modules */
    /**
     * @param array $parameters		\Bitrix\Main\Entity\DataManager::getList parameters.
     * @return Main\DB\Result|null
     */
    protected static function getOrderDiscountModuleIterator(array $parameters)
    {
    }
    /**
     * Low-level method save order discount modules.
     *
     * @param int $orderDiscountId
     * @param array $modules
     * @return bool
     */
    protected static function saveOrderDiscountModulesInternal($orderDiscountId, array $modules)
    {
    }
    /* order discount modules end */
    /* discount results */
    /**
     * Converts the discount result entity identifier to the database table format (prototype).
     *
     * @param string $entity
     * @return null|int
     */
    protected static function getResultEntityInternal($entity)
    {
    }
    /**
     * Converts the discount result entity identifier from the database table format (prototype).
     *
     * @param int $entity
     * @return null|string
     */
    protected static function getResultEntityFromInternal($entity)
    {
    }
    /**
     * @param array $parameters		\Bitrix\Main\Entity\DataManager::getList parameters.
     * @return Main\DB\Result|null
     */
    protected static function getResultIterator(array $parameters)
    {
    }
    /**
     * @param array $parameters		\Bitrix\Main\Entity\DataManager::getList parameters.
     * @return Main\DB\Result|null
     */
    protected static function getResultDescriptionIterator(array $parameters)
    {
    }
    /**
     * Low-level method add new result discount for order.
     *
     * @param array $fields		Tablet fields.
     * @return Main\Entity\AddResult|null
     */
    protected static function addResultRow(array $fields)
    {
    }
    /**
     * Low-level method update result discount for order.
     *
     * @param int $id			Tablet row id.
     * @param array $fields		Tablet fields.
     * @return Main\Entity\UpdateResult|null
     */
    protected static function updateResultRow($id, array $fields)
    {
    }
    /**
     * Low-level method returns result table name (prototype).
     *
     * @return string|null
     */
    protected static function getResultTableNameInternal()
    {
    }
    /**
     * Low-level method returns result description table name (prototype).
     *
     * @return string|null
     */
    protected static function getResultDescriptionTableNameInternal()
    {
    }
    /**
     * Low-level method returns only those fields that are in the result table (prototype).
     *
     * @param array $fields
     * @return array|null
     */
    protected static function checkResultTableWhiteList(array $fields)
    {
    }
    /**
     * Low-level method returns only those fields that are in the result description table (prototype).
     *
     * @param array $fields
     * @return array|null
     */
    protected static function checkResultDescriptionTableWhiteList(array $fields)
    {
    }
    /**
     * Low-level method add new result discount for order (prototype).
     *
     * @param array $fields		Tablet fields.
     * @return Main\Entity\AddResult|null
     */
    protected static function addResultInternal(array $fields)
    {
    }
    /**
     * Low-level method add new result description for order (prototype).
     *
     * @param array $fields		Tablet fields.
     * @return Main\Entity\AddResult|null
     */
    protected static function addResultDescriptionInternal(array $fields)
    {
    }
    /**
     * Low-level method update result discount for order (prototype).
     *
     * @param int $id			Primary key.
     * @param array $fields		Tablet fields.
     * @return Main\Entity\UpdateResult|null
     */
    protected static function updateResultInternal($id, array $fields)
    {
    }
    /**
     * Low-level method update result description for order.
     *
     * @param int $id			Primary key.
     * @param array $fields		Tablet fields.
     * @return Main\Entity\UpdateResult|null
     */
    protected static function updateResultDescriptionInternal($id, array $fields)
    {
    }
    /* discount results end */
    /* round result */
    /**
     * Converts the rounded entity identifier to the database table format (prototype).
     *
     * @param string $entity
     * @return null|int
     */
    protected static function getRoundEntityInternal($entity)
    {
    }
    /**
     * Converts the rounded entity identifier from the database table format (prototype).
     *
     * @param int $entity
     * @return null|string
     */
    protected static function getRoundEntityFromInternal($entity)
    {
    }
    /**
     * @param array $parameters		\Bitrix\Main\Entity\DataManager::getList parameters.
     * @return Main\DB\Result|null
     */
    protected static function getRoundResultIterator(array $parameters)
    {
    }
    /**
     * Low-level method add new round result for order (prototype).
     *
     * @param array $fields		Tablet fields.
     * @return Main\Entity\AddResult|null
     */
    protected static function addRoundResultInternal(array $fields)
    {
    }
    /**
     * Low-level method update round result for order (prototype).
     *
     * @param int $id			Tablet row id.
     * @param array $fields		Tablet fields.
     * @return Main\Entity\UpdateResult|null
     */
    protected static function updateRoundResultInternal($id, array $fields)
    {
    }
    /**
     * low-level method returns the round-results table name (prototype).
     *
     * @return string|null
     */
    protected static function getRoundTableNameInternal()
    {
    }
    /* round result end */
    /* data storage */
    /**
     * Low-level method for convert storage types to internal format.
     *
     * @param string $storageType	Abstract storage type.
     * @return int|null
     */
    protected static function getStorageTypeInternal($storageType)
    {
    }
    /**
     * @param array $parameters		\Bitrix\Main\Entity\DataManager::getList parameters.
     * @return Main\DB\Result|null
     */
    protected static function getStoredDataIterator(array $parameters)
    {
    }
    /**
     * Low-level method add stored data for order (prototype).
     *
     * @param array $fields		Tablet fields.
     * @return Main\Entity\AddResult|null
     */
    protected static function addStoredDataInternal(array $fields)
    {
    }
    /**
     * Low-level method update stored data for order (prototype).
     *
     * @param int $id			Tablet row id.
     * @param array $fields		Tablet fields.
     * @return Main\Entity\UpdateResult|null
     */
    protected static function updateStoredDataInternal($id, array $fields)
    {
    }
    /**
     * low-level method returns the order stored data table name (prototype).
     *
     * @return string|null
     */
    protected static function getStoredDataTableInternal()
    {
    }
    /* data storage end */
    /**
     * Return flag simple action in discount.
     *
     * @internal
     * @param string $action		Discount action.
     * @return bool
     */
    private static function isSimpleAction($action)
    {
    }
    /**
     * Remove old result rows without events.
     *
     * @param string $tableName
     * @param string $indexField
     * @param array $ids
     * @throws Main\Db\SqlQueryException
     */
    private static function deleteRowsByIndex($tableName, $indexField, array $ids)
    {
    }
    private static function getEntityIndex(array $row)
    {
    }
}