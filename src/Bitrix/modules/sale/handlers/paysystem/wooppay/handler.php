<?php

namespace Sale\Handlers\PaySystem;

/**
 * Class WooppayHandler
 * @package Sale\Handlers\PaySystem
 */
class WooppayHandler extends \Bitrix\Sale\PaySystem\ServiceHandler implements \Bitrix\Sale\PaySystem\IRefund
{
    private const API_VERSION_V1 = 'v1';
    private const MODE_CHECKOUT = 'checkout';
    private const SEND_METHOD_GET = 'get';
    private const SEND_METHOD_POST = 'post';
    private const HTTP_CODE_OK = 200;
    private const HTTP_CODE_UNAUTHORIZED = 401;
    private const HTTP_CODE_UNPROCESSABLE_ENTITY = 422;
    private const HTTP_CODE_INTERNAL_SERVER_ERROR = 500;
    private const BITRIX_LABEL = 'wp_bitrix';
    private const REQUEST_PAY_SYSTEM_ID_PARAM = 'paySystemId';
    private const REQUEST_PAYMENT_ID_PARAM = 'paymentId';
    private const REQUEST_SOURCE_PARAM = 'source';
    private const HISTORY_STATUS_PAID = 14;
    private const INVOICE_ID_DELIMITER = '#';
    private const REFERENCE_ID_DELIMITER = '_';
    /**
     * @return array
     */
    public static function getHandlerModeList() : array
    {
    }
    /**
     * @return bool
     */
    private function isCheckoutMode() : bool
    {
    }
    /**
     * @param Sale\Payment $payment
     * @param Main\Request|null $request
     * @return Sale\PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function initiatePay(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Sale\Payment $payment
     * @return array
     * @throws Main\ArgumentNullException
     */
    private function getTemplateParams(\Bitrix\Sale\Payment $payment) : array
    {
    }
    /**
     * @return string
     */
    private function getTemplateName() : string
    {
    }
    /**
     * @param Sale\Payment $payment
     * @return Sale\PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function auth(\Bitrix\Sale\Payment $payment) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Sale\Payment $payment
     * @param string $token
     * @return Sale\PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function createInvoice(\Bitrix\Sale\Payment $payment, string $token) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Sale\Payment $payment
     * @return string
     */
    private function getReferenceId(\Bitrix\Sale\Payment $payment) : string
    {
    }
    /**
     * @param Sale\Payment $payment
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected function getPaymentDescription(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Sale\Payment $payment
     * @return string
     */
    private function getRequestUrl(\Bitrix\Sale\Payment $payment) : string
    {
    }
    /**
     * @param Sale\Payment $payment
     * @return mixed|string
     */
    private function getBackUrl(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @todo use business value in future
     *
     * @param Sale\Payment $payment
     * @return string|null
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getPhoneNumber(\Bitrix\Sale\Payment $payment) : ?string
    {
    }
    /**
     * @param $phoneNumber
     * @return string|string[]|null
     */
    private function normalizePhone($phoneNumber)
    {
    }
    /**
     * @param string $method
     * @param string $url
     * @param array $headers
     * @param array $params
     * @return Sale\PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function send(string $method, string $url, array $headers, array $params = []) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param string $response
     * @param int $httpStatus
     * @return Sale\PaySystem\ServiceResult
     */
    private function verifyResponse(string $response, int $httpStatus) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @return string[]
     */
    private function getHeaders() : array
    {
    }
    /**
     * @param Sale\Payment|null $payment
     * @return bool
     */
    protected function isTestMode(\Bitrix\Sale\Payment $payment = null) : bool
    {
    }
    /**
     * @return array
     */
    protected function getUrlList() : array
    {
    }
    /**
     * @param Sale\Payment|null $payment
     * @param string $action
     * @return string
     */
    protected function getUrl(\Bitrix\Sale\Payment $payment = null, $action) : string
    {
    }
    /**
     * @return array|string[]
     */
    public function getCurrencyList() : array
    {
    }
    /**
     * @return array
     */
    public static function getIndicativeFields() : array
    {
    }
    /**
     * @param Sale\Payment $payment
     * @param $refundableSum
     * @return Sale\PaySystem\ServiceResult
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
     * @param string $agent
     * @return bool
     */
    private function isMobileAgent(string $agent) : bool
    {
    }
    /**
     * @param Sale\Payment $payment
     * @param Main\Request $request
     * @return Sale\PaySystem\ServiceResult
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
     * @param Sale\Payment $payment
     * @param string $token
     * @return Sale\PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function getInvoiceHistory(\Bitrix\Sale\Payment $payment, string $token) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Sale\Payment $payment
     * @param string $token
     * @return Sale\PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function getInvoiceHistoryReceipt(\Bitrix\Sale\Payment $payment, string $token) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Sale\Payment $payment
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
     * @param Main\Request $request
     * @return array|mixed|string|null
     */
    public function getPaymentIdFromRequest(\Bitrix\Main\Request $request)
    {
    }
    /**
     * @param Sale\Payment $payment
     * @return string|null
     */
    private function getOperationId(\Bitrix\Sale\Payment $payment) : ?string
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
     * @param $data
     * @return false|mixed
     */
    private static function decode($data)
    {
    }
    /**
     * @param Sale\PaySystem\ServiceResult $result
     * @param Main\Request $request
     * @return mixed|string|void
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    public function sendResponse(\Bitrix\Sale\PaySystem\ServiceResult $result, \Bitrix\Main\Request $request)
    {
    }
}