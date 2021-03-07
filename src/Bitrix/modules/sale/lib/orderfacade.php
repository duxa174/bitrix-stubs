<?php

namespace Bitrix\Sale;

/**
 * Class OrderFacade
 * @package Bitrix\Sale
 */
class OrderFacade
{
    /**
     * @param $id
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectNotFoundException
     * @throws \Bitrix\Main\SystemException
     */
    public static function payOrder($id)
    {
    }
    /**
     * @param $id
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ObjectNotFoundException
     */
    public static function cancelPayOrder($id)
    {
    }
    /**
     * @param $id
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\NotSupportedException
     * @throws \Bitrix\Main\ObjectNotFoundException
     * @throws \Bitrix\Main\SystemException
     */
    public static function deductOrder($id)
    {
    }
    /**
     * @param $id
     * @return Result
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\NotSupportedException
     * @throws \Bitrix\Main\SystemException
     */
    public static function cancelDeductOrder($id)
    {
    }
    /**
     * @param Order $order
     * @return Payment|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectNotFoundException
     * @throws \Bitrix\Main\SystemException
     */
    protected static function createFinalPayment(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param Order $order
     * @return Shipment
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ArgumentTypeException
     * @throws \Bitrix\Main\NotSupportedException
     * @throws \Bitrix\Main\ObjectNotFoundException
     * @throws \Bitrix\Main\SystemException
     */
    protected static function createFinalShipment(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param Payment $payment
     * @return array|int
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    protected static function getPaySystemId(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @return int
     * @throws \Bitrix\Main\SystemException
     */
    protected static function getDeliveryId()
    {
    }
}