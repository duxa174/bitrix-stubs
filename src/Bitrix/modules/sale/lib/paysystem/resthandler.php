<?php

namespace Bitrix\Sale\PaySystem;

/**
 * Class RestHandler
 * @package Sale\Handlers\PaySystem
 */
class RestHandler extends \Bitrix\Sale\PaySystem\ServiceHandler
{
    private $handlerSettings = array();
    /**
     * @param Payment $payment
     * @param Request|null $request
     * @return ServiceResult
     * @throws \Bitrix\Main\SystemException
     */
    public function initiatePay(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null)
    {
    }
    /**
     * @param Payment $payment
     * @return string
     */
    private function getPaymentUrl(\Bitrix\Sale\Payment $payment) : string
    {
    }
    /**
     * @return bool
     */
    private function isAllowAutoRedirect() : bool
    {
    }
    /**
     * @param Payment $payment
     * @param array $fields
     * @return array
     */
    private function getQueryDataFromFields(\Bitrix\Sale\Payment $payment, array $fields) : array
    {
    }
    /**
     * @param Payment $payment
     * @return string
     * @throws \Bitrix\Main\SystemException
     */
    private function getDefaultTemplate(\Bitrix\Sale\Payment $payment) : string
    {
    }
    /**
     * @param Payment $payment
     * @param array $fields
     * @return string
     * @throws \Bitrix\Main\SystemException
     */
    private function getTemplateFromFields(\Bitrix\Sale\Payment $payment, array $fields) : string
    {
    }
    /**
     * @param Payment $payment
     * @param $value
     * @return string[]
     */
    private function getInputParams(\Bitrix\Sale\Payment $payment, $value) : array
    {
    }
    /**
     * @param string $name
     * @param array $input
     * @return string
     * @throws \Bitrix\Main\SystemException
     */
    private function createInput(string $name, array $input) : string
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
    public function getDescription()
    {
    }
    /**
     * @return array
     */
    private function getHandlerSettings()
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return ServiceResult
     */
    public function processRequest(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request)
    {
    }
    /**
     * @param Request $request
     * @return array
     */
    private function getPsData(\Bitrix\Main\Request $request) : array
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
     * For PARAMS compatibility
     *
     * @param Payment $payment
     * @param array $params
     * @return array
     */
    private function getQueryDataFromParams(\Bitrix\Sale\Payment $payment, array $params) : array
    {
    }
    /**
     * For PARAMS compatibility
     *
     * @param Payment $payment
     * @param array $params
     * @return string
     */
    private function getTemplateFromParams(\Bitrix\Sale\Payment $payment, array $params) : string
    {
    }
}