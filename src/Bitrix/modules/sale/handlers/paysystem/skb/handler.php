<?php

namespace Sale\Handlers\PaySystem;

/**
 * Class SkbHandler
 * @package Sale\Handlers\PaySystem
 */
class SkbHandler extends \Bitrix\Sale\PaySystem\ServiceHandler implements \Bitrix\Sale\PaySystem\IRefund
{
    private const MODE_SKB = 'skb';
    private const MODE_DELOBANK = 'delobank';
    private const MODE_GAZENERGOBANK = 'gazenergobank';
    private const RESPONSE_CODE_SUCCESS = ['0', 'RQ00000'];
    private const HTTP_CODE_OK = 200;
    private const HTTP_CODE_LOCKED = 423;
    private const PAYMENT_STATUS_ACCEPTED = 'ACWP';
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
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function changeUserPassword(\Bitrix\Sale\Payment $payment) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @param string $password
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function updatePassword(\Bitrix\Sale\Payment $payment, string $password) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
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
    private function createPayment(\Bitrix\Sale\Payment $payment) : \Bitrix\Sale\PaySystem\ServiceResult
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
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function getSkbPaymentStatus(\Bitrix\Sale\Payment $payment) : \Bitrix\Sale\PaySystem\ServiceResult
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
    public static function getIndicativeFields() : array
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
     * @param $secretKey
     * @return bool
     */
    protected function isSignCorrect(\Bitrix\Main\Request $request, $secretKey) : bool
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
     * @param Payment $payment
     * @param $refundableSum
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function checkRefundTransfer(\Bitrix\Sale\Payment $payment, $refundableSum) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @param string $corelationId
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function approveRefundTransfer(\Bitrix\Sale\Payment $payment, string $corelationId) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment $payment
     * @param $action
     * @param array $params
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ArgumentTypeException
     * @throws Main\ObjectException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    private function send(\Bitrix\Sale\Payment $payment, $action, array $params = []) : \Bitrix\Sale\PaySystem\ServiceResult
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
    private function makeQuery($url, array $params = [], array $headers = []) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param $response
     * @return PaySystem\ServiceResult
     */
    private function verifyResponse($response) : \Bitrix\Sale\PaySystem\ServiceResult
    {
    }
    /**
     * @param Payment|null $payment
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
     * @param Payment $payment
     * @return mixed
     * @throws Main\ArgumentException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected function getAdditionalInfo(\Bitrix\Sale\Payment $payment)
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
     * @param Payment $payment
     * @return array
     */
    private function getHeaders(\Bitrix\Sale\Payment $payment) : array
    {
    }
    /**
     * @return string
     */
    private static function getMessageId() : string
    {
    }
    /**
     * @return string
     */
    private function getAgentId() : string
    {
    }
    /**
     * @return array
     */
    public static function getHandlerModeList() : array
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