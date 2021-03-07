<?php

namespace Bitrix\Sale\Compatible;

class DiscountCompatibility
{
    const MODE_CLIENT = 0x1;
    const MODE_MANAGER = 0x2;
    const MODE_ORDER = 0x4;
    const MODE_SYSTEM = 0x8;
    const MODE_EXTERNAL = 0x10;
    const MODE_DISABLED = 0x20;
    const ERROR_ID = 'BX_SALE_DISCOUNT_COMPATIBILITY';
    protected static $init = false;
    protected static $useMode = self::MODE_CLIENT;
    protected static $errors = array();
    protected static $config = array();
    protected static $order = null;
    protected static $discountUseMode = null;
    protected static $basketBasePrice = array();
    protected static $basketDiscountList = array();
    protected static $basketItemsData = array();
    protected static $discountResult = array();
    protected static $discountsCache = array();
    protected static $couponsCache = array();
    protected static $previousOrderData = array();
    protected static $currentOrderData = array();
    protected static $compatibleSaleDiscountResult = array();
    protected static $useCompatible = false;
    protected static $shipmentOrder = null;
    protected static $shipmentId = null;
    protected static $basketCodes = array();
    protected static $saved = false;
    protected static $repeatSave = false;
    /**
     * Handler for use old api.
     *
     * @param Main\Event $event		Event data.
     * @return Main\EventResult
     */
    public static function OnSaleBasketItemRefreshData(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Init use mode.
     *
     * @param int $mode				Save discount information mode.
     * @param array $config			Initial params (site, currency).
     * 		keys are case sensitive:
     * 			<ul>
     * 			<li>string SITE_ID		Current site
     * 			<li>string CURRENCY		Site currency
     * 			<li>string ORDER_ID		Order id
     * 			</ul>.
     * @return void
     */
    public static function initUseMode($mode = self::MODE_CLIENT, $config = array())
    {
    }
    /**
     * Return use mode.
     *
     * @return int
     */
    public static function getUseMode()
    {
    }
    /**
     * Check client use mode.
     *
     * @return bool
     */
    public static function usedByClient()
    {
    }
    /**
     * Check manager use mode.
     *
     * @return bool
     */
    public static function usedByManager()
    {
    }
    /**
     * Return saved flag (for old components only). Use ONLY kernel developers.
     * @internal
     *
     * @return bool
     */
    public static function isSaved()
    {
    }
    /**
     * Set save flag (for old components only). Use ONLY kernel developers.
     * @internal
     *
     * @param bool $save		Save flag.
     * @return void
     */
    public static function setSaved($save)
    {
    }
    /**
     * Return repeat save flag (for old components only). Use ONLY kernel developers.
     * @internal
     *
     * @return bool
     */
    public static function isRepeatSave()
    {
    }
    /**
     * Set repeat flag (for old components only). Use ONLY kernel developers.
     * @internal
     *
     * @param bool $repeat		Repeat flag.
     * @return void
     */
    public static function setRepeatSave($repeat)
    {
    }
    /**
     * Return result operation.
     *
     * @return bool
     */
    public static function isSuccess()
    {
    }
    /**
     * Return error list.
     *
     * @return array
     */
    public static function getErrors()
    {
    }
    /**
     * Clear errors list.
     *
     * @return void
     */
    public static function clearErrors()
    {
    }
    /**
     * Returns configuration parameters.
     *
     * @return array
     */
    public static function getConfig()
    {
    }
    /**
     * Set shipment.
     *
     * @param int $order					Order id.
     * @param int|array $shipment			Shipment id.
     * @return void
     */
    public static function setShipment($order, $shipment)
    {
    }
    /**
     * Initialization discount save information.
     *
     * @param int $mode				Discount manager mode.
     * @param array $config			Initial params (site, currency, order).
     * @return void
     */
    public static function init($mode = self::MODE_CLIENT, $config = array())
    {
    }
    /**
     * Reinitialization discount save information.
     *
     * @param int $mode				Discount manager mode.
     * @param array $config			Initial params (site, currency, order).
     * @return void
     */
    public static function reInit($mode = self::MODE_CLIENT, $config = array())
    {
    }
    /**
     * Check initialization.
     *
     * @return bool
     */
    public static function isInited()
    {
    }
    /**
     * Check used compatible calculate.
     *
     * @return bool
     */
    public static function isUsed()
    {
    }
    /**
     * Stops usage compatible mode. It's important for situation with new API and old API.
     * Be careful! Don't forget revert this action.
     *
     * @internal
     * @return void
     */
    public static function stopUsageCompatible()
    {
    }
    /**
     * Reverts usage compatible mode. It's important for situation with new API and old API.
     *
     * @internal
     * @return void
     */
    public static function revertUsageCompatible()
    {
    }
    /**
     * Set base price for basket item.
     *
     * @param string|int $code				Basket code.
     * @param float $price			Price.
     * @param string $currency		Currency.
     * @return void
     */
    public static function setBasketItemBasePrice($code, $price, $currency)
    {
    }
    /**
     * Set base price for all basket items.
     *
     * @param array $basket					Basket.
     * @return void
     * @throws Main\ArgumentNullException
     */
    public static function setBasketBasePrice($basket)
    {
    }
    /**
     * Get base price for basket item.
     *
     * @param string|int $code				Basket code.
     * @return float|null
     */
    public static function getBasketItemBasePrice($code)
    {
    }
    /**
     * Set product discounts for basket item.
     *
     * @param string|int $code				Basket code.
     * @param array $discountList			Discount list.
     * @return void
     */
    public static function setBasketItemDiscounts($code, $discountList)
    {
    }
    /**
     * Get product discounts for basket item.
     *
     * @param string|int $code				Basket code.
     * @return null|array
     */
    public static function getBasketItemDiscounts($code)
    {
    }
    /**
     * @param int|string $code				Basket code.
     * @param array $providerData			Product data from provider.
     * @return void
     */
    public static function setBasketItemData($code, $providerData)
    {
    }
    /**
     * Clear basket item data.
     *
     * @param int $code				Basket code.
     * @return void
     */
    public static function clearBasketItemData($code)
    {
    }
    /**
     * Clear results before calculate.
     *
     * @return void
     */
    public static function clearDiscountResult()
    {
    }
    /**
     * Fill base prices.
     *
     * @param array &$basket				Basket data.
     * @return void
     */
    public static function fillBasketData(&$basket)
    {
    }
    /**
     * Calculate basket discounts for save.
     *
     * @param array &$basket				Basket items.
     * @return bool
     */
    public static function calculateBasketDiscounts(&$basket)
    {
    }
    /**
     * Save apply mode information.
     *
     * @param array &$basket				Basket items.
     * @return void
     */
    public static function setApplyMode(&$basket)
    {
    }
    /**
     * Push to stack current order data.
     *
     * @param array $order				Current order data.
     * @return void
     */
    public static function setOrderData($order)
    {
    }
    /**
     * Save result discount list from CSaleDiscount::DoProcessOrder.
     *
     * @param array $discountList		Result from CSaleDiscount::DoProcessOrder.
     * @return void
     */
    public static function setOldDiscountResult($discountList)
    {
    }
    /**
     * Return result discount list in old format. Compatibility only.
     *
     * @return array
     */
    public static function getOldDiscountResult()
    {
    }
    /**
     * Save sale discount.
     *
     * @param array &$order				Current order data.
     * @param array $discount			Discount data.
     * @return bool
     */
    public static function calculateSaleDiscount(&$order, $discount)
    {
    }
    /**
     * Return discount list description.
     *
     * @param bool $extMode			Extended mode.
     * @return array
     */
    public static function getApplyResult($extMode = false)
    {
    }
    /**
     * Set basket code.
     *
     * @param string|int $index				Item index.
     * @param string|int $code				Basket code.
     * @return void
     */
    public static function setBasketCode($index, $code)
    {
    }
    /**
     * Return discount result for old api.
     *
     * @return array|bool
     */
    public static function getResult()
    {
    }
    /**
     * Round prices.
     *
     * @param array &$basket	Basket items.
     * @param array $orderData  Order (without basket).
     * @return void
     */
    public static function roundPrices(array &$basket, array $orderData = array())
    {
    }
    /**
     * Returns existing custom price.
     *
     * @param array $basketItem			Basket item.
     * @return bool
     */
    protected static function isCustomPrice($basketItem)
    {
    }
    /**
     * Calculate basket discounts for item.
     *
     * @param string|int $code						Basket code.
     * @param array $fields							Basket data.
     * @return bool
     */
    protected static function calculateBasketItemDiscount($code, $fields)
    {
    }
    /**
     * Convert discount for saving in order.
     *
     * @param array $discount			Raw discount data.
     * @return Sale\Result
     */
    protected static function convertDiscount($discount)
    {
    }
    /**
     * Convert coupon for saving in order.
     *
     * @param string|array $coupon			Coupon.
     * @param int $discount					Order discount id.
     * @return Sale\Result
     */
    protected static function convertCoupon($coupon, $discount)
    {
    }
    /**
     * Return formatted discount description.
     *
     * @param array|bool $descr				Description.
     * @return array
     */
    protected static function formatDescription($descr)
    {
    }
    /**
     * Returns result after one discount.
     *
     * @param array $order			Order current data.
     * @return array
     */
    protected static function getStepResult($order)
    {
    }
    /**
     * Returns result after one discount in old format.
     *
     * @param array $currentOrder			Current order data.
     * @return array
     */
    protected static function getStepResultOld($currentOrder)
    {
    }
    /**
     * Correct data for exotic coupon.
     *
     * @param array &$order					Current order data.
     * @param array &$stepResult			Currenct discount result.
     * @param array $discount				Discount data.
     * @return void
     */
    protected static function correctStepResult(&$order, &$stepResult, $discount)
    {
    }
    /**
     * Returns discount and coupon list.
     *
     * @return void
     */
    protected static function getApplyDiscounts()
    {
    }
    /**
     * Change result format.
     *
     * @return void
     */
    protected static function remakingDiscountResult()
    {
    }
}