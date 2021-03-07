<?php

namespace Bitrix\Catalog\Product;

/**
 * Class CatalogProviderCompatibility
 *
 * @package Bitrix\Catalog\Product
 */
class CatalogProviderCompatibility
{
    /**
     * @param array $basketItemData
     *
     * @return array|bool
     */
    public static function getProductData(array $basketItemData)
    {
    }
    /**
     * @param array $basketItemData
     *
     * @return array|bool
     */
    public static function orderProduct(array $basketItemData)
    {
    }
    /**
     * @param $productId
     *
     * @return array|bool
     */
    public static function getSetItems($productId)
    {
    }
    /**
     * @param array $values
     *
     * @return array|bool
     */
    public static function reserveProduct(array $values)
    {
    }
    /**
     * @param array $values
     *
     * @return array|bool
     */
    public static function deductProduct(array $values)
    {
    }
    /**
     * @param array $values
     *
     * @return array|bool
     */
    public static function viewProduct(array $values)
    {
    }
    /**
     * @param array $values
     *
     * @return array|bool
     */
    public static function getProductStores(array $values)
    {
    }
    /**
     * @param array $values
     *
     * @return array|bool
     */
    public static function recurringOrderProduct(array $values)
    {
    }
    /**
     * @param array $values
     *
     * @return array|bool
     */
    public static function getStoresCount(array $values)
    {
    }
    public static function DeliverProduct(array $values)
    {
    }
    /**
     * @param array $context
     *
     * @return null|Sale\SaleProviderBase
     */
    private static function getProviderClass($context = array())
    {
    }
    /**
     * @return array
     */
    private static function getContext()
    {
    }
    /**
     * @return string
     */
    private static function getProviderName()
    {
    }
}