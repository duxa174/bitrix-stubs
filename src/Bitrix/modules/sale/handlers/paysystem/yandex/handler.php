<?php

namespace Sale\Handlers\PaySystem;

/**
 * Class YandexHandler
 * @package Sale\Handlers\PaySystem
 */
class YandexHandler extends \Bitrix\Sale\PaySystem\ServiceHandler implements \Bitrix\Sale\PaySystem\IRefundExtended, \Bitrix\Sale\PaySystem\IHold
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
     * @param int $refundableSum
     * @return PaySystem\ServiceResult
     */
    public function refund(\Bitrix\Sale\Payment $payment, $refundableSum)
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ObjectException
     */
    private function isCorrectHash(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request)
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\ObjectException
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
    private function processCheckAction(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request)
    {
    }
    /**
     * @param Request $request
     * @return array
     */
    private function extractDataFromRequest(\Bitrix\Main\Request $request)
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
     * @param Request $request
     * @return PaySystem\ServiceResult
     */
    private function processCancelAction(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request)
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
     * @return bool
     */
    protected function isTestMode(\Bitrix\Sale\Payment $payment = null)
    {
    }
    /**
     * @param Payment $payment
     * @return PaySystem\ServiceResult
     */
    public function confirm(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @return PaySystem\ServiceResult
     */
    public function cancel(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param $operation
     * @param $requestString
     * @return \CDataXMLNode
     */
    private function parseXmlResponse($operation, $requestString)
    {
    }
    /**
     * @param Payment $payment
     * @param $xml
     * @return PaySystem\ServiceResult
     * @throws \Bitrix\Main\ArgumentNullException
     */
    private function signRequest(\Bitrix\Sale\Payment $payment, $xml)
    {
    }
    /**
     * @param null $data
     * @return mixed
     */
    private static function createTmpFile($data = null)
    {
    }
    /**
     * @return array
     */
    public function getCurrencyList()
    {
    }
    /**
     * @return array
     */
    public static function getHandlerModeList()
    {
    }
    /**
     * @return bool
     */
    public function isRefundableExtended()
    {
    }
    /**
     * @return bool
     */
    public function isTuned()
    {
    }
    /**
     * @param array $paySystemList
     * @return array
     */
    public static function findMyDataRefundablePage(array $paySystemList)
    {
    }
}