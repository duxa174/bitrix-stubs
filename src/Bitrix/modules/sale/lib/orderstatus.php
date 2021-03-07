<?php

namespace Bitrix\Sale;

/**
 * Class OrderStatus
 * @package Bitrix\Sale
 */
class OrderStatus extends \Bitrix\Sale\StatusBase
{
    const TYPE = 'O';
    /**
     * @return array
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    public static function getDisallowPayStatusList()
    {
    }
    /**
     * @return array
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    public static function getAllowPayStatusList()
    {
    }
    /**
     * @param $statusId
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    public static function isAllowPay($statusId)
    {
    }
    /**
     * @return mixed
     */
    public static function getInitialStatus()
    {
    }
    /**
     * @return mixed
     */
    public static function getFinalStatus()
    {
    }
}