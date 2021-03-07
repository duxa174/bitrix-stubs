<?php

namespace Bitrix\Sale\Helpers\Order\Builder;

class BasketBuilderExist implements \Bitrix\Sale\Helpers\Order\Builder\IBasketBuilderDelegate
{
    /** @var BasketBuilder */
    protected $builder = null;
    public function __construct(\Bitrix\Sale\Helpers\Order\Builder\BasketBuilder $builder)
    {
    }
    public function getItemFromBasket($basketCode, $productData)
    {
    }
    /**
     * @param $basketCode
     * @param BasketItem $item
     * @param array $productData
     */
    public function setItemData($basketCode, &$productData, &$item)
    {
    }
    public function finalActions()
    {
    }
}