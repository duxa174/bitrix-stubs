<?php

namespace Bitrix\Sale\Helpers\Order\Builder;

interface IOrderBuilderDelegate
{
    /**
     * IOrderBuilderDelegate constructor.
     * @param OrderBuilder $builder
     */
    public function __construct(\Bitrix\Sale\Helpers\Order\Builder\OrderBuilder $builder);
    /**
     * @param array $data
     * @return mixed
     */
    public function createOrder(array $data);
    /**
     * @return mixed
     */
    public function setUser();
    /**
     * @return mixed
     */
    public function buildBasket();
    /**
     * @param Shipment $shipment
     * @param array $fields
     * @return mixed
     */
    public function setShipmentPriceFields(\Bitrix\Sale\Shipment $shipment, array $fields);
    /**
     * @param int $orderPropsCountBefore
     * @param Order $order
     */
    public function recalculateDeliveryPrice(int $orderPropsCountBefore, \Bitrix\Sale\Order $order);
}