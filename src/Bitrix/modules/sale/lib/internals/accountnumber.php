<?php

namespace Bitrix\Sale\Internals;

/**
 * Class AccountNumberGenerator
 * @package Bitrix\Sale\Internals
 */
class AccountNumberGenerator
{
    const ACCOUNT_NUMBER_SEPARATOR = "/";
    /**
     * @param Sale\OrderBase $order
     * @return mixed
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\SystemException
     */
    public static function generateForOrder(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @param Sale\OrderBase $order
     * @return null|string|int
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private static function generateBySettings(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @param Sale\OrderBase $order
     * @return int|string
     * @throws Main\NotImplementedException
     */
    private static function generateById(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @param Sale\OrderBase $order
     * @return mixed
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    private static function generateCustom(\Bitrix\Sale\OrderBase $order)
    {
    }
    /**
     * @param CollectableEntity $item
     * @return null
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public static function generateForPayment(\Bitrix\Sale\Internals\CollectableEntity $item)
    {
    }
    /**
     * @param CollectableEntity $item
     * @return null
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    public static function generateForShipment(\Bitrix\Sale\Internals\CollectableEntity $item)
    {
    }
    /**
     * @param CollectableEntity $item
     *
     * @return null
     * @throws Main\NotSupportedException
     * @throws Main\ObjectNotFoundException
     */
    private static function generate(\Bitrix\Sale\Internals\CollectableEntity $item)
    {
    }
    /**
     * Generates next account number according to the scheme selected in the module options
     *
     * @param Sale\OrderBase $order
     * @return null|int|string
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private static function getNextNumber(\Bitrix\Sale\OrderBase $order)
    {
    }
}