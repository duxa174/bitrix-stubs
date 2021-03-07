<?php

namespace Bitrix\Sale\Delivery\Services\Crm;

/**
 * Interface ICrmActivityProvider
 * @package Bitrix\Crm\Order\Shipment
 * @internal
 */
interface ICrmActivityProvider
{
    /**
     * @param Shipment $shipment
     * @return Activity
     */
    public function provideCrmActivity(\Bitrix\Crm\Order\Shipment $shipment) : \Bitrix\Sale\Delivery\Services\Crm\Activity;
}