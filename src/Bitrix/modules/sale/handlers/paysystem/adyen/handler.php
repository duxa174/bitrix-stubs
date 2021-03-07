<?php

namespace Sale\Handlers\PaySystem;

/**
 * Class AdyenHandler
 * @package Sale\Handlers\PaySystem
 */
class AdyenHandler extends \Bitrix\Sale\PaySystem\ServiceHandler implements \Bitrix\Sale\PaySystem\IRefundExtended, \Bitrix\Sale\PaySystem\Domain\Verification\IVerificationable
{
    private const APPLE_PAY_INITIATIVE_CONTEXT = '/bitrix/tools/sale/applepay_gateway.php';
    /** @var string version of Payment Service API */
    private const PAYMENT_API_VERSION = "v51";
    /** @var string version of Checkout Service API */
    private const CHECKOUT_API_VERSION = "v51";
    /** @var string field informs you of the outcome of a payment request */
    private const EVENT_CODE_AUTHORISATION = "AUTHORISATION";
    private const HTTP_RESPONSE_CODE_OK = 200;
    private const RESULT_CODE_AUTHORISED = "Authorised";
    private const RESULT_CODE_ERROR = "Error";
    private const RESULT_CODE_REFUSED = "Refused";
    private const RESPONSE_REFUND_RECEIVED = "[refund-received]";
    private const NOTIFICATION_RESPONSE_ACCEPTED = "[accepted]";
    private const MAX_REQUEST_ATTEMPT = 3;
    public const PAYMENT_METHOD_APPLE_PAY = "apple_pay";
    /**
     * @param Payment $payment
     * @param Request|null $request
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    public function initiatePay(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null) : \Bitrix\Sale\PaySystem\ServiceResult
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
    private function initiatePayInternal(\Bitrix\Sale\Payment $payment) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * Checks whether component implements selected action.
     *
     * @param $action
     * @return bool
     */
    private function isActionExists($action) : bool
    {
    }
    /**
     * @return array
     */
    public static function getHandlerModeList() : array
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
     * @return array|bool
     */
    private static function getNotificationItem()
    {
    }
    /**
     * @return array
     */
    public function getCurrencyList() : array
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    public function processRequest(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param $notificationItem
     * @param $secretKey
     * @return bool
     */
    private function isSignatureCorrect($notificationItem, $secretKey) : bool
    {
    }
    /**
     * @param $notificationItem
     * @return string
     */
    private function getDataToSign($notificationItem) : string
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
     * @return mixed
     */
    public function getPaymentIdFromRequest(\Bitrix\Main\Request $request)
    {
    }
    /**
     * @param Payment $payment
     * @param string $channel
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function getPaymentMethods(\Bitrix\Sale\Payment $payment, string $channel) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return PaySystem\ServiceResult
     * @noinspection PhpUnused
     */
    private function getApplePayWebSessionAction(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     * @noinspection PhpUnused
     */
    public function makePaymentAction(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     * @noinspection PhpUnusedPrivateMethodInspection
     */
    private function getIMessagePaymentAction(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Request $request
     * @return array
     */
    private function getRequestPaymentMethod(\Bitrix\Main\Request $request) : array
    {
    }
    /**
     * @param Payment|null $payment
     * @param string $action
     * @return mixed|string
     */
    protected function getUrl(\Bitrix\Sale\Payment $payment = null, $action)
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
     * @param Payment $payment
     * @return array
     */
    private function getHeaders(\Bitrix\Sale\Payment $payment) : array
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
     * @param $refundableSum
     * @return PaySystem\ServiceResult
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
     * @param $url
     * @param array $params
     * @param array $headers
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function send($url, array $params, array $headers = array()) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @return bool
     */
    public function isRefundableExtended() : bool
    {
    }
    /**
     * @param Payment $payment
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function getModeParams(\Bitrix\Sale\Payment $payment) : array
    {
    }
    /**
     * @param Payment $payment
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    private function getApplePayParams(\Bitrix\Sale\Payment $payment) : array
    {
    }
    /**
     * @param Payment $payment
     * @return array
     * @throws Main\ArgumentNullException
     */
    private function getAmount(\Bitrix\Sale\Payment $payment) : array
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
    /**
     * @param PaySystem\ServiceResult $result
     * @param Request $request
     * @return mixed|void
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    public function sendResponse(\Bitrix\Sale\PaySystem\ServiceResult $result, \Bitrix\Main\Request $request)
    {
    }
    /**
     * @inheritDoc
     */
    public static function getModeList() : array
    {
    }
}