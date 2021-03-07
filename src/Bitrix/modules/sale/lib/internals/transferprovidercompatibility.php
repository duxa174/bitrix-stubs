<?php

namespace Bitrix\Sale\Internals;

/**
 * Class TransferProviderCompatibility
 */
class TransferProviderCompatibility extends \Bitrix\Sale\Internals\TransferProviderBase
{
    /**
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function tryShip(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function isNeedShip(array $products)
    {
    }
    /**
     * @param Sale\Shipment $shipment
     *
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    private static function getReservedQuantity(\Bitrix\Sale\Shipment $shipment)
    {
    }
    /**
     * @param Sale\ShipmentItem[] $shipmentItemList
     * @param array $reservedQuantityList
     *
     * @throws Main\ObjectNotFoundException
     */
    private static function setReservedQuantityToShipmentItem($shipmentItemList, array $reservedQuantityList)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function ship(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function reserve(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return array
     */
    private static function getShipmentItemListFromProducts(array $products)
    {
    }
    /**
     * @param Sale\ShipmentItem[] $shipmentItemList
     * @param Sale\Result $result
     *
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    private static function createListFromTryShipmentResult($shipmentItemList, \Bitrix\Sale\Result $result)
    {
    }
    /**
     * @param PoolQuantity $pool
     * @param array $products
     * @param array $productTryShipList
     *
     * @return Sale\Result
     * @throws Main\ArgumentException
     */
    public function setItemsResultAfterTryShip(\Bitrix\Sale\Internals\PoolQuantity $pool, array $products, array $productTryShipList)
    {
    }
    /**
     * @param PoolQuantity $pool
     * @param array $products
     * @param array $productTryShipList
     *
     * @return Sale\Result
     * @throws Main\ArgumentException
     */
    public function setItemsResultAfterTryUnship(\Bitrix\Sale\Internals\PoolQuantity $pool, array $products, array $productTryShipList)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function getAvailableQuantity(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function getAvailableQuantityAndPrice(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function getProductData(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public function getBundleItems(array $products)
    {
    }
    /**
     * @return Sale\Result
     */
    public function getStoresCount()
    {
    }
    /**
     * @param array $products
     *
     * @return mixed
     * @throws Main\SystemException
     */
    public function deliver(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return mixed
     * @throws Main\SystemException
     */
    public function viewProduct(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return mixed
     * @throws Main\SystemException
     */
    public function getProductListStores(array $products)
    {
    }
    /**
     * @param array $items
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function checkBarcode(array $items)
    {
    }
    /**
     * @param array $products
     *
     * @return mixed
     * @throws Main\SystemException
     */
    public function recurring(array $products)
    {
    }
}