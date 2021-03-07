<?php

namespace Bitrix\Sale\Exchange\Entity;

class Invoice extends \Bitrix\Sale\Exchange\Entity\OrderImport
{
    /**
     * @return int
     */
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
     * @param array $fileds
     * @return \Bitrix\Sale\Order
     */
    protected function createEntity(array $fileds)
    {
    }
    /**
     * @param array $fields
     * @return Order
     */
    protected function loadParentEntity(array $fields)
    {
    }
    /**
     * @param Entity $order
     * @return int
     * @throws ArgumentException
     */
    public static function resolveEntityTypeId(\Bitrix\Sale\Internals\Entity $order)
    {
    }
    /**
     * @return int
     * @internal
     */
    protected function getShipmentTypeId()
    {
    }
}