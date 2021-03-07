<?php

namespace Bitrix\Sale\Internals;

/**
 * Class ShipmentRules
 * @package Bitrix\Sale\Internals
 */
class ShipmentRules
{
    /**
     * ShipmentRules constructor.
     */
    protected function __construct()
    {
    }
    /**
     * @param Sale\Order $order
     * @param PoolQuantity $pool
     *
     * @return array
     */
    public static function createOrderRuleMap(\Bitrix\Sale\Order $order, \Bitrix\Sale\Internals\PoolQuantity $pool)
    {
    }
    /**
     * @param Sale\ShipmentItem $shipmentItem
     * @param PoolQuantity $pool
     *
     * @return array|bool
     * @throws Main\ObjectNotFoundException
     */
    private static function createShipRule(\Bitrix\Sale\ShipmentItem $shipmentItem, \Bitrix\Sale\Internals\PoolQuantity $pool)
    {
    }
    /**
     * @param Sale\ShipmentItem $shipmentItem
     * @param PoolQuantity $pool
     *
     * @return array|bool
     * @throws Main\ObjectNotFoundException
     */
    private static function createReserveRule(\Bitrix\Sale\ShipmentItem $shipmentItem, \Bitrix\Sale\Internals\PoolQuantity $pool)
    {
    }
    /**
     * @param array $rules
     * @param array $context
     *
     * @return Sale\Result
     * @throws Main\ObjectNotFoundException
     */
    public static function saveRules(array $rules, array $context)
    {
    }
}