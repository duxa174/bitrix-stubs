<?php

namespace Sale\Handlers\PaySystem;

/**
 * Class PayMasterHandler
 * @package Sale\Handlers\PaySystem
 */
class PayMasterHandler extends \Sale\Handlers\PaySystem\WebMoneyHandler
{
    /**
     * @param Payment $payment
     * @param Request|null $request
     * @return PaySystem\ServiceResult
     */
    public function initiatePay(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null)
    {
    }
    /**
     * @return array
     */
    public static function getIndicativeFields()
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return PaySystem\ServiceResult
     */
    public function processRequest(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request)
    {
    }
    /**
     * @return array
     */
    protected function getUrlList()
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return bool
     */
    protected function checkHash(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request)
    {
    }
    /**
     * @param PaySystem\ServiceResult $result
     * @param Request $request
     * @return mixed
     */
    public function sendResponse(\Bitrix\Sale\PaySystem\ServiceResult $result, \Bitrix\Main\Request $request)
    {
    }
    /**
     * @param Payment $payment
     * @return mixed|string
     */
    private function getSuccessUrl(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @return mixed|string
     */
    private function getFailUrl(\Bitrix\Sale\Payment $payment)
    {
    }
}