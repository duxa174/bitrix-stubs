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
    // �������������� ������������ �����,
    // ��� ��������� ������� �.�. � ������� �� �������������� ������ � �������� � ������� ���������� �����
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