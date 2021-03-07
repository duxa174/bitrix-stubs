<?php

namespace Sale\Handlers\PaySystem;

class YandexInvoiceHandler extends \Bitrix\Sale\PaySystem\ServiceHandler
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
    public function getCurrencyList()
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return mixed
     */
    public function processRequest(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request)
    {
    }
    /**
     * @param Payment $payment
     * @param array $payload
     * @return PaySystem\ServiceResult
     */
    private function processNoticeAction(\Bitrix\Sale\Payment $payment, array $payload)
    {
    }
    /**
     * @param Request $request
     * @return string
     */
    public function getPaymentIdFromRequest(\Bitrix\Main\Request $request)
    {
    }
    /**
     * @return array
     */
    protected function getUrlList()
    {
    }
    /**
     * @return array
     */
    public static function getHandlerModeList()
    {
    }
    /**
     * @param Payment $payment
     * @param array $payload
     * @return string
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    private function prepareRequest(\Bitrix\Sale\Payment $payment, array $payload)
    {
    }
    /**
     * @param $data
     * @return mixed
     */
    private static function base64Encode($data)
    {
    }
    /**
     * @param $data
     * @return mixed
     */
    private static function base64Decode($data)
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
     * @param $data
     * @param $sign
     * @return bool
     */
    private function isSignCorrect(\Bitrix\Sale\Payment $payment, $data, $sign)
    {
    }
    /**
     * @param $input
     * @param $keyResource
     * @return null|string
     */
    private function sign($input, $keyResource)
    {
    }
    /**
     * @param $key
     * @return mixed
     */
    private function getKeyResource($key)
    {
    }
    /**
     * @param Payment|null $payment
     * @return bool
     */
    protected function isTestMode(\Bitrix\Sale\Payment $payment = null)
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
     * @return bool
     */
    public function isTuned()
    {
    }
}