<?php

namespace Sale\Handlers\PaySystem;

/**
 * Class BePaidHandler
 * @package Sale\Handlers\PaySystem
 */
class BePaidHandler extends \Bitrix\Sale\PaySystem\ServiceHandler implements \Bitrix\Sale\PaySystem\IRefund
{
    private const MODE_CHECKOUT = 'checkout';
    private const MODE_WIDGET = 'widget';
    private const CHECKOUT_API_URL = 'https://checkout.bepaid.by';
    private const GATEWAY_API_URL = 'https://gateway.bepaid.by';
    private const API_VERSION = '2.1';
    private const TRACKING_ID_DELIMITER = '#';
    private const STATUS_SUCCESSFUL_CODE = 'successful';
    private const STATUS_ERROR_CODE = 'error';
    private const SEND_METHOD_HTTP_POST = "POST";
    private const SEND_METHOD_HTTP_GET = "GET";
    /**
     * @return array
     */
    public static function getHandlerModeList() : array
    {
    }
    /**
     * @param Payment $payment
     * @param Request|null $request
     * @return ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function initiatePay(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @return string
     */
    private function getTemplateName() : string
    {
    }
    /**
     * @param Payment $payment
     * @param array $paymentTokenData
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getTemplateParams(\Bitrix\Sale\Payment $payment, array $paymentTokenData) : array
    {
    }
    /**
     * @param Payment $payment
     * @return ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function createPaymentToken(\Bitrix\Sale\Payment $payment) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @return ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function getBePaidPayment(\Bitrix\Sale\Payment $payment) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @param $refundableSum
     * @return ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    public function refund(\Bitrix\Sale\Payment $payment, $refundableSum) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param string $method
     * @param string $url
     * @param array $params
     * @param array $headers
     * @return ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function send(string $method, string $url, array $params = [], array $headers = []) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param array $response
     * @return ServiceResult
     */
    private function verifyResponse(array $response) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @return array|string[]
     */
    public function getCurrencyList() : array
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    public function processRequest(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @param $sum
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function isSumCorrect(\Bitrix\Sale\Payment $payment, $sum) : bool
    {
    }
    /**
     * @param Request $request
     * @param int $paySystemId
     * @return bool
     */
    public static function isMyResponse(\Bitrix\Main\Request $request, $paySystemId) : bool
    {
    }
    /**
     * @param Request $request
     * @return bool|int|mixed
     */
    public function getPaymentIdFromRequest(\Bitrix\Main\Request $request)
    {
    }
    /**
     * @param Payment $payment
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getPaymentDescription(\Bitrix\Sale\Payment $payment)
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
    private function getDeclineUrl(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @return mixed|string
     */
    private function getFailUrl(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @return mixed|string
     */
    private function getCancelUrl(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @return array
     */
    private function getHeaders(\Bitrix\Sale\Payment $payment) : array
    {
    }
    /**
     * @param Payment $payment
     * @return string
     */
    private function getBasicAuthString(\Bitrix\Sale\Payment $payment) : string
    {
    }
    /**
     * @return bool
     */
    private function isWidgetMode() : bool
    {
    }
    /**
     * @return bool
     */
    private function isCheckoutMode() : bool
    {
    }
    /**
     * @return string
     */
    private function getIdempotenceKey() : string
    {
    }
    /**
     * @param Payment $payment
     * @param string $action
     * @return string
     */
    protected function getUrl(\Bitrix\Sale\Payment $payment = null, $action) : string
    {
    }
    /**
     * @return array
     */
    protected function getUrlList() : array
    {
    }
    /**
     * @param Payment $payment
     * @return bool
     */
    protected function isTestMode(\Bitrix\Sale\Payment $payment = null) : bool
    {
    }
    /**
     * @return bool|string
     */
    private static function readFromStream()
    {
    }
    /**
     * @param array $data
     * @return mixed
     * @throws Main\ArgumentException
     */
    private static function encode(array $data)
    {
    }
    /**
     * @param string $data
     * @return mixed
     */
    private static function decode($data)
    {
    }
}