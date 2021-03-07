<?php

namespace Bitrix\Sale\PaySystem;

/**
 * Class CompatibilityHandler
 * @package Bitrix\Sale\PaySystem
 */
class CompatibilityHandler extends \Bitrix\Sale\PaySystem\ServiceHandler implements \Bitrix\Sale\PaySystem\ICheckable
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function getPaymentIdFromRequest(\Bitrix\Main\Request $request)
    {
    }
    /**
     * @param Payment $payment
     * @return mixed
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
     * @param Request|null $request
     * @return ServiceResult
     */
    public function initiatePay(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null)
    {
    }
    /**
     * @param Payment|null $payment
     * @param string $template
     * @return ServiceResult
     */
    public function showTemplate(\Bitrix\Sale\Payment $payment = null, $template = '')
    {
    }
    /**
     * @param Payment $payment
     * @return mixed
     */
    public function getParamsBusValue(\Bitrix\Sale\Payment $payment = null)
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return string
     */
    public function processRequest(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request)
    {
    }
    /**
     * @param $file
     * @return string
     */
    private function includeFile($file)
    {
    }
    /**
     * @param Request $request
     * @return mixed
     */
    public function getEntityIds(\Bitrix\Main\Request $request)
    {
    }
    /**
     * @return array
     */
    public function getCurrencyList()
    {
    }
    public function getPrice(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @return bool
     */
    public function isPayableCompatibility()
    {
    }
    /**
     * @return bool
     */
    public function isCheckableCompatibility()
    {
    }
    /**
     * @param Payment $payment
     * @return string|boolean
     */
    public function check(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @return array
     */
    public function getDescription()
    {
    }
    /**
     * @param array $arPSCorrespondence
     * @return array
     */
    private function convertCodesToNewFormat(array $arPSCorrespondence)
    {
    }
    /**
     * @return array
     */
    public function getDemoParams()
    {
    }
}