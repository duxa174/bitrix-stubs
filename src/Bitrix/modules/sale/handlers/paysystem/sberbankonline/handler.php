<?php

namespace Sale\Handlers\PaySystem;

/**
 * Class SberbankOnlineHandler
 * @package Sale\Handlers\PaySystem
 */
class SberbankOnlineHandler extends \Bitrix\Sale\PaySystem\ServiceHandler implements \Bitrix\Sale\PaySystem\IRefund
{
    const PAYMENT_OPERATION_DEPOSITED = 'deposited';
    const PAYMENT_STATUS_SUCCESS = 1;
    const PAYMENT_STATUS_FAIL = 0;
    const RESPONSE_CODE_SUCCESS = 0;
    const PAYMENT_STATE_CREATED = 'CREATED';
    const PAYMENT_DELIMITER = '_';
    /**
     * @param Payment $payment
     * @param Request|null $request
     * @return ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     */
    public function initiatePay(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null)
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
    private function checkOrder(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @param $orderAttemptNumber
     * @return ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     */
    private function createOrder(\Bitrix\Sale\Payment $payment, $orderAttemptNumber)
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
     * @return ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     */
    public function processRequest(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request)
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
     * @param Request $request
     * @param $secretKey
     * @return bool
     */
    protected function isCheckSumCorrect(\Bitrix\Main\Request $request, $secretKey)
    {
    }
    /**
     * @param Payment $payment
     * @param int $attempt
     * @return ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     */
    protected function registerOrder(\Bitrix\Sale\Payment $payment, $attempt = 0)
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
    protected function getOrderStatus(\Bitrix\Sale\Payment $payment)
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
    public function refund(\Bitrix\Sale\Payment $payment, $refundableSum)
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
    private function send($url, array $params = array(), array $headers = array())
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
     * @return mixed
     */
    protected function getUrlList()
    {
    }
    /**
     * @param Payment $payment
     * @return array
     */
    protected function getMerchantParams(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @param int $attempt
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    protected function getRegisterOrderParams(\Bitrix\Sale\Payment $payment, $attempt)
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
    /**
     * @param Payment $payment
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     */
    protected function getOrderDescription(\Bitrix\Sale\Payment $payment)
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