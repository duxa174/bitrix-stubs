<?php

namespace Bitrix\Sale\Helpers\Order\Builder;

/**
 * Class OrderBuilderExist
 * @package Bitrix\Sale\Helpers\Order\Builder
 * @internal
 */
final class OrderBuilderExist implements \Bitrix\Sale\Helpers\Order\Builder\IOrderBuilderDelegate
{
    /** @var OrderBuilder|null  */
    protected $builder = null;
    /**
     * OrderBuilderExist constructor.
     * @param OrderBuilder $builder
     */
    public function __construct(\Bitrix\Sale\Helpers\Order\Builder\OrderBuilder $builder)
    {
    }
    /**
     * @param array $data Form data.
     * @return Order
     * @throws BuildingException
     * @throws \Bitrix\Main\ArgumentException
     */
    public function createOrder(array $data)
    {
    }
    public function setUser()
    {
    }
    public function buildBasket()
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