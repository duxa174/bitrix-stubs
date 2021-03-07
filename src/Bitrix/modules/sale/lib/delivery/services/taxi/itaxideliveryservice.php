<?php

namespace Bitrix\Sale\Delivery\Services\Taxi;

/**
 * Interface ITaxiDeliveryService
 * @package Bitrix\Sale\Delivery\Services\Taxi
 * @internal
 */
interface ITaxiDeliveryService
{
    /**
     * @param Shipment $shipment
     * @return CreationRequestResult
     */
    public function createTaxiRequest(\Bitrix\Sale\Shipment $shipment) : \Bitrix\Sale\Delivery\Services\Taxi\CreationRequestResult;
    /**
     * @param int $requestId
     * @return CancellationRequestResult
     */
    public function cancelTaxiRequest(int $requestId) : \Bitrix\Sale\Delivery\Services\Taxi\CancellationRequestResult;
}