<?php

namespace Bitrix\Sale\Exchange\Entity\SubordinateSale;

class Order extends \Bitrix\Sale\Exchange\Entity\OrderImport
{
    /**
     * @param \Bitrix\Sale\BasketBase $basket
     * @param array $item
     * @return \Bitrix\Sale\BasketItem|bool
     *
     * ��� ����� ����������� ����������, ��� �������� ������ ������ �� 1� �������� � ������� �� �����������.
     * �������� ���������� ������ �� ��������������
     */
    public static function getBasketItemByItem(\Bitrix\Sale\BasketBase $basket, array $item)
    {
    }
    /**
     * @param $typeId
     * @return \Bitrix\Sale\Exchange\ImportBase
     * @internal
     */
    protected function entityCreateByFactory($typeId)
    {
    }
}