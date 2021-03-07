<?php

namespace Bitrix\Sale\Basket;

abstract class BaseRefreshStrategy
{
    const REFRESH_FIELD = 'DATE_REFRESH';
    protected $data;
    protected $refreshGap;
    public function __construct(array $data = null)
    {
    }
    protected function getBasketItemRefreshTimestamp(\Bitrix\Sale\BasketItemBase $basketItem)
    {
    }
    protected function isBasketItemChanged(\Bitrix\Sale\BasketItemBase $basketItem)
    {
    }
    protected function getBasketRefreshGapTime()
    {
    }
    protected function getBasketIndexList(\Bitrix\Sale\BasketBase $basket)
    {
    }
    protected function updateBasket(\Bitrix\Sale\BasketBase $basket, array $productDataList)
    {
    }
    protected function updateBasketItem(\Bitrix\Sale\BasketItemBase $item, $data)
    {
    }
    protected function prepareData(\Bitrix\Sale\BasketItemBase $item, $data)
    {
    }
    protected static function getAvailableQuantityFromPool(\Bitrix\Sale\BasketItemBase $item, $quantity)
    {
    }
    protected function getProviderContext(\Bitrix\Sale\BasketBase $basket)
    {
    }
    protected function getBasketItemsToRefresh(\Bitrix\Sale\BasketBase $basket, $quantity = 0)
    {
    }
    /**
     * @param BasketBase $basket
     * @param array      $itemsToRefresh
     *
     * @return Result
     */
    protected function getProviderResult(\Bitrix\Sale\BasketBase $basket, $itemsToRefresh = array())
    {
    }
    /**
     * @param BasketItemBase $item
     * @param                $fields
     *
     * @return Result
     */
    protected function applyRefreshResult(\Bitrix\Sale\BasketItemBase $item, $fields)
    {
    }
    /**
     * @param BasketBase $basket
     *
     * @return Result
     */
    protected abstract function getProductData(\Bitrix\Sale\BasketBase $basket);
    /**
     * @param BasketBase $basket
     *
     * @return Result
     */
    public function refresh(\Bitrix\Sale\BasketBase $basket)
    {
    }
}