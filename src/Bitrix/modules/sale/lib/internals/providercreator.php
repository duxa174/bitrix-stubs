<?php

namespace Bitrix\Sale\Internals;

/**
 * Class ProviderCreator
 * @package Bitrix\Sale\Internals
 */
class ProviderCreator
{
    private $context = array();
    private $pool = array();
    /**
     * @param array $context
     *
     * @return static
     */
    public static function create(array $context)
    {
    }
    /**
     * @param Sale\BasketItemBase $basketItem
     */
    public function addBasketItem(\Bitrix\Sale\BasketItemBase $basketItem)
    {
    }
    /**
     * @param Sale\ShipmentItem $shipmentItem
     */
    public function addShipmentItem(\Bitrix\Sale\ShipmentItem $shipmentItem)
    {
    }
    /**
     * @param array $shipmentProductData
     */
    public function addShipmentProductData(array $shipmentProductData)
    {
    }
    /**
     * @param array $productData
     *
     * @throws Main\ArgumentNullException
     */
    public function addProductData(array $productData)
    {
    }
    /**
     * @param Sale\BasketItem $basketItem
     * @param array $barcodeParams
     */
    public function addBasketItemBarcodeData(\Bitrix\Sale\BasketItem $basketItem, array $barcodeParams)
    {
    }
    /**
     * @param Sale\ShipmentItem $shipmentItem
     * @param array $needShipList
     *
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    public function createItemForShip(\Bitrix\Sale\ShipmentItem $shipmentItem, array $needShipList = [])
    {
    }
    /**
     * @param Sale\ShipmentItem $shipmentItem
     *
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    public function createItemForReserve(\Bitrix\Sale\ShipmentItem $shipmentItem)
    {
    }
    /**
     * @param Sale\ShipmentItem $shipmentItem
     *
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    public function createItemForUnreserve(\Bitrix\Sale\ShipmentItem $shipmentItem)
    {
    }
    /**
     * @param Sale\ShipmentItem $shipmentItem
     * @param bool $reserve
     *
     * @return array
     * @throws Main\ObjectNotFoundException
     */
    private function createMapForReserve(\Bitrix\Sale\ShipmentItem $shipmentItem, $reserve = true)
    {
    }
    /**
     * @return Sale\Result
     */
    public function getProductData()
    {
    }
    /**
     * @return Sale\Result
     */
    public function getAvailableQuantity()
    {
    }
    /**
     * @return Sale\Result
     */
    public function getAvailableQuantityAndPrice()
    {
    }
    /**
     * @param PoolQuantity $pool
     * @param array $productTryShipList
     *
     * @return Sale\Result
     */
    public function setItemsResultAfterTryShip(\Bitrix\Sale\Internals\PoolQuantity $pool, array $productTryShipList)
    {
    }
    /**
     * @param Sale\Result $resultAfterReserve
     *
     * @return Sale\Result
     */
    public function setItemsResultAfterReserve(\Bitrix\Sale\Result $resultAfterReserve)
    {
    }
    /**
     * @param Sale\Result $resultAfterShip
     *
     * @return Sale\Result
     */
    public function setItemsResultAfterShip(\Bitrix\Sale\Result $resultAfterShip)
    {
    }
    /**
     * @param Sale\Result $resultAfterDeliver
     *
     * @return Sale\Result
     */
    public function createItemsResultAfterDeliver(\Bitrix\Sale\Result $resultAfterDeliver)
    {
    }
    /**
     * @return Sale\Result
     */
    public function tryShip()
    {
    }
    /**
     * @return Sale\Result
     */
    public function isNeedShip()
    {
    }
    /**
     * @return Sale\Result
     */
    public function checkBarcode()
    {
    }
    /**
     * @return Sale\Result
     */
    public function reserve()
    {
    }
    /**
     * @return Sale\Result
     */
    public function ship()
    {
    }
    /**
     * @return Sale\Result
     */
    public function getBundleItems()
    {
    }
    /**
     * @return Sale\Result
     */
    public function deliver()
    {
    }
    /**
     * @return Sale\Result
     */
    public function viewProduct()
    {
    }
    /**
     * @return Sale\Result
     */
    public function getProductStores()
    {
    }
    /**
     * @return Sale\Result
     */
    public function recurring()
    {
    }
    /**
     * @param Sale\Result $resultAfterDeliver
     *
     * @return Sale\Result
     */
    public function createItemsResultAfterRecurring(\Bitrix\Sale\Result $resultAfterDeliver)
    {
    }
    /**
     * @param $method
     * @param $outputName
     * @param null $methodParameters
     *
     * @return Sale\Result
     * @throws Main\ArgumentOutOfRangeException
     */
    private function callBuilderMethod($method, $outputName, $methodParameters = null)
    {
    }
    /**
     * @param $providerName
     *
     * @return ProviderBuilderBase
     */
    private function createBuilder($providerName)
    {
    }
    /**
     * @param string $providerName
     * @param ProviderBuilderBase $builder
     */
    private function addBuilder($providerName, \Bitrix\Sale\Internals\ProviderBuilderBase $builder)
    {
    }
    /**
     * @param $providerName
     *
     * @return ProviderBuilderBase|bool
     */
    private function getBuilder($providerName)
    {
    }
    /**
     * @param $providerName
     *
     * @return bool
     */
    private function isExistsProvider($providerName)
    {
    }
    /**
     * @return array
     */
    private function getContext()
    {
    }
    /**
     * @param $providerName
     *
     * @return string
     */
    private function clearProviderName($providerName)
    {
    }
}