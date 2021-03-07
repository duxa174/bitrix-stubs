<?php

namespace Sale\Handlers\PaySystem;

class AlfaBankB2BHandler extends \Bitrix\Sale\PaySystem\BaseServiceHandler implements \Bitrix\Sale\PaySystem\IRequested
{
    /**
     * @param Sale\Payment $payment
     * @param Main\Request|null $request
     * @return PaySystem\ServiceResult
     */
    public function initiatePay(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null)
    {
    }
    /**
     * @param $data
     * @return string
     */
    private function createRequest($data)
    {
    }
    /**
     * @param array $data
     * @return bool
     */
    private function verifySign(array $data)
    {
    }
    /**
     * @param $data
     * @return string
     */
    private function getHash($data)
    {
    }
    /**
     * @param $url
     * @param $action
     * @param $data
     * @return ServiceResult
     */
    private function sendRequest($url, $action, $data)
    {
    }
    /**
     * @param $data
     * @return false|string
     */
    private function sign($data)
    {
    }
    /**
     * @return string
     */
    private function getCert()
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
    protected function getUrlList()
    {
    }
    /**
     * @param Main\Request $request
     * @return ServiceResult
     */
    public function createMovementListRequest(\Bitrix\Main\Request $request)
    {
    }
    /**
     * @param $requestId
     * @return ServiceResult
     */
    public function getMovementListStatus($requestId = null)
    {
    }
    /**
     * @param $requestId
     * @return ServiceResult
     */
    public function getMovementList($requestId = null)
    {
    }
    /**
     * @param $data
     * @return mixed
     */
    private function convertToUtf8($data)
    {
    }
    /**
     * @return bool
     */
    public function isTuned()
    {
    }
    /**
     * @param Payment $payment
     * @param $code
     * @return mixed
     */
    protected function getBusinessValue(\Bitrix\Sale\Payment $payment = null, $code)
    {
    }
    /**
     * @param Payment $payment
     * @return bool
     */
    protected function isTestMode(\Bitrix\Sale\Payment $payment = null)
    {
    }
}