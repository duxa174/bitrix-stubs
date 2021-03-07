<?php

namespace Bitrix\Sale\Internals;

class PaySystemInner
{
    const OPERATION_DEBIT = 0;
    //from account
    const OPERATION_CREDIT = 1;
    //to account
    const OPERATION_RETURN = 2;
    //to account (return)
    const ACTION_FILE_TEXT = 'INNER_BUDGET';
    const CACHE_ID = "BITRIX_SALE_INNER_BUDGET_ID";
    const TTL = 31536000;
    /**
     * @param bool $useCache
     * @return int
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getId($useCache = true)
    {
    }
    /**
     * @param Order $order
     * @param Payment $payment
     * @param $operation
     * @return Result
     * @throws \Exception
     */
    public static function createOperation(\Bitrix\Sale\Order &$order, \Bitrix\Sale\Payment &$payment, $operation)
    {
    }
    /**
     * @return int
     */
    public static function add()
    {
    }
}