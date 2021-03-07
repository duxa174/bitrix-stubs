<?php

namespace Bitrix\Sale;

/**
 * Class ProviderBase
 * @package Bitrix\Sale
 */
abstract class ProviderBase
{
    /** @var Internals\Pool[] */
    protected static $reservationPool = array();
    /** @var array  */
    protected static $hitCache = array();
    /** @var array  */
    protected static $trustData = array();
    /** @var bool */
    protected static $useReadTrustData = false;
    /** @var Internals\Pool[] */
    protected static $quantityPool = array();
    static $productData = array();
    const POOL_ACTION_RESERVATION = "RESERVE";
    const POOL_ACTION_SHIP = "SHIP";
    /**
     * @param $key
     * @return Internals\Pool
     */
    protected static function getReservationPool($key)
    {
    }
    /**
     * @param $key
     *
     * @return Internals\Pool
     */
    protected static function resetReservationPool($key)
    {
    }
    /**
     * @param $key
     * @param BasketItem $item
     * @return float|null
     */
    public static function getReservationPoolItem($key, \Bitrix\Sale\BasketItem $item)
    {
    }
    /**
     * @param $key
     * @param BasketItem $item
     * @param $value
     */
    protected static function setReservationPoolItem($key, \Bitrix\Sale\BasketItem $item, $value)
    {
    }
    /**
     * @param $key
     * @param BasketItem $item
     * @param $value
     */
    protected static function addReservationPoolItem($key, \Bitrix\Sale\BasketItem $item, $value)
    {
    }
    /**
     * @param $key
     * @return Internals\Pool
     */
    protected static function getQuantityPool($key)
    {
    }
    /**
     * @param $key
     */
    protected static function resetQuantityPool($key)
    {
    }
    /**
     * @param $key
     * @param BasketItem $item
     * @return float|null
     */
    public static function getQuantityPoolItem($key, \Bitrix\Sale\BasketItem $item)
    {
    }
    /**
     * @param $key
     * @param BasketItem $item
     * @param $value
     */
    protected static function setQuantityPoolItem($key, \Bitrix\Sale\BasketItem $item, $value)
    {
    }
    /**
     * @internal
     *
     * @param $key
     * @param BasketItem $item
     * @param $value
     */
    public static function addQuantityPoolItem($key, \Bitrix\Sale\BasketItem $item, $value)
    {
    }
    /**
     * @param Order $order
     * @return Result
     * @throws NotImplementedException
     * @throws SystemException
     */
    public static function onOrderSave(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @internal
     * @param BasketItemBase $basketItem
     *
     * @return Result
     * @throws NotSupportedException
     * @throws ObjectNotFoundException
     */
    public static function shipBasketItem(\Bitrix\Sale\BasketItemBase $basketItem)
    {
    }
    /**
     * @param Shipment $shipment
     * @return Result
     * @throws NotSupportedException
     * @throws SystemException
     */
    public static function shipShipment(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param $provider
     * @param array $fields
     * @param array $storeDataList
     *
     * @return Result
     */
    public static function shipProductData($provider, array $fields, array $storeDataList = array())
    {
    }
    /**
     * @param Shipment $shipment
     * @param array $shippedList
     * @throws NotSupportedException
     * @throws SystemException
     */
    private function reverseShipment(\Bitrix\Sale\Shipment $shipment, array $shippedList)
    {
    }
    /**
     * @param Shipment $shipment
     *
     * @return Result
     * @throws ObjectNotFoundException
     */
    private function setShipmentItemReserved(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param Basket $basketCollection
     * @param BasketItem $refreshItem
     * @return array
     * @throws NotSupportedException
     */
    public static function getProductAvailableQuantity(\Bitrix\Sale\Basket $basketCollection, \Bitrix\Sale\BasketItem $refreshItem = null)
    {
    }
    /**
     * @param BasketItemCollection $basketCollection
     * @param array $select
     * @param BasketItem|null $refreshItem
     *
     * @return array
     * @throws NotSupportedException
     * @throws ObjectNotFoundException
     */
    public static function getProductData(\Bitrix\Sale\BasketItemCollection $basketCollection, array $select = array(), \Bitrix\Sale\BasketItem $refreshItem = null)
    {
    }
    /**
     * @internal
     * @param array $products
     * @param $providerClassName
     * @param array $select
     * @param array $context
     * @param array $options
     *
     * @return Result
     */
    public static function getProductDataByList(array $products, $providerClassName = null, array $select = array(), array $context, array $options = array())
    {
    }
    /**
     * @param $basketList
     * @param array $productDataList
     * @param array $select
     *
     * @return array
     * @throws ArgumentTypeException
     */
    private static function createItemsAfterGetProductData($basketList, array $productDataList, array $select = array())
    {
    }
    /**
     * @internal
     * @param array $products
     * @param $provider
     * @param array $data
     * @param array $select
     *
     * @return mixed
     */
    public static function getProductProviderData(array $products, $provider, array $data, array $select = array())
    {
    }
    /**
     * @param array $basketProviderList
     * @param array $context
     * @param array $select
     *
     * @return array
     */
    public static function getCatalogData(array $basketProviderList, array $context, array $select = array())
    {
    }
    /**
     * @param Shipment $shipment
     *
     * @return Result
     * @throws NotSupportedException
     * @throws ObjectNotFoundException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public static function tryShipment(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param ShipmentItem[] $shipmentItemList
     *
     * @return Result
     * @throws ObjectNotFoundException
     */
    public static function tryShipmentItemList($shipmentItemList)
    {
    }
    /**
     * @param $shipmentItemList
     *
     * @return array
     */
    protected static function getBundleIndexFromShipmentItemCollection($shipmentItemList)
    {
    }
    /**
     * @param $shipmentItemList
     *
     * @return array
     * @throws ObjectNotFoundException
     */
    protected static function getBasketFromShipmentItemCollection($shipmentItemList)
    {
    }
    /**
     * @param $shipmentItemList
     *
     * @return array
     * @throws ObjectNotFoundException
     */
    protected static function getBasketCountFromShipmentItemCollection($shipmentItemList)
    {
    }
    /**
     * @param $shipmentItemList
     *
     * @return Result
     */
    protected static function getStoreDataFromShipmentItemCollection($shipmentItemList)
    {
    }
    /**
     * @param Basket BasketItemCollection
     * @param BasketItem|null $refreshItem
     *
     * @return array
     */
    protected static function makeArrayFromBasketCollection(\Bitrix\Sale\BasketItemCollection $basketCollection, \Bitrix\Sale\BasketItem $refreshItem = null)
    {
    }
    /**
     * @param Shipment $shipment
     *
     * @return Result
     * @throws ObjectNotFoundException
     */
    public static function tryReserveShipment(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param Shipment $shipment
     *
     * @return Result
     * @throws ObjectNotFoundException
     */
    public static function tryUnreserveShipment(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param ShipmentItem $shipmentItem
     *
     * @return Result
     * @throws NotSupportedException
     * @throws ObjectNotFoundException
     */
    public static function tryReserveShipmentItem(\Bitrix\Sale\ShipmentItem $shipmentItem)
    {
    }
    /**
     * @param ShipmentItem $shipmentItem
     *
     * @return Result
     * @throws NotSupportedException
     * @throws ObjectNotFoundException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Exception
     */
    public static function tryUnreserveShipmentItem(\Bitrix\Sale\ShipmentItem $shipmentItem)
    {
    }
    /**
     * @param BasketItem $basketItem
     * @param $quantity
     * @return Result
     * @throws NotSupportedException
     */
    protected static function tryReserveBasketItem(\Bitrix\Sale\BasketItem $basketItem, $quantity)
    {
    }
    /**
     * @param BasketItem $basketItem
     * @param $quantity
     * @return Result
     * @throws NotSupportedException
     * @throws ObjectNotFoundException
     */
    private static function reserveBasketItem(\Bitrix\Sale\BasketItem $basketItem, $quantity)
    {
    }
    /**
     * @internal
     * @param $provider
     * @param $productId
     * @param $quantity
     *
     * @return Result
     */
    public static function reserveProduct($provider, $productId, $quantity)
    {
    }
    /**
     * @param ShipmentItem $shipmentItem
     * @param $quantity
     *
     * @return Result
     * @throws NotSupportedException
     * @throws ObjectNotFoundException
     */
    public static function reserveShipmentItem(\Bitrix\Sale\ShipmentItem $shipmentItem, $quantity)
    {
    }
    /**
     * @param ShipmentItem $shipmentItem
     * @param $quantity
     *
     * @return Result
     * @throws NotSupportedException
     * @throws ObjectNotFoundException
     */
    private static function unreserveShipmentItem(\Bitrix\Sale\ShipmentItem $shipmentItem, $quantity)
    {
    }
    /**
     * @param Shipment $shipment
     * @return array
     * @throws NotSupportedException
     * @throws ObjectNotFoundException
     */
    public static function syncReservedQuantity(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * reduce in the quantity of product if the reservation is disabled
     * @param ShipmentCollection $shipmentCollection
     * @param array $shipmentReserveList
     *
     * @throws ObjectNotFoundException
     */
    public static function reduceProductQuantity(\Bitrix\Sale\ShipmentCollection $shipmentCollection, array $shipmentReserveList = array())
    {
    }
    /**
     * increase in the quantity of product if the reservation is disabled
     * @param ShipmentCollection $shipmentCollection
     * @param array $shipmentReserveList
     *
     * @throws ObjectNotFoundException
     */
    public static function increaseProductQuantity(\Bitrix\Sale\ShipmentCollection $shipmentCollection, array $shipmentReserveList = array())
    {
    }
    /**
     * @param BasketItem $basketItem
     *
     * @return Result
     * @throws ObjectNotFoundException
     */
    public static function getProductStores(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @internal
     * @param $provider
     * @param array $fields
     *
     * @return Result
     */
    public static function getStores($provider, array $fields)
    {
    }
    /**
     * @param BasketItem $basketItem
     * @param array $params
     *
     * @return bool
     * @throws ObjectNotFoundException
     */
    public static function checkProductBarcode(\Bitrix\Sale\BasketItem $basketItem, array $params = array())
    {
    }
    /**
     * @internal
     * @param $provider
     * @param array $barcodeParams
     *
     * @return Result
     */
    public static function checkBarcode($provider, array $barcodeParams)
    {
    }
    /**
     * @param BasketItem $basketItem
     *
     * @return array
     * @throws ObjectNotFoundException
     */
    public static function viewProduct(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @internal
     * @param $provider
     * @param array $fields
     *
     * @return Result
     * @throws ArgumentTypeException
     */
    public static function getViewProduct($provider, array $fields)
    {
    }
    /**
     * @param BasketItem $basketItem
     *
     * @return Result
     * @throws ObjectNotFoundException
     */
    public static function recurringOrderProduct(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @param $provider
     * @param array $fields
     *
     * @return Result
     * @throws ArgumentTypeException
     */
    public static function recurringProduct($provider, array $fields)
    {
    }
    /**
     * @param BasketItemBase $basketItem
     *
     * @return array|bool|mixed
     * @throws ObjectNotFoundException
     */
    public static function getSetItems(\Bitrix\Sale\BasketItemBase $basketItem)
    {
    }
    /**
     * @param $providerName
     * @param array $productData
     *
     * @return bool|mixed
     */
    private static function getBundleChildItemsByProductData($providerName, array $productData)
    {
    }
    /**
     * @param $providerName
     * @param array $products
     *
     * @return Result
     */
    public static function getBundleChildItems($providerName, array $products)
    {
    }
    /**
     * @param $basketProviderList
     * @param array $productList
     * @return array|bool
     */
    protected static function getProductListFromBasketProviderList($basketProviderList, array $productList = array())
    {
    }
    /**
     * @param BasketItemBase $basketItem
     * @param $deltaQuantity
     *
     * @return Result
     * @throws NotSupportedException
     * @throws ObjectNotFoundException
     */
    public static function checkAvailableProductQuantity(\Bitrix\Sale\BasketItemBase $basketItem, $deltaQuantity)
    {
    }
    /**
     * @param $providerClass
     * @param $productData
     * @param array $context
     *
     * @return Result
     * @throws ArgumentNullException
     */
    private static function getAvailableQuantityByProductData($providerClass, $productData, array $context)
    {
    }
    /**
     * @param $providerClass
     * @param $productData
     * @param array $context
     *
     * @return Result
     * @throws ArgumentNullException
     */
    private static function getProviderDataByProductData($providerClass, $productData, array $context)
    {
    }
    /**
     * @param Shipment $shipment
     *
     * @return Result
     * @throws NotSupportedException
     * @throws ObjectNotFoundException
     */
    public static function deliverShipment(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param $provider
     * @param array $fields
     *
     * @return Result
     */
    public static function deliverProductData($provider, array $fields)
    {
    }
    /**
     * @param array $basketList
     * @param array $select
     * @return array
     * @throws ObjectNotFoundException
     */
    protected static function createProviderBasketMap(array $basketList, array $select = array())
    {
    }
    protected static function createProviderBasketItemMap(\Bitrix\Sale\BasketItem $basketItem, array $select = array())
    {
    }
    /**
     * @param Shipment $shipment
     * @return array
     */
    private static function getProviderBasketFromShipment(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param array $basketProviderMap
     * @return array
     */
    protected static function redistributeToProviders(array $basketProviderMap)
    {
    }
    /**
     * @internal
     * @param bool $value
     */
    public static function setUsingTrustData($value)
    {
    }
    /**
     * @internal
     * @return bool
     */
    public static function isReadTrustData()
    {
    }
    /**
     * @internal
     * @param $siteId
     * @param $module
     * @param $productId
     *
     * @return bool
     */
    public static function isExistsTrustData($siteId, $module, $productId)
    {
    }
    /**
     * @internal
     * @param string $siteId
     * @param string $module
     * @param int $productId
     * @param array $fields
     */
    public static function setTrustData($siteId, $module, $productId, array $fields)
    {
    }
    /**
     * @internal
     * @param $siteId
     * @param $module
     * @param $productId
     *
     * @return null
     */
    public static function getTrustData($siteId, $module, $productId)
    {
    }
    /**
     * @internal
     * @param null|string $siteId
     * @param null|string $module
     * @param null|int $productId
     */
    public static function resetTrustData($siteId = null, $module = null, $productId = null)
    {
    }
    /**
     * @param Order $order
     *
     * @throws ArgumentNullException
     * @throws NotImplementedException
     * @throws NotSupportedException
     * @throws ObjectNotFoundException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Exception
     */
    protected static function refreshMarkers(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @return array
     */
    protected static function getPrimaryFields()
    {
    }
    /**
     * @internal
     * @return array
     */
    public static function getUpdatableFields()
    {
    }
    /**
     * @internal
     * @return array
     */
    protected static function getProductDataRequiredFields()
    {
    }
    /**
     * @internal
     * @return array
     */
    protected static function getProductDataRequiredPriceFields()
    {
    }
    /**
     * @internal
     * @param $providerClass
     * @param array $products
     * @param array $context
     *
     * @return Result
     */
    public static function getAvailableQuantity($providerClass, array $products, array $context)
    {
    }
    /**
     * @internal
     * @param $providerClass
     * @param array $products
     * @param array $context
     *
     * @return Result
     * @throws ObjectNotFoundException
     */
    public static function getAvailableQuantityAndPrice($providerClass, array $products, array $context)
    {
    }
    /**
     * @param ShipmentItem[] $shipmentItemList
     *
     * @return Result
     * @throws ObjectNotFoundException
     */
    public static function isNeedShip($shipmentItemList)
    {
    }
    /**
     * @return array
     */
    protected static function getPriceFields()
    {
    }
}