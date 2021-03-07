<?php

namespace Bitrix\Sale\Internals;

/**
 * Class TransferProvider
 */
class TransferProvider extends \Bitrix\Sale\Internals\TransferProviderBase
{
    /**
     * @param $methodName
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\ArgumentOutOfRangeException
     */
    private function callProviderMethod($methodName, array $products = array())
    {
    }
    /**
     * @param array $products
     *
     * @return mixed
     * @throws Main\SystemException
     */
    public function tryShip(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return mixed
     * @throws Main\SystemException
     */
    public function isNeedShip(array $products)
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
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function reserve(array $products)
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
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function viewProduct(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function recurring(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function getProductListStores(array $products)
    {
    }
    /**
     * @param PoolQuantity $pool
     * @param array $products
     * @param array $productTryList
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function setItemsResultAfterTryShip(\Bitrix\Sale\Internals\PoolQuantity $pool, array $products, array $productTryList)
    {
    }
    /**
     * @param PoolQuantity $pool
     * @param array $products
     * @param array $productTryList
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function setItemsResultAfterTryUnship(\Bitrix\Sale\Internals\PoolQuantity $pool, array $products, array $productTryList)
    {
    }
    /**
     * @param PoolQuantity $pool
     * @param array $products
     * @param array $productTryList
     * @param $coefficient
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    private function setItemsResultAfterTryShipByCoefficient(\Bitrix\Sale\Internals\PoolQuantity $pool, array $products, array $productTryList, $coefficient)
    {
    }
    /**
     * @param array $products
     * @param Sale\Result $reserveResult
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function setItemsResultAfterGetData(array $products, \Bitrix\Sale\Result $reserveResult)
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
}