<?php

namespace Bitrix\Sale\Internals;

/**
 * Class ProviderBuilderBase
 * @package Bitrix\Sale\Internals
 */
abstract class ProviderBuilderBase
{
    protected $items = array();
    protected $providerClass = null;
    protected $callbackFunction = null;
    protected $context = array();
    /**
     * @param $providerClass
     * @param $context
     *
     * @return ProviderBuilderBase
     */
    public static function createBuilder($providerClass, $context)
    {
    }
    /**
     * @param $providerClass
     * @param $context
     *
     * @return ProviderBuilderBase
     */
    public static function create($providerClass, $context)
    {
    }
    /**
     * @param string $className
     * @param string $methodName
     * @param Sale\Result|null $result
     *
     * @return Sale\Result
     * @throws Main\ArgumentOutOfRangeException
     */
    protected function callTransferMethod($className, $methodName, \Bitrix\Sale\Result $result = null)
    {
    }
    /**
     * @param Sale\BasketItemBase $basketItem
     */
    public abstract function addProductByBasketItem(\Bitrix\Sale\BasketItemBase $basketItem);
    /**
     * @param Sale\ShipmentItem $shipmentItem
     */
    public abstract function addProductByShipmentItem(\Bitrix\Sale\ShipmentItem $shipmentItem);
    /**
     * @param array $shipmentProductData
     */
    public abstract function addProductByShipmentProductData(array $shipmentProductData);
    /**
     * @param array $barcodeParams
     */
    public function addBasketItemBarcodeData(array $barcodeParams)
    {
    }
    /**
     * @param int $productId
     */
    public function addProductById($productId)
    {
    }
    /**
     * @param $outputName
     *
     * @return Sale\Result
     */
    public function getProductData($outputName)
    {
    }
    /**
     * @param $outputName
     *
     * @return Sale\Result
     */
    public function getAvailableQuantity($outputName)
    {
    }
    /**
     * @param $outputName
     *
     * @return Sale\Result
     */
    public function getAvailableQuantityAndPrice($outputName)
    {
    }
    /**
     * @param Sale\Result $resultProvider
     * @param $outputName
     *
     * @return Sale\Result
     */
    protected function decomposeIntoProvider(\Bitrix\Sale\Result $resultProvider, $outputName)
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
    public function checkBarcode()
    {
    }
    /**
     * @return Sale\Result
     */
    public function recurring()
    {
    }
    /**
     * @param PoolQuantity $pool
     * @param array $productTryShipList
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public abstract function setItemsResultAfterTryShip(\Bitrix\Sale\Internals\PoolQuantity $pool, array $productTryShipList);
    /**
     * @param Sale\Result $result
     *
     * @return Sale\Result
     */
    public function setItemsResultAfterReserve(\Bitrix\Sale\Result $result)
    {
    }
    /**
     * @param Sale\Result $result
     *
     * @return Sale\Result
     */
    public function setItemsResultAfterShip(\Bitrix\Sale\Result $result)
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
     * @param Sale\Result $resultAfterDeliver
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function createItemsResultAfterDeliver(\Bitrix\Sale\Result $resultAfterDeliver)
    {
    }
    /**
     * @param array $productData
     */
    protected function addProduct(array $productData)
    {
    }
    /**
     * @internal
     * @return string|null
     */
    public function getProviderClass()
    {
    }
    /**
     * @internal
     * @return string|null
     */
    public function getCallbackFunction()
    {
    }
    /**
     * @internal
     * @return string
     */
    public function getProviderName()
    {
    }
    /**
     * @param $providerName
     *
     * @return string
     */
    protected function clearProviderName($providerName)
    {
    }
    /**
     * @internal
     * @return array
     */
    protected function getContext()
    {
    }
    /**
     * @return array
     */
    protected function getItems()
    {
    }
    /**
     * @param integer $productId
     * @param array $productData
     */
    protected function addItem($productId, array $productData)
    {
    }
    /**
     * @param $productId
     *
     * @return bool|array
     */
    protected function getItem($productId)
    {
    }
    /**
     * @param $productId
     *
     * @return bool
     */
    protected function isExistsProductIdInItems($productId)
    {
    }
    /**
     * @return string
     */
    public static function getClassName()
    {
    }
    public abstract function getTransferClassName();
}