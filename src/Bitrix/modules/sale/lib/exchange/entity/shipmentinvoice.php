<?php

namespace Bitrix\Sale\Exchange\Entity;

class ShipmentInvoice extends \Bitrix\Sale\Exchange\Entity\ShipmentImport
{
    public function getOwnerTypeId()
    {
    }
    /**
     * @param $order
     * @param $entity
     * @param $result
     */
    protected function addMarker($invoice, $entity, $result)
    {
    }
    /**
     * @param array $fields
     * @return Order|null
     */
    protected function loadParentEntity(array $fields)
    {
    }
    /**
     * @param Entity $shipment
     * @return int
     * @throws ArgumentException
     */
    public static function resolveEntityTypeId(\Bitrix\Sale\Internals\Entity $shipment)
    {
    }
    /**
     * @param BasketBase $basket
     * @param array $item
     * @return \Bitrix\Sale\BasketItem|bool
     */
    protected function getBasketItemByItem(\Bitrix\Sale\BasketBase $basket, array $item)
    {
    }
    /**
     * @param BasketItem $basket
     * @return array
     */
    protected function getAttributesItem(\Bitrix\Sale\BasketItem $basket)
    {
    }
}