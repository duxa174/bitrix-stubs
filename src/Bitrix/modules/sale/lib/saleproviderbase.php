<?php

namespace Bitrix\Sale;

/**
 * Class SaleProviderBase
 * @package Bitrix\Sale
 */
abstract class SaleProviderBase
{
    protected $context = array();
    /**
     * SaleProviderBase constructor.
     *
     * @param array $context
     */
    public function __construct(array $context = array())
    {
    }
    /**
     * @return array
     */
    protected function getContext()
    {
    }
    /**
     * @param array $products
     *
     * @return Result
     */
    public abstract function getProductData(array $products);
    /**
     * @param array $products
     *
     * @return Result
     */
    public abstract function getCatalogData(array $products);
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public abstract function tryShip(array $products);
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public function isNeedShip(array $products)
    {
    }
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public abstract function tryUnship(array $products);
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
    public abstract function unship(array $products);
    /**
     * @param $products
     *
     * @return Sale\Result
     */
    public abstract function getBundleItems(array $products);
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
     */
    public abstract function getAvailableQuantity(array $products);
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public abstract function deliver(array $products);
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public abstract function viewProduct(array $products);
    /**
     * @param array $products
     *
     * @return Sale\Result
     */
    public abstract function getProductListStores(array $products);
    /**
     * @param array $items
     *
     * @return Sale\Result
     */
    public abstract function checkBarcode(array $items);
    /**
     * @param array $products
     *
     * @return Result
     */
    public abstract function getAvailableQuantityAndPrice(array $products);
}