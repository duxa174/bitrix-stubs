<?php

namespace Bitrix\Sale\Delivery\Services\Taxi;

/**
 * Class Taxi
 * @package Bitrix\Sale\Delivery\Services\Taxi
 * @internal
 */
abstract class Taxi extends \Bitrix\Sale\Delivery\Services\Base implements \Bitrix\Sale\Delivery\Services\Taxi\ITaxiDeliveryService
{
    const TAXI_REQUEST_CREATED_EVENT_CODE = 'OnDeliveryTaxiRequestCreated';
    const TAXI_REQUEST_CANCELLED_EVENT_CODE = 'OnDeliveryTaxiRequestCancelled';
    /**
     * @inheritdoc
     */
    public function createTaxiRequest(\Bitrix\Sale\Shipment $shipment) : \Bitrix\Sale\Delivery\Services\Taxi\CreationRequestResult
    {
    }
    /**
     * @param Shipment $shipment
     * @return CreationExternalRequestResult
     */
    protected abstract function createTaxiExternalRequest(\Bitrix\Sale\Shipment $shipment) : \Bitrix\Sale\Delivery\Services\Taxi\CreationExternalRequestResult;
    /**
     * @inheritdoc
     */
    public function cancelTaxiRequest(int $requestId) : \Bitrix\Sale\Delivery\Services\Taxi\CancellationRequestResult
    {
    }
    /**
     * @param string $externalRequestId
     * @return CancellationRequestResult
     */
    protected abstract function cancelTaxiExternalRequest(string $externalRequestId) : \Bitrix\Sale\Delivery\Services\Taxi\CancellationRequestResult;
}