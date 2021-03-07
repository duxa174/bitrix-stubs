<?php

namespace Bitrix\Sale\Exchange\Entity;

class PaymentInvoiceBase extends \Bitrix\Sale\Exchange\Entity\PaymentImport
{
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
     * @param string $type
     * @return int
     */
    public static function resolveEntityTypeIdByCodeType($type)
    {
    }
}