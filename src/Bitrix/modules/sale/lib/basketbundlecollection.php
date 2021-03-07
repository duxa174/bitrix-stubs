<?php

namespace Bitrix\Sale;

class BasketBundleCollection extends \Bitrix\Sale\Basket
{
    /** @var null|BasketItem */
    protected $parentBasketItem = null;
    /**
     * @param BasketItem $basketItem
     */
    public function setParentBasketItem(\Bitrix\Sale\BasketItem $basketItem)
    {
    }
    /**
     * @return BasketItem|null
     */
    public function getParentBasketItem()
    {
    }
    /**
     * @return Basket
     */
    protected static function createBasketObject()
    {
    }
}