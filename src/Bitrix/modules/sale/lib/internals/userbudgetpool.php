<?php

namespace Bitrix\Sale\Internals;

class UserBudgetPool
{
    protected static $userBudgetPool = array();
    protected $items = array();
    const BUDGET_TYPE_ORDER_CANCEL_PART = 'ORDER_CANCEL_PART';
    //
    const BUDGET_TYPE_ORDER_UNPAY = 'ORDER_UNPAY';
    //
    const BUDGET_TYPE_ORDER_PART_RETURN = 'ORDER_PART_RETURN';
    //
    const BUDGET_TYPE_OUT_CHARGE_OFF = 'OUT_CHARGE_OFF';
    //
    const BUDGET_TYPE_EXCESS_SUM_PAID = 'EXCESS_SUM_PAID';
    //
    const BUDGET_TYPE_MANUAL = 'MANUAL';
    //
    const BUDGET_TYPE_ORDER_PAY = 'ORDER_PAY';
    //
    const BUDGET_TYPE_ORDER_PAY_PART = 'ORDER_PAY_PART';
    //
    public function __construct()
    {
    }
    /**
     * @param $sum
     * @param $type
     * @param Sale\Order $order
     * @param Sale\Payment $payment
     */
    public function add($sum, $type, \Bitrix\Sale\Order $order, \Bitrix\Sale\Payment $payment = null)
    {
    }
    /**
     * @return array
     */
    public function get()
    {
    }
    /**
     * @param $index
     * @return bool
     */
    public function delete($index)
    {
    }
    /**
     * @param $key
     * @return UserBudgetPool
     */
    public static function getUserBudgetPool($key)
    {
    }
    /**
     * @param Sale\Order $order
     * @param $value
     * @param $type
     * @param Sale\Payment $payment
     */
    public static function addPoolItem(\Bitrix\Sale\Order $order, $value, $type, \Bitrix\Sale\Payment $payment = null)
    {
    }
    /**
     * @param $userId
     * @return Sale\Result
     */
    public static function onUserBudgetSave($userId)
    {
    }
    /**
     * @param Sale\Order $order
     * @return int
     */
    public static function getUserBudgetTransForOrder(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param Sale\Order $order
     * @return int
     */
    public static function getUserBudgetByOrder(\Bitrix\Sale\Order $order)
    {
    }
    /**
     * @param $userId
     * @param $currency
     * @return float|null
     */
    public static function getUserBudget($userId, $currency)
    {
    }
}