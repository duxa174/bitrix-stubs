<?php

namespace Sale\Handlers\PaySystem;

/**
 * Class PayPalHandler
 * @package Sale\Handlers\PaySystem
 */
class PayPalHandler extends \Bitrix\Sale\PaySystem\ServiceHandler implements \Bitrix\Sale\PaySystem\IPrePayable
{
    const DELIMITER_PAYMENT_ID = ':';
    private $prePaymentSetting = array();
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
     * @param Request $request
     * @return mixed
     */
    private static function getRegistryType(\Bitrix\Main\Request $request)
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
     * @param $lines
     * @return PaySystem\ServiceResult
     */
    protected function processSuccessAction(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request, $lines)
    {
    }
    /**
     * @param Request $request
     * @param Payment $payment
     * @return PaySystem\ServiceResult
     */
    protected function processVerifiedAction(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request)
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return string
     */
    protected function getPdtRequest(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request)
    {
    }
    /**
     * @param Request $request
     * @return string
     */
    protected function getIpnRequest(\Bitrix\Main\Request $request)
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
     * @param Request|null $request
     * @return PaySystem\ServiceResult
     */
    public function initiatePay(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null)
    {
    }
    /**
     * @param Payment $payment
     * @return array
     */
    public function getParamsBusValue(\Bitrix\Sale\Payment $payment = null)
    {
    }
    /**
     * @return array
     */
    public function getCurrencyList()
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
     * @return bool
     */
    protected function isTestMode(\Bitrix\Sale\Payment $payment = null)
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
     * @param Request $request
     * @return bool
     */
    public function initPrePayment(\Bitrix\Sale\Payment $payment = null, \Bitrix\Main\Request $request)
    {
    }
    /**
     * @param $data
     * @return array
     */
    protected function parsePrePaymentResult($data)
    {
    }
    /**
     * @return array
     */
    public function getProps()
    {
    }
    /**
     * @param array $orderData
     */
    public function payOrder($orderData = array())
    {
    }
    /**
     * @param array $orderData
     * @return bool|string
     */
    public function BasketButtonAction($orderData = array())
    {
    }
    /**
     * @param array $orderData
     */
    public function setOrderConfig($orderData = array())
    {
    }
    /**
     * @param Payment $payment
     * @return mixed|string
     */
    private function getReturnUrl(\Bitrix\Sale\Payment $payment)
    {
    }
}