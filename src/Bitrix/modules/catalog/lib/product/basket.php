<?php

namespace Bitrix\Catalog\Product;

/**
 * Class Basket
 * @package Bitrix\Catalog\Product
 */
class Basket
{
    private static $statisticIncluded = null;
    private static $saleIncluded = null;
    /**
     * Add to basket from public components.
     *
     * @param array $product				Product data (with properties).
     * @param array $basketFields			Basket fields (if used).
     * @param array $options				Execute options.
     *
     * @return Main\Result
     *
     * @throws Main\LoaderException
     * @throws Main\ObjectNotFoundException
     */
    public static function addProduct(array $product, array $basketFields = [], array $options = [])
    {
    }
    /**
     * Proxy method of adding a item to the basket.
     *
     * @param Sale\BasketBase $basket		Working basket.
     * @param array $fields					Basket item fields for add.
     * @param array $context				Working context (site, user).
     * @param array $options				Execute options.
     *
     * @return Main\Result
     *
     * @throws Main\LoaderException
     * @throws Main\ObjectNotFoundException
     */
    public static function addProductToBasket(\Bitrix\Sale\BasketBase $basket, array $fields, array $context, array $options = [])
    {
    }
    /**
     * Proxy method of adding a item to the basket. Already check iblock permissions.
     *
     * @param Sale\BasketBase $basket		Working basket.
     * @param array $fields					Basket item fields for add.
     * @param array $context				Working context (site, user).
     * @param bool|array $options			Execute options (by default - search existing row in basket before add options value).
     *
     * @return Main\Result
     *
     * @throws Main\LoaderException
     * @throws Main\ObjectNotFoundException
     */
    public static function addProductToBasketWithPermissions(\Bitrix\Sale\BasketBase $basket, array $fields, array $context, $options = true)
    {
    }
    /**
     * The main method of adding a item to the basket. Does not save the result in the database.
     * @internal
     *
     * @param Sale\BasketBase $basket		Working basket.
     * @param array $fields					Basket item fields for add.
     * @param array $context				Working context (site, user).
     * @param array $options				Options (check permiisons, search existing row, etc).
     *
     * @return Main\Result
     *
     * @throws Main\LoaderException
     * @throws Main\ObjectNotFoundException
     */
    private static function add(\Bitrix\Sale\BasketBase $basket, array $fields, array $context, array $options = [])
    {
    }
    /**
     * @return bool
     */
    private static function isCompatibilityEventAvailable()
    {
    }
    /**
     * @param array $fields
     * @return array|false
     */
    private static function runCompatibilityEvent(array $fields)
    {
    }
    /**
     * @param array &$propertyList
     * @param int $id
     * @param int $iblockId
     * @return void
     */
    private static function fillOfferProperties(array &$propertyList, $id, $iblockId)
    {
    }
    /**
     * Search basket property.
     *
     * @param string $code				Property code.
     * @param array $propertyList		Basket properties.
     * @return int|null
     */
    private static function getPropertyIndex($code, array $propertyList = array())
    {
    }
    /**
     * @return string
     */
    public static function getDefaultProviderName()
    {
    }
    /**
     * Returns the result of checking that the current user is not a search robot.
     *
     * @return bool
     */
    public static function isNotCrawler()
    {
    }
    /**
     * Checking that the current user is not a search robot.
     *
     * @return Main\Result
     */
    private static function checkCurrentUser()
    {
    }
}