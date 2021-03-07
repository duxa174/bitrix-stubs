<?php

namespace Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm;

/**
 * Class BindingsMaker
 * @package Sale\Handlers\Delivery\YandexTaxi\ContextDependent\Crm
 * @internal
 */
final class BindingsMaker
{
    /**
     * @param Shipment $shipment
     * @param string $prefix
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\SystemException
     */
    public function makeByShipment(\Bitrix\Crm\Order\Shipment $shipment, string $prefix = 'ENTITY') : array
    {
    }
    /**
     * @param Shipment $shipment
     * @return |null
     * @throws \Bitrix\Main\ArgumentNullException
     */
    private function getDealId(\Bitrix\Crm\Order\Shipment $shipment)
    {
    }
    /**
     * @param Shipment $shipment
     * @return int|null
     */
    private function getOrderId(\Bitrix\Crm\Order\Shipment $shipment)
    {
    }
}