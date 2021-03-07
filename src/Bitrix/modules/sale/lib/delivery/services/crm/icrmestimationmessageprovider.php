<?php

namespace Bitrix\Sale\Delivery\Services\Crm;

/**
 * Interface ICrmEstimationMessageProvider
 * @package Bitrix\Crm\Order\Shipment
 * @internal
 */
interface ICrmEstimationMessageProvider
{
    /**
     * @param Shipment $shipment
     * @return EstimationMessage
     */
    public function provideCrmEstimationMessage(\Bitrix\Crm\Order\Shipment $shipment) : \Bitrix\Sale\Delivery\Services\Crm\EstimationMessage;
}