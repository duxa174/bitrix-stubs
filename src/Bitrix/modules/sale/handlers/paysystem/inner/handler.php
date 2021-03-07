<?php

namespace Sale\Handlers\PaySystem;

class InnerHandler extends \Bitrix\Sale\PaySystem\BaseServiceHandler implements \Bitrix\Sale\PaySystem\IRefund
{
    /**
     * @param Payment $payment
     * @param Request $request
     * @return PaySystem\ServiceResult
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function initiatePay(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null)
    {
    }
    /**
     * @return array
     */
    public function getCurrencyList()
    {
    }
    /**
     * @param Payment $payment
     * @param int $refundableSum
     * @return PaySystem\ServiceResult
     */
    public function refund(\Bitrix\Sale\Payment $payment, $refundableSum)
    {
    }
    /**
     * @param Payment $payment
     * @return PaySystem\ServiceResult
     */
    public function creditNoDemand(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @return PaySystem\ServiceResult
     */
    public function debitNoDemand(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Order $order
     * @return bool
     */
    private function isUserBudgetLock(\Bitrix\Sale\Order $order)
    {
    }
}