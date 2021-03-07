<?php

namespace Bitrix\Sale\Internals\Catalog;

/**
 * Class Provider
 *
 * @package Bitrix\Sale\Internals
 */
final class Provider
{
    const SALE_TRANSFER_PROVIDER_SHIPMENT_NEED_SHIP = true;
    const SALE_TRANSFER_PROVIDER_SHIPMENT_NEED_NOT_SHIP = false;
    const SALE_TRANSFER_PROVIDER_SHIPMENT_NEED_EMPTY = null;
    private static $ignoreErrors = false;
    /**
     * @param $basketList
     * @param array $context
     *
     * @return Sale\Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentTypeException
     */
    public static function getProductData($basketList, array $context)
    {
    }
    /**
     * @param Sale\BasketItemBase $basketItem
     * @param array $context
     *
     * @return Sale\Result
     * @throws Main\ArgumentNullException
     */
    public static function getBundleItems(\Bitrix\Sale\BasketItemBase $basketItem, array $context)
    {
    }
    /**
     * @param Sale\BasketItemBase $basketItem
     * @param array|null $context
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     * @throws Main\SystemException
     */
    public static function checkAvailableQuantityByBasketItem(\Bitrix\Sale\BasketItemBase $basketItem, array $context = array())
    {
    }
    /**
     * @param Sale\BasketItemBase $basketItem
     * @param array|null $context
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     * @throws Main\SystemException
     */
    public static function getAvailableQuantityAndPriceByBasketItem(\Bitrix\Sale\BasketItemBase $basketItem, array $context = array())
    {
    }
    /**
     * @param Sale\Shipment $shipment
     * @param array $context
     *
     * @return Sale\Result
     * @throws Main\ArgumentNullException
     * @throws Main\ObjectNotFoundException
     */
    public static function tryReserveShipment(\Bitrix\Sale\Shipment $shipment, array $context = array())
    {
    }
    /**
     * @param Sale\ShipmentItem $shipmentItem
     * @param array $context
     *
     * @return Sale\Result
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     * @throws \Exception
     */
    public static function tryReserveShipmentItem(\Bitrix\Sale\ShipmentItem $shipmentItem, array $context = array())
    {
    }
    /**
     * @param Sale\ShipmentItem $shipmentItem
     *
     * @return Sale\Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     * @throws \Exception
     */
    public static function tryUnreserveShipmentItem(\Bitrix\Sale\ShipmentItem $shipmentItem)
    {
    }
    /**
     * @param Sale\ShipmentItemCollection $shipmentItemCollection
     *
     * @return Sale\Result
     */
    private static function getNeedQuantityByShipmentItemCollection(\Bitrix\Sale\ShipmentItemCollection $shipmentItemCollection)
    {
    }
    /**
     * @param Sale\ShipmentItem $shipmentItem
     *
     * @return Sale\Result
     */
    private static function getNeedQuantityByShipmentItem(\Bitrix\Sale\ShipmentItem $shipmentItem)
    {
    }
    /**
     * @param Sale\Shipment $shipment
     *
     * @return Sale\Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     * @throws \Exception
     */
    public static function tryUnreserveShipment(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param $needQuantity
     * @param $reservedQuantity
     *
     * @return float|int
     */
    private static function countNeedQuantity($needQuantity, $reservedQuantity)
    {
    }
    /**
     * @param Sale\ShipmentItemCollection $shipmentItemCollection
     *
     * @return array
     */
    private static function createProductShipmentItemMapByShipmentItemCollection(\Bitrix\Sale\ShipmentItemCollection $shipmentItemCollection)
    {
    }
    /**
     * @param Sale\ShipmentItem $shipmentItem
     *
     * @return array
     */
    private static function createProductShipmentItemMapByShipmentItem(\Bitrix\Sale\ShipmentItem $shipmentItem)
    {
    }
    /**
     * @param PoolQuantity $pool
     * @param array $shipmentProductIndex
     * @param array $items
     *
     * @return Sale\Result
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     * @throws \Exception
     */
    private static function setAvailableQuantityToShipmentItemCollection(\Bitrix\Sale\Internals\PoolQuantity $pool, array $shipmentProductIndex, array $items)
    {
    }
    /**
     * @param Sale\Shipment $shipment
     * @param array $context
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public static function tryShipShipment(\Bitrix\Sale\Shipment $shipment, array $context = array())
    {
    }
    /**
     * @param Sale\ShipmentItemCollection $shipmentItemCollection
     *
     * @return array
     * @throws Main\LoaderException
     * @throws Main\ObjectNotFoundException
     */
    public static function createProviderItemsMap(\Bitrix\Sale\ShipmentItemCollection $shipmentItemCollection)
    {
    }
    /**
     * @param array $rulesProducts
     *
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    public static function createProviderItemsMapByRules(array $rulesProducts)
    {
    }
    /**
     * @internal
     * @param Sale\ShipmentItem $shipmentItem
     *
     * @return array|bool
     * @throws Main\ObjectNotFoundException
     */
    public static function createMapShipmentItemStoreData(\Bitrix\Sale\ShipmentItem $shipmentItem)
    {
    }
    /**
     * @internal
     * @param $shipmentItemList
     *
     * @return array
     * @throws Main\ObjectNotFoundException
     * @throws Main\SystemException
     */
    public static function createMapShipmentItemCollectionStoreData($shipmentItemList)
    {
    }
    /**
     * @param Sale\Order $order
     * @param array|null $context
     *
     * @return Sale\Result
     * @throws Main\SystemException
     */
    public static function save(\Bitrix\Sale\Order $order, array $context = array())
    {
    }
    /**
     * @param Sale\Shipment $shipment
     *
     * @return Sale\Order
     * @throws Main\ObjectNotFoundException
     */
    public static function getOrderByShipment(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param Sale\Shipment $shipment
     * @param array $context
     *
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    private static function prepareContextByShipment(\Bitrix\Sale\Shipment $shipment, array $context = array())
    {
    }
    /**
     * @param Sale\OrderBase $order
     * @param array $context
     *
     * @return array
     */
    private static function prepareContext(\Bitrix\Sale\OrderBase $order, array $context = array())
    {
    }
    /**
     * @param array $context
     *
     * @return Sale\Result
     * @throws Main\ArgumentNullException
     */
    private static function checkContext(array $context)
    {
    }
    /**
     * @param $module
     * @param $name
     *
     * @return string|null
     * @throws Main\LoaderException
     */
    public static function getProviderName($module, $name)
    {
    }
    /**
     * @param $name
     *
     * @return mixed|null
     */
    public static function getProviderEntity($name)
    {
    }
    /**
     * @param $name
     *
     * @return bool
     */
    public static function isProviderCallbackFunction($name)
    {
    }
    /**
     * @param $providerName
     *
     * @return string
     */
    private static function clearProviderName($providerName)
    {
    }
    /**
     * @internal
     * @param $value
     */
    public static function setIgnoreErrors($value)
    {
    }
    /**
     * @internal
     * @return bool
     */
    public static function isIgnoreErrors()
    {
    }
}