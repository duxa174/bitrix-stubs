<?php

namespace Bitrix\Sale\Internals;

/**
 * Class TransferProvider
 */
abstract class TransferProviderBase
{
    protected $providerClass = null;
    protected $context = null;
    /**
     * TransferProvider constructor.
     */
    protected function __construct()
    {
    }
    /**
     * @return null|mixed
     */
    protected function getProviderClass()
    {
    }
    /**
     * @return null|mixed
     */
    protected function getProviderName()
    {
    }
    /**
     * @return null|array
     */
    protected function getContext()
    {
    }
    /**
     * @param $providerClass
     * @param array $context
     *
     * @return static
     * @throws Main\ArgumentNullException
     */
    public static function create($providerClass, array $context)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public abstract function getProductData(array $products);
    /**
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException|Main\SystemException
     */
    public abstract function tryShip(array $products);
    /**
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException|Main\SystemException
     */
    public abstract function isNeedShip(array $products);
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public abstract function ship(array $products);
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public abstract function reserve(array $products);
    /**
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\SystemException
     */
    public abstract function deliver(array $products);
    /**
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\SystemException
     */
    public abstract function viewProduct(array $products);
    /**
     * @param array $products
     *
     * @return Sale\Result
     * @throws Main\SystemException
     */
    public abstract function getProductListStores(array $products);
    /**
     * @param PoolQuantity $pool
     * @param array $products
     * @param array $productTryShipList
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public abstract function setItemsResultAfterTryShip(\Bitrix\Sale\Internals\PoolQuantity $pool, array $products, array $productTryShipList);
    /**
     * @param array $products
     * @param Sale\Result $resultAfterShip
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function setItemsResultAfterShip(array $products, \Bitrix\Sale\Result $resultAfterShip)
    {
    }
    /**
     * @param array $products
     * @param Sale\Result $reserveResult
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public function setItemsResultAfterReserve(array $products, \Bitrix\Sale\Result $reserveResult)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public abstract function getAvailableQuantity(array $products);
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public abstract function getAvailableQuantityAndPrice(array $products);
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public abstract function getBundleItems(array $products);
    /**
     * @return Sale\Result
     */
    public abstract function getStoresCount();
}