<?php

namespace Sale\Handlers\PaySystem;

class SberbankHandler extends \Bitrix\Sale\PaySystem\BaseServiceHandler
{
    /**
     * @param Sale\Payment $payment
     * @param Request|null $request
     * @return PaySystem\ServiceResult
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
}