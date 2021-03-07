<?php

namespace Bitrix\Sale\Exchange\Entity\SubordinateSale;

class Shipment extends \Bitrix\Sale\Exchange\Entity\ShipmentImport
{
    /**
     * @param BasketBase $basket
     * @param array $item
     * @return \Bitrix\Sale\BasketItem|bool
     */
    protected function getBasketItemByItem(\Bitrix\Sale\BasketBase $basket, array $item)
    {
    }
}