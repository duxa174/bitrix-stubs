<?php

namespace Bitrix\Sale\Helpers\Order\Builder;

/**
 * Class BasketBuilderRest
 * @package Bitrix\Sale\Helpers\Order\Builder
 * @internal
 */
final class BasketBuilderRest extends \Bitrix\Sale\Helpers\Order\Builder\BasketBuilder
{
    protected function getDelegate($orderId)
    {
    }
    public static function isBasketItemNew($basketCode)
    {
    }
    // переопределяем родительский метод,
    // как временное решение т.к. в админке не поддерживается работа с корзиной в которой одинаковый товар
    protected function getExistsItem($moduleId, $productId, array $properties = array())
    {
    }
    public function preliminaryDataPreparation()
    {
    }
    public function itemsDataPreparation()
    {
    }
    public function basketCodeMap()
    {
    }
    public function setItemsFields()
    {
    }
    public function finalActions()
    {
    }
}