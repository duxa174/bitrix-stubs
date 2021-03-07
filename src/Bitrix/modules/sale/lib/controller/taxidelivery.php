<?php

namespace Bitrix\Sale\Controller;

/**
 * Class TaxiDelivery
 * @package Bitrix\Sale\Controller
 */
class TaxiDelivery extends \Bitrix\Main\Engine\Controller
{
    /**
     * @param int $shipmentId
     * @return array|null
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\SystemException
     */
    public function sendRequestAction(int $shipmentId)
    {
    }
    /**
     * @param int $shipmentId
     * @param int $requestId
     * @return array|null
     */
    public function cancelRequestAction(int $shipmentId, int $requestId)
    {
    }
    /**
     * @param int $shipmentId
     * @return Shipment|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function getShipmentById(int $shipmentId)
    {
    }
}