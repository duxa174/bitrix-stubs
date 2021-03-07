<?php

namespace Bitrix\Sale;

abstract class DiscountBase
{
    const EVENT_EXTEND_ORDER_DATA = 'onExtendOrderData';
    const USE_MODE_FULL = 0x1;
    const USE_MODE_APPLY = 0x2;
    const USE_MODE_MIXED = 0x4;
    const USE_MODE_COUPONS = 0x8;
    const EXECUTE_FIELD_PREFIX = 'EXECUTE_';
    const ERROR_ID = 'BX_SALE_DISCOUNT';
    const APPLY_MODE_ADD = 0x1;
    const APPLY_MODE_DISABLE = 0x2;
    const APPLY_MODE_LAST = 0x4;
    const APPLY_MODE_FULL_DISABLE = 0x8;
    const APPLY_MODE_FULL_LAST = 0x10;
    const ROUND_MODE_BASKET_DISCOUNT = 0x1;
    const ROUND_MODE_SALE_DISCOUNT = 0x2;
    const ROUND_MODE_FINAL_PRICE = 0x4;
    const ENTITY_BASKET_ITEM = 'BASKET_ITEM';
    const ENTITY_DELIVERY = 'DELIVERY';
    const ENTITY_ORDER = 'ORDER';
    /* Instances */
    /** @var array of DiscountBase and children */
    private static $instances = array();
    /* Instances end */
    /* System variables */
    /** @var bool  */
    protected $isClone = false;
    /** @var bool */
    protected $orderRefresh = false;
    /** @var bool */
    protected $newOrder = null;
    /** @var int */
    protected $useMode = null;
    /** @var  Discount\Context\BaseContext */
    protected $context;
    /** @var OrderBase|null */
    protected $order = null;
    /* System variables end */
    /* Calculate variables */
    /** @var array */
    protected $executeModuleFilter = array('all', 'sale', 'catalog');
    /** @var array */
    protected $loadedModules = array();
    /* Calculate variables end */
    /* Sale discount hit cache */
    /** @var array */
    protected $discountIds = null;
    /** @var array */
    protected $saleDiscountCache = array();
    /** @var string */
    protected $saleDiscountCacheKey = '';
    /* Sale discount hit cache end */
    /* Sale objects */
    /** @var Basket|null */
    protected $basket = null;
    /* Calculate data */
    /** @var array|null */
    protected $orderData = null;
    /* Calculate options */
    /** @var bool */
    protected $valid = true;
    /** @var array */
    protected $saleOptions = array();
    /* Product discounts for basket items */
    /** @var array */
    protected $basketDiscountList = array();
    /* Various basket items data */
    /** @var array */
    protected $basketItemsData = array();
    /* Order discounts and coupons, converted to unified format */
    /** @var array */
    protected $discountsCache = array();
    /** @var array */
    protected $couponsCache = array();
    /* Calculation results and applyed flags */
    /** @var array */
    protected $discountResult = array();
    /** @var int */
    protected $discountResultCounter = 0;
    /** @var array */
    protected $applyResult = array();
    /* Contains additional data used to calculate discounts for an existing order */
    protected $discountStoredActionData = array();
    /** @var array */
    protected $entityList = array();
    /** @var array */
    protected $entityResultCache = array();
    /** @var array */
    protected $currentStep = array();
    /** @var array */
    protected $forwardBasketTable = array();
    /** @var array */
    protected $reverseBasketTable = array();
    /* Round mode and data */
    protected $roundApplyMode = self::ROUND_MODE_FINAL_PRICE;
    protected $roundApplyConfig = array();
    /**
     * Contains list of discounts which pass condition (@see method checkDiscountConditions()).
     *
     * @var array
     */
    protected $fullDiscountList = array();
    protected function __construct()
    {
    }
    public function __destruct()
    {
    }
    /* system methods */
    /**
     * Clone entity.
     *
     * @internal
     * @param \SplObjectStorage $cloneEntity
     *
     * @return DiscountBase
     */
    public function createClone(\SplObjectStorage $cloneEntity)
    {
    }
    /**
     * Returns true if discount entity is cloned.
     *
     * @return bool
     */
    public function isClone()
    {
    }
    /**
     * Set full refresh status from edit order form.
     *
     * @param bool $state		Refresh or not order.
     * @return void
     */
    public function setOrderRefresh($state)
    {
    }
    /**
     * Returns full refresh status value.
     *
     * @return bool
     */
    public function isOrderRefresh()
    {
    }
    /**
     * Returns new order flag value.
     *
     * @return bool
     */
    public function isOrderNew()
    {
    }
    /**
     * Set new order flag.
     *
     * @return void
     */
    protected function setNewOrder()
    {
    }
    /**
     * Returns true if the data for calculations is loaded.
     *
     * @return bool
     */
    protected function isLoaded()
    {
    }
    /* system methods end */
    /**
     * Builds discounts from order.
     *
     * @param OrderBase $order Order object.
     * @return DiscountBase
     */
    public static function buildFromOrder(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * Builds discounts from basket. Basket doesn't have to have a order.
     * Context describes user and user groups which use in
     *
     * @param BasketBase $basket Basket.
     * @param Context\BaseContext $context Context.
     *
     * @return DiscountBase|null
     * @throws Main\InvalidOperationException
     */
    public static function buildFromBasket(\Bitrix\Sale\BasketBase $basket, \Bitrix\Sale\Discount\Context\BaseContext $context)
    {
    }
    /**
     * Get discount by order basket.
     *
     * @param BasketBase $basket		Basket.
     * @return DiscountBase
     */
    public static function setOrder(\Bitrix\Sale\BasketBase $basket)
    {
    }
    /* calculate methods */
    /**
     * Set calculate mode.
     *
     * @param int $useMode			Calculate mode.
     * @return void
     */
    public function setUseMode($useMode)
    {
    }
    /**
     * Return calculate mode.
     *
     * @return int
     */
    public function getUseMode()
    {
    }
    /**
     * Sets list of execute module which will be used to filter discount.
     *
     * @internal
     * @param array $moduleList		Allowed execute module list.
     * @return void
     */
    public function setExecuteModuleFilter(array $moduleList)
    {
    }
    /**
     * Return apply mode list.
     *
     * @param bool $extendedMode			Get mode list with names.
     * @return array
     */
    public static function getApplyModeList($extendedMode = false)
    {
    }
    /**
     * Returns current sale discount apply mode.
     *
     * @return int
     * @throws Main\ArgumentNullException
     */
    public static function getApplyMode()
    {
    }
    /**
     * Calculate discounts.
     *
     * @return Result
     */
    public function calculate()
    {
    }
    /* calculate methods end */
    /* apply result methods */
    /**
     * Change applied discount list.
     *
     * @param array $applyResult		Change apply result.
     * @return void
     */
    public function setApplyResult($applyResult)
    {
    }
    /**
     * Return discount list description.
     *
     * @param bool $extMode			Extended mode.
     * @return array
     */
    public function getApplyResult($extMode = false)
    {
    }
    /* apply result methods finish */
    /**
     * Verifies discounts before order save.
     *
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    public function verify()
    {
    }
    /**
     * Save discount result.
     *
     * @return Result
     */
    public function save()
    {
    }
    public function isValidState()
    {
    }
    protected function setValidState($value)
    {
    }
    /**
     * Initial instance data.
     *
     * @return void
     */
    protected function initInstanceData()
    {
    }
    /**
     * Initial instance data after set order.
     *
     * @return void
     */
    protected function initInstanceFromOrder()
    {
    }
    /**
     * Return is allow discount calculate.
     *
     * @return bool
     */
    protected function stopCalculate()
    {
    }
    /**
     * Return true, if only sale discounts is allowed. For new order or refreshed order use sale option, otherwise use order option.
     *
     * @return bool
     */
    protected function useOnlySaleDiscounts()
    {
    }
    /**
     * Return current basket.
     *
     * @return BasketBase
     */
    protected function getBasket()
    {
    }
    /**
     * Return exists basket.
     *
     * @return bool
     */
    protected function isBasketExist()
    {
    }
    /**
     * Returns the existence of a non-empty basket.
     *
     * @return bool
     */
    protected function isBasketNotEmpty()
    {
    }
    /**
     * Initialization of the discount calculation mode.
     *
     * @return void
     */
    protected function initUseMode()
    {
    }
    /**
     * Load order information.
     *
     * @return Result
     */
    protected function loadOrderData()
    {
    }
    /**
     * Fill empty order data.
     *
     * @return void
     */
    protected function fillEmptyOrderData()
    {
    }
    /**
     * Get basket data from owner entity.
     *
     * @return Result
     * @throws Main\ObjectNotFoundException
     */
    protected function loadBasket()
    {
    }
    /**
     * Returns array with basket item field values.
     *
     * @param BasketItemBase $basketItem	Basket collection item.
     * @return array
     */
    protected function getBasketItemFields(\Bitrix\Sale\BasketItemBase $basketItem)
    {
    }
    /**
     * Load order config for exists order.
     *
     * @return void
     */
    protected function loadOrderConfig()
    {
    }
    /**
     * Returns the current module settings required for calculating discounts.
     *
     * @return array
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    protected function getModuleSettings()
    {
    }
    /**
     * Load default order config for order.
     *
     * @return void
     */
    protected function loadDefaultOrderConfig()
    {
    }
    /**
     * Validate loaded order config.
     *
     * @param mixed $config		Order configuration.
     * @return bool
     */
    protected function validateLoadedOrderConfig($config)
    {
    }
    /**
     * Set loaded order settings.
     *
     * @param array $data		Order settings from database.
     * @return void
     */
    protected function applyLoadedOrderConfig(array $data)
    {
    }
    /**
     * Load discounts for exists order.
     *
     * @return Result
     */
    protected function loadOrderDiscounts()
    {
    }
    /**
     * Load basket stored data for order.
     *
     * @return Result
     */
    protected function loadBasketStoredData()
    {
    }
    /**
     * Return basket item data value from provider.
     * @internal
     *
     * @param int|string $code				Basket code.
     * @param string $field					Field name.
     * @return null|mixed
     */
    protected function getBasketItemValue($code, $field)
    {
    }
    /**
     * Return basket item data from provider.
     * @internal
     *
     * @param int|string $code				Basket code.
     * @param array $fields					Field names.
     * @return array|null
     */
    protected function getBasketItemValueList($code, array $fields)
    {
    }
    /**
     * Calculate discount by new order.
     *
     * @return Result
     */
    protected function calculateFull()
    {
    }
    /**
     * Calculate discount by exist order.
     *
     * @return Result
     */
    protected function calculateApply()
    {
    }
    /**
     * Calculate discount by exist order with new items.
     *
     * @return Result
     */
    protected function calculateMixed()
    {
    }
    /**
     * Save discount result for new order.
     *
     * @return Result
     */
    protected function saveFull()
    {
    }
    /**
     * Returns order configuration for save to database.
     *
     * @return array
     */
    protected function getOrderConfig()
    {
    }
    /**
     * Save basket items stored data.
     *
     * @param array $basketCodeList		Code list.
     * @return Result
     */
    protected function saveBasketStoredData(array $basketCodeList)
    {
    }
    /**
     * Save discount result for exist order.
     *
     * @return Result
     */
    protected function saveApply()
    {
    }
    /**
     * Save discount result for mixed order.
     *
     * @return Result
     */
    protected function saveMixed()
    {
    }
    /**
     * Save coupons for order.
     *
     * @return Result
     */
    protected function saveCoupons()
    {
    }
    /**
     * Save result last apply block discount.
     *
     * @return Result
     * @throws \Exception
     */
    protected function saveLastApplyBlock()
    {
    }
    /**
     * Fill common system fields for new discount results.
     *
     * @param array $rows	Prepared new discount results.
     * @return void
     */
    protected function normalizeNewResultRows(array &$rows)
    {
    }
    /**
     * Check duscount conditions.
     *
     * @return bool
     */
    protected function checkDiscountConditions()
    {
    }
    /**
     * Apply discount rules.
     *
     * @return Result
     */
    protected function applySaleDiscount()
    {
    }
    /**
     * Check product discount list for basket items.
     * @internal
     *
     * @return void
     */
    protected function checkBasketDiscounts()
    {
    }
    /**
     * Apply basket discount in new order.
     *
     * @return Result
     */
    protected function calculateFullBasketDiscount()
    {
    }
    /**
     * Apply basket discount in exist order.
     *
     * @return Result
     */
    protected function calculateApplyBasketDiscount()
    {
    }
    /**
     * Calculate discount block for existing order.
     *
     * @return Result
     */
    protected function calculateApplyDiscountBlock()
    {
    }
    /**
     * Applyed additional coupons.
     *
     * @return Result
     */
    protected function calculateApplyAdditionalCoupons()
    {
    }
    /**
     * Calculate step discount result by new order.
     *
     * @return Result
     */
    protected function calculateFullSaleDiscountResult()
    {
    }
    /**
     * Tries to revert apply status of discounts.
     * It depends on current $stepResult. If it has REVERT_APPLY like true, that we have to cancel discounts on basket
     * items which were affected.
     * @param array $stepResult
     * @return void
     */
    protected function tryToRevertApplyStatusInBlocks(array $stepResult)
    {
    }
    /**
     * Reverts apply flag in blocks for basket items which has for example cumulative discount
     * which cancels previous discounts on item.
     * @param int $basketItemId
     * @return void
     */
    protected function revertApplyBlockForBasketItem($basketItemId)
    {
    }
    /**
     * Calculate step discount result by exist order.
     *
     * @return Result
     */
    protected function calculateApplySaleDiscountResult()
    {
    }
    /* rounding tools */
    /**
     * Return order round apply mode.
     * @internal
     *
     * @return int
     */
    protected function getRoundMode()
    {
    }
    /**
     * Return true, if selected check round apply mode.
     * @internal
     *
     * @param int $mode		Checked mode.
     * @return bool
     */
    protected function isRoundMode($mode)
    {
    }
    /**
     * Load round apply config for exist order.
     * @internal
     *
     * @return void
     */
    protected function loadRoundConfig()
    {
    }
    /**
     * Set discount index for use round. Only for sale discount mode.
     * @internal
     *
     * @param string $entity		Entity id.
     * @param array $index			Index data.
     * @return void
     */
    protected function setRoundIndex($entity, array $index)
    {
    }
    /**
     * Return index data for use round.
     * @internal
     *
     * @param string $entity			Entity id.
     * @param null|int $applyCounter	Apply block counter.
     * @return null|array
     */
    protected function getRoundIndex($entity, $applyCounter = null)
    {
    }
    /**
     * Round prices.
     *
     * @return void
     */
    protected function roundFullBasketPrices()
    {
    }
    /**
     * Round prices.
     *
     * @return void
     */
    protected function roundApplyBasketPrices()
    {
    }
    /**
     * Round only changed prices.
     *
     * @return void
     */
    protected function roundChangedBasketPrices()
    {
    }
    /**
     * Round prices in sale discount mode for new order.
     * @internal
     *
     * @param array $index		Index data.
     * @return void
     */
    protected function roundFullBasketPriceByIndex(array $index)
    {
    }
    /**
     * Round prices in sale discount mode for exist order.
     * @internal
     *
     * @param array $index		Index data.
     * @return void
     */
    protected function roundApplyBasketPricesByIndex(array $index)
    {
    }
    /* rounding tools finish */
    /**
     * Convert discount for saving in order.
     *
     * @param array $discount			Raw discount data.
     * @return Result
     */
    protected function convertDiscount($discount)
    {
    }
    /**
     * Convert coupon for saving in order.
     *
     * @param string|array $coupon			Coupon.
     * @param int $discount					Order discount id.
     * @return Result
     */
    protected function convertCoupon($coupon, $discount)
    {
    }
    /**
     * Returns result after one discount.
     *
     * @param array $order			Order current data.
     * @return array
     */
    protected static function getStepResult(array $order)
    {
    }
    /**
     * Correct data for exotic coupon.
     *
     * @param array &$stepResult			Currenct discount result.
     * @param array $discount				Discount data.
     * @return void
     */
    protected function correctStepResult(&$stepResult, $discount)
    {
    }
    /* discount action reference tools */
    /**
     * Fill additional discount data.
     *
     * @param int $orderDiscountId	Converted discount id.
     * @param array $data Discount	data.
     *
     * @return void
     */
    protected function setDiscountStoredActionData($orderDiscountId, array $data)
    {
    }
    /**
     * Returns stored action data for discount.
     *
     * @param int $orderDiscountId Converted discount id.
     * @return array|null
     */
    protected function getDiscountStoredActionData($orderDiscountId)
    {
    }
    /* discount action reference tools finish */
    /**
     * Return true, if exist apply result from form for basket.
     *
     * @return bool
     */
    protected function isBasketApplyResultExist()
    {
    }
    /**
     * Returns discount and coupon list.
     *
     * @return void
     */
    protected function getApplyDiscounts()
    {
    }
    /**
     * Fill prices in apply results.
     *
     * @return void
     */
    protected function getApplyPrices()
    {
    }
    /**
     * Change result format.
     *
     * @return void
     */
    protected function remakingDiscountResult()
    {
    }
    /* entities id tools */
    /**
     * Create correspondence between basket ids and basket codes.
     *
     * @return Result
     */
    protected function getBasketTables()
    {
    }
    /**
     * Returns data for save to database.
     *
     * @param array $entity
     * @return array|null
     */
    protected function getEntitySaveIdentifier(array $entity)
    {
    }
    /* entities id tools finish */
    /**
     * Returns exist custom price for basket item code.
     *
     * @param int $code			Basket code.
     * @return bool
     */
    protected function isCustomPriceByCode($code)
    {
    }
    /**
     * Returns exist custom price for basket item.
     *
     * @param array $item			Basket item.
     * @return bool
     */
    protected static function isCustomPrice(array $item)
    {
    }
    /**
     * Returns check item in set for basket item code.
     *
     * @param int $code			Basket code.
     * @return bool
     */
    protected function isInSetByCode($code)
    {
    }
    /**
     * Returns check item in set for basket item.
     *
     * @param array $item			Basket item.
     * @return bool
     */
    protected static function isInSet(array $item)
    {
    }
    /**
     * Returns check new basket item for basket item code.
     *
     * @param int|string $code			Basket code.
     * @return bool
     */
    protected function isNewBasketItemByCode($code)
    {
    }
    /**
     * Returns check new basket item for basket item.
     *
     * @param array $item			Basket item.
     * @return bool
     */
    protected static function isNewBasketItem(array $item)
    {
    }
    /**
     * Returns true, if allowed apply discounts to basket item.
     *
     * @param int|string $code			Basket code.
     * @return bool
     */
    protected function isFreezedBasketItemByCode($code)
    {
    }
    /**
     * Returns true, if allowed apply discounts to basket item.
     *
     * @param array $item			Basket item.
     * @return bool
     */
    protected static function isFreezedBasketItem(array $item)
    {
    }
    /**
     * Return true if ordered basket item changed (change PRODUCT_ID).
     *
     * @param int $code			Basket code.
     * @return bool
     */
    protected function isBasketItemChanged($code)
    {
    }
    /**
     * Return true, if basket item exists.
     *
     * @param string|int $code	Basket item code.
     * @return bool
     */
    protected function isExistBasketItem($code)
    {
    }
    /**
     * Returns true, if changed children order entities.
     *
     * @return bool
     */
    protected function isOrderChanged()
    {
    }
    /**
     * Returns exist new item in basket.
     *
     * @return bool
     */
    protected function isMixedBasket()
    {
    }
    /**
     * Return true if basket saved order changed (change PRODUCT_ID).
     *
     * @return bool
     */
    protected function isOrderedBasketChanged()
    {
    }
    /**
     * Returns basket codes for calculate.
     *
     * @param bool $full				Full or apply mode.
     * @return array
     */
    protected function getBasketCodes($full = true)
    {
    }
    protected function getAllowedBasketCodeList()
    {
    }
    /**
     * Merge discount actions result with old data.
     *
     * @param int $index				Discount index.
     * @param array $stepResult			New result.
     * @return void
     */
    protected function mergeDiscountActionResult($index, $stepResult)
    {
    }
    /**
     * Fill empty discount result list.
     *
     * @return void
     */
    protected function fillEmptyDiscountResult()
    {
    }
    /**
     * Fill result order data.
     *
     * @return array
     */
    protected function fillDiscountResult()
    {
    }
    /**
     * Internal. Fill current apply block empty data.
     *
     * @return void
     */
    protected function clearCurrentApplyBlock()
    {
    }
    /**
     * Internal. Clear current step data.
     *
     * @return void
     */
    protected function fillEmptyCurrentStep()
    {
    }
    /**
     * Internal. Fill current step data.
     *
     * @param array $data			Only not empty keys.
     * @return void
     */
    protected function fillCurrentStep($data)
    {
    }
    /**
     * Extend order data for discounts.
     *
     * @return void
     */
    protected function extendOrderData()
    {
    }
    /**
     * Modify order data from handlers.
     *
     * @param array &$newData			New order data from handler.
     * @return void
     */
    protected function modifyOrderData(&$newData)
    {
    }
    /**
     * Return formatted discount description.
     *
     * @param array $descr				Description.
     * @return array
     */
    protected static function formatDescription($descr)
    {
    }
    /**
     * Set order parameters to their original state before the start of calculations.
     *
     * @return void
     */
    protected function resetOrderState()
    {
    }
    /**
     * Fill prices from base prices.
     *
     * @return void
     */
    protected function resetPrices()
    {
    }
    /**
     * Fill basket prices from base prices.
     *
     * @return void
     */
    protected function resetBasketPrices()
    {
    }
    /**
     * Reset flag of applying discounts for basket items.
     *
     * @return void
     */
    protected function resetDiscountAppliedFlag()
    {
    }
    /**
     * Execute sale discount list.
     *
     * @return Result
     */
    protected function executeDiscountList()
    {
    }
    /**
     * Fill last discount flag for basket items. Only for basket or new order or refreshed order.
     *
     * @return void
     */
    protected function fillBasketLastDiscount()
    {
    }
    /**
     * Check last discount flag for basket items. Only for basket or new order or refreshed order.
     *
     * @return bool
     */
    protected function isBasketLastDiscount()
    {
    }
    /* additional coupons tools */
    /**
     * Clear coupons from already used discounts.
     *
     * @internal
     * @param array $coupons			Coupons list from \Bitrix\Sale\DiscountCouponsManager::getForApply.
     * @return array
     */
    protected function clearAdditionalCoupons(array $coupons)
    {
    }
    /**
     * Return additional coupons for exist order.
     *
     * @internal
     * @param array $filter				Coupons filter.
     * @return array
     */
    protected function getAdditionalCoupons(array $filter = array())
    {
    }
    /**
     * Calculate additional basket coupons.
     *
     * @param array $applyCoupons		Apply discount coupons data.
     * @return Result
     */
    protected function calculateApplyBasketAdditionalCoupons(array $applyCoupons)
    {
    }
    /**
     * Calculate additional sale coupons.
     *
     * @param array $applyCoupons			Coupons data.
     * @return Result
     */
    protected function calculateApplySaleAdditionalCoupons(array $applyCoupons)
    {
    }
    /* additional coupons tools finish */
    /* apply flag tools */
    /**
     * Return apply status for basket discount.
     *
     * @internal
     * @param string|int $basketCode		Basket item code.
     * @param int $orderDiscountId			Order discount id.
     * @param string $orderCouponId			Coupon.
     * @return bool
     */
    protected function getStatusApplyBasketDiscount($basketCode, $orderDiscountId, $orderCouponId)
    {
    }
    /**
     * Round and correct discount calculation results.
     * @internal
     *
     * @return void
     */
    protected function normalizeDiscountResult()
    {
    }
    /* Instances methods */
    /**
     * Returns true, if instance exist.
     *
     * @param string $index		Entity instance identifier.
     * @return bool
     */
    protected static function instanceExists($index)
    {
    }
    /**
     * Returns discount instance.
     *
     * @param string $index		Entity instance identifier.
     * @return DiscountBase
     */
    protected static function getInstance($index)
    {
    }
    protected static function migrateInstance($oldIndex, $newIndex)
    {
    }
    protected static function removeInstance($index)
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
    /**
     * Return instance index for order.
     *
     * @internal
     * @param OrderBase $order			Order.
     * @return string
     */
    protected static function getInstanceIndexByOrder(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * Return instance index for basket.
     *
     * @internal
     *
     * @param BasketBase $basket			Basket.
     * @param Context\BaseContext|null	$context
     *
     * @return string
     */
    protected static function getInstanceIndexByBasket(\Bitrix\Sale\BasketBase $basket, \Bitrix\Sale\Discount\Context\BaseContext $context = null)
    {
    }
    /* Instances methods end */
    /**
     * Return order.
     *
     * @return OrderBase|null
     */
    public function getOrder()
    {
    }
    /**
     * Return flag is order exists.
     *
     * @return bool
     */
    public function isOrderExists()
    {
    }
    /**
     * Return site id for calculate.
     * @internal
     *
     * @return null|string
     */
    protected function getSiteId()
    {
    }
    /**
     * Return order currency for calculate.
     * @internal
     *
     * @return null|string
     */
    protected function getCurrency()
    {
    }
    /**
     * Return site currency.
     * @internal
     *
     * @return string|null
     */
    protected function getSiteCurrency()
    {
    }
    /* Sale disocunt hit cache methods */
    /**
     * Return field name for save eval result. Only for core.
     *
     * @internal
     *
     * @param string $fieldName         Discount field name for eval.
     * @return string
     */
    protected static final function getExecuteFieldName($fieldName)
    {
    }
    /**
     * Return field list for eval.
     *
     * @internal
     *
     * @return array
     */
    protected function getExecuteFieldList()
    {
    }
    /**
     * Return field with discount condition code.
     *
     * @internal
     *
     * @return string
     */
    protected function getConditionField()
    {
    }
    /**
     * Load from database discount id for user groups.
     *
     * @internal
     *
     * @param array $filter			Additional filter.
     * @return void
     * @throws Main\ArgumentException
     */
    protected function loadDiscountByUserGroups(array $filter = array())
    {
    }
    /**
     * Load discount modules.
     *
     * @internal
     *
     * @param array $modules				Discount modules.
     * @return bool
     * @throws Main\LoaderException
     */
    protected function loadDiscountModules(array $modules)
    {
    }
    /**
     * Load sale discount from database
     *
     * @internal
     *
     * @return void
     */
    protected function loadDiscountList()
    {
    }
    /* Sale disocunt hit cache methods end */
    /**
     * @return DiscountBase
     */
    private static function createObject()
    {
    }
    /**
     * Returns current order discount class name.
     *
     * @return string
     *
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    protected function getOrderDiscountClassName()
    {
    }
    /**
     * Returns current discount coupons manager class name.
     *
     * @return string
     *
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    protected function getDiscountCouponClassName()
    {
    }
    /**
     * Return current shipment class name.
     *
     * @return string
     *
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    protected function getShipmentClassName()
    {
    }
    private function showAdminError()
    {
    }
    /**
     * Return order property codes for translate to order fields.
     *
     * @return array
     */
    protected static function getOrderPropertyCodes()
    {
    }
    /**
     * Added keys from source array to destination array.
     *
     * @param array &$dest			Destination array.
     * @param array $src			Source array.
     * @return void
     */
    protected static function recursiveMerge(&$dest, $src)
    {
    }
    /**
     * Return empty apply block.
     *
     * @return array
     */
    public static function getEmptyApplyBlock()
    {
    }
    /**
     * Calculate discount percent for public components.
     *
     * @param int|float $basePrice		Base price.
     * @param int|float $discount		Discount value (for an extra can be negative).
     * @return float|int|null
     */
    public static function calculateDiscountPercent($basePrice, $discount)
    {
    }
    /**
     * Returns show prices for public components.
     *
     * @return array
     */
    public function getShowPrices()
    {
    }
    /**
     * Search round rule for base price.
     * @internal
     *
     * return void
     */
    private function getRoundForBasePrices()
    {
    }
    /**
     * Returns basket item price for show in public components (basket, order, etc).
     *
     * @param string|int $basketCode	Basket item code.
     * @param array $item				Basket item.
     * @return array
     */
    private function getShowBasketItemPrice($basketCode, array $item)
    {
    }
    /**
     * Returns basket item price with rounded discount percent. Only for show.
     *
     * @param array $item	Basket item (price fields).
     * @return array
     */
    private function getShowPriceWithDiscountPercent(array $item)
    {
    }
    /**
     * Returns basket item price without discount. Only for show.
     *
     * @param array $item	Basket item (price fields).
     * @return array
     */
    private function getShowPriceWithZeroDiscountPercent(array $item)
    {
    }
    /**
     * Checking the existence of the applied discount on the basket item.
     *
     * @param string|int $basketCode	Basket item code.
     * @return bool
     */
    private function isExistBasketItemDiscount($basketCode)
    {
    }
    /**
     * Returns basket item stored data for save.
     *
     * @param string|int $basketCode	Basket item code.
     * @return array|null
     */
    private function prepareBasketItemStoredData($basketCode)
    {
    }
    /**
     * Reset product price for discount calculation.
     *
     * @param array $item		Basket item data.
     * @return array
     */
    private static function resetBasketItemPrice(array $item)
    {
    }
    /**
     * Update or insert internal data for basket item.
     *
     * @param string|int $basketCode	Basket item code.
     * @param array $values				Update data.
     * @return void
     */
    private function addBasketItemValues($basketCode, array $values)
    {
    }
}