<?php

namespace Sale\Handlers\PaySystem;

/**
 * Class YandexCheckout
 * @package Sale\Handlers\PaySystem
 */
class YandexCheckoutHandler extends \Bitrix\Sale\PaySystem\ServiceHandler implements \Bitrix\Sale\PaySystem\IRefund, \Bitrix\Sale\PaySystem\IPartialHold, \Bitrix\Sale\PaySystem\Domain\Verification\IVerificationable, \Bitrix\Sale\PaySystem\IRecurring
{
    const CMS_NAME = 'api_1c-bitrix';
    const PAYMENT_STATUS_WAITING_FOR_CAPTURE = 'waiting_for_capture';
    const PAYMENT_STATUS_SUCCEEDED = 'succeeded';
    const PAYMENT_STATUS_CANCELED = 'canceled';
    const PAYMENT_STATUS_PENDING = 'pending';
    const PAYMENT_METHOD_SMART = '';
    const PAYMENT_METHOD_ALFABANK = 'alfabank';
    const PAYMENT_METHOD_BANK_CARD = 'bank_card';
    const PAYMENT_METHOD_YANDEX_MONEY = 'yandex_money';
    const PAYMENT_METHOD_SBERBANK = 'sberbank';
    const PAYMENT_METHOD_QIWI = 'qiwi';
    const PAYMENT_METHOD_WEBMONEY = 'webmoney';
    const PAYMENT_METHOD_CASH = 'cash';
    const PAYMENT_METHOD_MOBILE_BALANCE = 'mobile_balance';
    const PAYMENT_METHOD_EMBEDDED = 'embedded';
    const PAYMENT_METHOD_TINKOFF_BANK = 'tinkoff_bank';
    const MODE_SMART = '';
    const MODE_ALFABANK = 'alfabank';
    const MODE_BANK_CARD = 'bank_card';
    const MODE_YANDEX_MONEY = 'yandex_money';
    const MODE_SBERBANK = 'sberbank';
    const MODE_SBERBANK_SMS = 'sberbank_sms';
    const MODE_QIWI = 'qiwi';
    const MODE_WEBMONEY = 'webmoney';
    const MODE_CASH = 'cash';
    const MODE_MOBILE_BALANCE = 'mobile_balance';
    const MODE_EMBEDDED = 'embedded';
    const MODE_TINKOFF_BANK = 'tinkoff_bank';
    const URL = 'https://payment.yandex.net/api/v3';
    const AUTH_TYPE = 'yandex';
    private const CALLBACK_IP_LIST = ['185.71.76.0/27', '185.71.77.0/27', '77.75.153.0/25', '77.75.154.128/25'];
    private const CONFIRMATION_TYPE_REDIRECT = "redirect";
    private const CONFIRMATION_TYPE_EXTERNAL = "external";
    private const CONFIRMATION_TYPE_EMBEDDED = "embedded";
    private const SEND_METHOD_HTTP_POST = "POST";
    private const SEND_METHOD_HTTP_GET = "GET";
    /**
     * @param Payment $payment
     * @param Request|null $request
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function initiatePay(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null)
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @param array $additionalParams
     * @return bool
     */
    protected function needCreateYandexPayment(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request, $additionalParams = []) : bool
    {
    }
    /**
     * @param Payment $payment
     * @param $template
     * @param array $additionalParams
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected function getTemplateParams(\Bitrix\Sale\Payment $payment, $template, $additionalParams = []) : array
    {
    }
    /**
     * @param Request $request
     * @param array $additionalParams
     * @return string
     */
    protected function getTemplateName(\Bitrix\Main\Request $request, $additionalParams = []) : string
    {
    }
    /**
     * @return bool
     */
    private function isSetExternalPaymentType() : bool
    {
    }
    /**
     * @return bool
     */
    private function isSetEmbeddedPaymentType() : bool
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @param bool $isRepeated
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws Main\SystemException
     */
    private function createYandexPayment(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request, bool $isRepeated = false) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param $response
     * @return PaySystem\ServiceResult
     */
    private function verifyYandexPayment($response) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @return string
     */
    private function getIdempotenceKey() : string
    {
    }
    /**
     * @param $method
     * @param $url
     * @param array $headers
     * @param array $params
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function send($method, $url, array $headers, array $params = array()) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\SystemException
     */
    private function getYandexBasePaymentQueryParams(\Bitrix\Sale\Payment $payment) : array
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\SystemException
     */
    protected function getYandexPaymentQueryParams(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request)
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\SystemException
     */
    private function getYandexRepeatedPaymentQueryParams(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request) : array
    {
    }
    /**
     * @param Payment $payment
     * @return mixed|string
     */
    private function getReturnUrl(\Bitrix\Sale\Payment $payment)
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
    protected function getPaymentDescription(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
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
     * @param Payment $payment
     * @return string
     */
    private function getBasicAuthString(\Bitrix\Sale\Payment $payment)
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
    /**
     * @return array|string[]
     */
    public function getCurrencyList()
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return PaySystem\ServiceResult
     * @throws Main\ObjectException
     * @throws \Exception
     */
    public function processRequest(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request)
    {
    }
    /**
     * @param Payment $payment
     * @param array $paymentData
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function isSumCorrect(\Bitrix\Sale\Payment $payment, array $paymentData)
    {
    }
    /**
     * @param Payment $payment
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function getYandexPayment(\Bitrix\Sale\Payment $payment) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function getYandexSettings(\Bitrix\Sale\Payment $payment) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function checkYandexSettings(\Bitrix\Sale\Payment $payment) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @param $refundableSum
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentNullException
     * @throws \Exception
     */
    public function refund(\Bitrix\Sale\Payment $payment, $refundableSum)
    {
    }
    /**
     * @param Payment $payment
     * @return PaySystem\ServiceResult
     * @throws \Exception
     */
    public function cancel(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @param int $sum
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    public function confirm(\Bitrix\Sale\Payment $payment, $sum = 0)
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
     * @throws Main\LoaderException
     * @throws Main\SystemException
     */
    private function getAuthorizationHeader(\Bitrix\Sale\Payment $payment) : string
    {
    }
    /**
     * @param $authType
     * @return mixed|null
     * @throws Main\LoaderException
     * @throws Main\SystemException
     */
    private function getYandexToken($authType)
    {
    }
    /**
     * @param Payment $payment
     * @param $refundableSum
     * @return array
     * @throws Main\ArgumentNullException
     */
    private function getRefundQueryParams(\Bitrix\Sale\Payment $payment, $refundableSum)
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
     * @return array
     */
    public static function getHandlerModeList()
    {
    }
    /**
     * @param $psMode
     * @return mixed
     */
    protected function getYandexHandlerType($psMode)
    {
    }
    /**
     * @return array
     */
    protected function getUrlList()
    {
    }
    /**
     * @param Request $request
     * @param int $paySystemId
     * @return bool
     */
    public static function isMyResponse(\Bitrix\Main\Request $request, $paySystemId)
    {
    }
    /**
     * @return bool|string
     */
    private static function readFromStream()
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
    private function getPaymentMethodFields() : array
    {
    }
    /**
     * @param Request $request
     * @return bool
     */
    private function isFillPaymentMethodFields(\Bitrix\Main\Request $request) : bool
    {
    }
    /**
     * @param $field
     * @return bool
     */
    private function isPhone($field) : bool
    {
    }
    /**
     * @return array
     */
    private function getPhoneFields() : array
    {
    }
    /**
     * @param $number
     * @return bool|string|string[]|null
     */
    private function normalizePhone($number)
    {
    }
    /**
     * @return bool
     */
    private function hasPaymentMethodFields() : bool
    {
    }
    /**
     * @inheritDoc
     */
    public static function getModeList() : array
    {
    }
    /**
     * @param Payment $payment
     * @param Request|null $request
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     * @throws Main\SystemException
     */
    public function repeatRecurrent(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @param Request|null $request
     * @return PaySystem\ServiceResult
     */
    public function cancelRecurrent(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @return bool
     */
    public function isRecurring(\Bitrix\Sale\Payment $payment) : bool
    {
    }
    /**
     * @return PaySystem\ServiceResult
     */
    private function checkIpAddress() : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @return bool
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    private static function isOAuth() : bool
    {
    }
}