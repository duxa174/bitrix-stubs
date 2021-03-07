<?php

namespace Sale\Handlers\PaySystem;

class AssistHandler extends \Bitrix\Sale\PaySystem\ServiceHandler implements \Bitrix\Sale\PaySystem\IRefund, \Bitrix\Sale\PaySystem\ICheckable
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
     * @param int $refundableSum
     * @return PaySystem\ServiceResult
     */
    public function refund(\Bitrix\Sale\Payment $payment, $refundableSum)
    {
    }
    /**
     * @param Payment $payment
     * @param $request
     * @return bool
     */
    private function isCorrectHash(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request)
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return bool
     */
    private function isCorrectSum(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request)
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
     * @param Request $request
     * @return mixed
     */
    public function getPaymentIdFromRequest(\Bitrix\Main\Request $request)
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
     * @param Payment $payment
     * @return bool
     */
    protected function isTestMode(\Bitrix\Sale\Payment $payment = null)
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
     * @param string $action
     * @return string
     */
    protected function getUrl(\Bitrix\Sale\Payment $payment = null, $action)
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
     * @return PaySystem\ServiceResult
     */
    public function check(\Bitrix\Sale\Payment $payment)
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