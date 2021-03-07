<?php

namespace Bitrix\Sale\Helpers\Order\Builder;

final class OrderBuilderNew implements \Bitrix\Sale\Helpers\Order\Builder\IOrderBuilderDelegate
{
    protected $builder = null;
    /** @var array */
    protected $deliveryCalculationErrors = [];
    public function __construct(\Bitrix\Sale\Helpers\Order\Builder\OrderBuilder $builder)
    {
    }
    public function createOrder(array $data)
    {
    }
    public function buildBasket()
    {
    }
    public function setUser()
    {
    }
    public function setShipmentPriceFields(\Bitrix\Sale\Shipment $shipment, array $fields)
    {
    }
    /**
     * @inheritdoc
     */
    public function recalculateDeliveryPrice(int $orderPropsCountBefore, \Bitrix\Sale\Order $order)
    {
    }
}