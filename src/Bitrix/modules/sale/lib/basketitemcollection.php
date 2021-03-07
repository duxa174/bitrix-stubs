<?php

namespace Bitrix\Sale;

/**
 * Class BasketItemCollection
 * @package Bitrix\Sale
 */
abstract class BasketItemCollection extends \Bitrix\Sale\Internals\EntityCollection
{
    /**
     * @param $moduleId
     * @param $productId
     * @param null $basketCode
     * @return BasketItemBase
     * @throws NotImplementedException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public function createItem($moduleId, $productId, $basketCode = null)
    {
    }
    /**
     * @param BasketItemCollection $basket
     * @param $moduleId
     * @param $productId
     * @param null $basketCode
     * @return BasketItemBase
     * @throws NotImplementedException
     * @throws \Bitrix\Main\ArgumentException
     */
    protected static function createItemInternal(\Bitrix\Sale\BasketItemCollection $basket, $moduleId, $productId, $basketCode = null)
    {
    }
    /**
     * @return OrderBase
     */
    public function getOrder()
    {
    }
    /**
     * @return BasketBase
     */
    public abstract function getBasket();
    /**
     * @param array $itemList
     * @throws NotImplementedException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public function loadFromArray(array $itemList)
    {
    }
    /**
     * @return string
     * @throws NotImplementedException
     * @throws \Bitrix\Main\ArgumentException
     */
    protected static function getItemCollectionClassName()
    {
    }
    /**
     * @param $code
     * @return BasketItemBase|null
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public function getItemByBasketCode($code)
    {
    }
    /**
     * @param $id
     * @return BasketItemBase|null
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public function getItemById($id)
    {
    }
    /**
     * @return array
     */
    public function getBasketItems()
    {
    }
    /**
     * @param $moduleId
     * @param $productId
     * @param array $properties
     * @return BasketItem|null
     * @throws NotImplementedException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public function getExistsItem($moduleId, $productId, array $properties = array())
    {
    }
    /**
     * @return int
     */
    public function getOrderId()
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     */
    public function getContext()
    {
    }
}