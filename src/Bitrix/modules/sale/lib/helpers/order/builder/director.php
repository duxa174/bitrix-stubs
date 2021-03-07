<?php

namespace Bitrix\Sale\Helpers\Order\Builder;

final class Director
{
    public function createOrder(\Bitrix\Sale\Helpers\Order\Builder\OrderBuilder $builder, array $fields)
    {
    }
    /**
     * @param OrderBuilder $builder
     * @param array $shipmentData
     * @return Shipment
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public function getUpdatedShipment(\Bitrix\Sale\Helpers\Order\Builder\OrderBuilder $builder, array $shipmentData)
    {
    }
    /**
     * @param OrderBuilder $builder
     * @param array $shipmentData
     * @return \Bitrix\Sale\Payment
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public function getUpdatedPayment(\Bitrix\Sale\Helpers\Order\Builder\OrderBuilder $builder, array $paymentData)
    {
    }
}