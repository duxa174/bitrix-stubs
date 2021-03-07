<?php

namespace Bitrix\Sale\TradingPlatform\YMarket;

class Order
{
    /**
     * @param array $params
     * @return Result
     * @throws ArgumentNullException
     * @throws \Bitrix\Main\NotSupportedException
     * @throws \Bitrix\Main\ObjectNotFoundException
     */
    public static function create(array $params)
    {
    }
    public static function createShipment(\Bitrix\Sale\Order &$order, $deliveryId = 0, $deliveryPrice = false)
    {
    }
    public static function createPayment(\Bitrix\Sale\Order &$order, $paySystemId = 0)
    {
    }
}