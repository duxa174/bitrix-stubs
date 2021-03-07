<?php

namespace Sale\Handlers\PaySystem;

class AuthorizeHandler extends \Bitrix\Sale\PaySystem\BaseServiceHandler
{
    /**
     * @param Payment $payment
     * @param Request|null $request
     * @return ServiceResult
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
     * @return array
     */
    protected function getUrlList()
    {
    }
}