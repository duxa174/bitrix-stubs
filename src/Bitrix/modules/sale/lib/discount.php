<?php

namespace Bitrix\Sale;

class Discount extends \Bitrix\Sale\DiscountBase
{
    /* Sale objects */
    /** @var null|Shipment $shipment */
    protected $shipment = null;
    /** @var array */
    protected $shipmentIds = array();
    /** @var bool  */
    protected $enableCheckingPrediction = false;
    /**
     * Enables prediction checking instead real condition.
     * @return void
     */
    public function enableCheckingPrediction()
    {
    }
    /**
     * Disables prediction checking instead real condition.
     * @return void
     */
    public function disableCheckingPrediction()
    {
    }
    /**
     * Get discount by fuser and site.
     *
     * @param string|int $fuser			Fuser id.
     * @param string $site				Site id.
     * @return null|Discount|DiscountBase
     */
    public static function loadByFuser($fuser, $site)
    {
    }
    /**
     * Return parent entity type.
     * @internal
     *
     * @return string
     */
    public static function getRegistryType()
    {
    }
    /**
     * Set calculate shipments.
     *
     * @param Shipment $shipment							Current shipment.
     * @return void
     */
    public function setCalculateShipments(\Bitrix\Sale\Shipment $shipment = null)
    {
    }
    /**
     * Return shipment id list for existing order.
     *
     * @return array
     */
    public function getShipmentsIds()
    {
    }
    /**
     * Clone entity.
     *
     * @internal
     * @param \SplObjectStorage $cloneEntity	Clone repository.
     *
     * @return Discount
     */
    public function createClone(\SplObjectStorage $cloneEntity)
    {
    }
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
    /**
     * Returns show prices for public components.
     *
     * @return array
     */
    public function getShowPrices()
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
    /**
     * Returns order configuration for save to database.
     *
     * @return array
     */
    protected function getOrderConfig()
    {
    }
    /* instance tools */
    /**
     * Return instance index for fuser.
     *
     * @internal
     * @param string|int $fuser			Fuser id.
     * @param string $site				Site id.
     * @return string
     */
    protected static function getInstanceIndexByFuser($fuser, $site)
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
     * Returns result after one discount.
     *
     * @param array $order			Order current data.
     * @return array
     */
    protected static function getStepResult(array $order)
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
    /**
     * Returns delivery price data.
     *
     * @return array
     */
    protected function getApplyDeliveryPrice()
    {
    }
    /**
     * Get discount delivery list and delivery list.
     *
     * @return array
     */
    protected function getApplyDeliveryList()
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
     * Fill prices from base prices.
     *
     * @return void
     */
    protected function resetPrices()
    {
    }
    /**
     * Fill delivery price from base price.
     *
     * @return void
     */
    protected function resetDeliveryPrices()
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
     * Load default order config for order.
     *
     * @return void
     */
    protected function loadDefaultOrderConfig()
    {
    }
    /**
     * @param array $data		Order settings from database.
     * @return void
     */
    protected function applyLoadedOrderConfig(array $data)
    {
    }
    /**
     * Return is exists discount shipment.
     *
     * @return bool
     */
    protected function isShipmentExists()
    {
    }
    /**
     * Fill data from shipment.
     *
     * @return void
     */
    protected function fillShipmentData()
    {
    }
    /**
     * Load shipment.
     *
     * @return Result
     */
    protected function loadShipment()
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
    /* entities id tools */
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
    /* compatibility tools */
    /**
     * Check use old api.
     *
     * @return bool
     */
    private function isUsedDiscountCompatibility()
    {
    }
    /**
     * Fill order fields for deprecated discount classes.
     *
     * @return void
     */
    protected function fillCompatibleOrderFields()
    {
    }
    /* compatibility tools finish */
    /* deprecated methods */
    /**
     * Set base price for basket item.
     * @deprecated
     *
     * @param int|string $code				Basket code.
     * @param float $price			Price.
     * @param string $currency		Currency.
     * @return void
     */
    public function setBasketItemBasePrice($code, $price, $currency)
    {
    }
    /**
     * Set base price for all basket items.
     * @deprecated
     *
     * @param array $basket					Basket.
     * @return void
     */
    public function setBasketBasePrice($basket)
    {
    }
    /**
     * Get base price for basket item.
     * @deprecated
     *
     * @param int|string $code				Basket code.
     * @return float|null
     */
    public function getBasketItemBasePrice($code)
    {
    }
    /**
     * Set product discounts for basket item.
     * @deprecated
     *
     * @param int|string $code				Basket code.
     * @param array $discountList			Discount list.
     * @return void
     */
    public function setBasketItemDiscounts($code, $discountList)
    {
    }
    /**
     * Set various basket item data.
     * @deprecated
     *
     * @param int|string $code				Basket code.
     * @param array $providerData			Product data from provider.
     * @return void
     */
    public function setBasketItemData($code, $providerData)
    {
    }
    /**
     * Clear basket item data.
     * @deprecated
     *
     * @param int|string $code				Basket code.
     * @return void
     */
    public function clearBasketItemData($code)
    {
    }
    /**
     * Get discount by basket.
     *
     * @deprecated deprecated sinse sale 17.0.11
     * @see Discount::buildFromBasket
     *
     * @param Basket $basket		Basket object.
     * @return Discount|DiscountBase|null
     */
    public static function loadByBasket(\Bitrix\Sale\Basket $basket)
    {
    }
    /**
     * Get discount by order.
     *
     * @deprecated deprecated sinse sale 17.0.11
     * @see Discount::buildFromOrder
     *
     * @param Order $order		Order object.
     * @return Discount|DiscountBase
     */
    public static function load(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @deprecated
     *
     * @param BasketItem $basketItem
     * @param int $orderDiscountId
     * @return void
     * @throws \Exception
     */
    public function saveExternalLastApplyblock(\Bitrix\Sale\BasketItem $basketItem, $orderDiscountId)
    {
    }
    /**
     * Return basket item currency.
     * @deprecated
     *
     * @param string|int $basketCode	Basket item code.
     * @return string|null
     */
    protected function getBasketCurrency($basketCode)
    {
    }
    /* deprecated methods finish */
}