<?php

namespace Bitrix\Sale\Helpers\Order\Builder;

class BasketBuilderNew implements \Bitrix\Sale\Helpers\Order\Builder\IBasketBuilderDelegate
{
    protected $builder = null;
    public function __construct(\Bitrix\Sale\Helpers\Order\Builder\BasketBuilder $builder)
    {
    }
    public function getItemFromBasket($basketCode, $productData)
    {
    }
    /**
     * @param string $basketCode
     * @param array $productData
     * @param BasketItem $item
     */
    public function setItemData($basketCode, &$productData, &$item)
    {
    }
    public function finalActions()
    {
    }
}