<?php

namespace Sale\Handlers\PaySystem;

class RoboxchangeHandler extends \Bitrix\Sale\PaySystem\ServiceHandler
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
     * @param Request $request
     * @param $paySystemId
     * @return bool
     */
    protected static function isMyResponseExtended(\Bitrix\Main\Request $request, $paySystemId)
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
     * @param Request $request
     * @return mixed
     */
    public function getPaymentIdFromRequest(\Bitrix\Main\Request $request)
    {
    }
    /**
     * @return mixed
     */
    protected function getUrlList()
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
     * @param Request $request
     * @return PaySystem\ServiceResult
     */
    private function processNoticeAction(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request)
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
    public function getCurrencyList()
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
     * @return array
     */
    public static function getHandlerModeList()
    {
    }
}