<?php

namespace Sale\Handlers\PaySystem;

/**
 * Class BillHandler
 * @package Sale\Handlers\PaySystem
 */
class BillHandler extends \Bitrix\Sale\PaySystem\BaseServiceHandler implements \Bitrix\Sale\PaySystem\IPdf
{
    /**
     * @param Sale\Payment $payment
     * @param Request|null $request
     * @return PaySystem\ServiceResult
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\NotImplementedException
     */
    public function initiatePay(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null)
    {
    }
    /**
     * @param Sale\Payment|null $payment
     * @param string $template
     * @return PaySystem\ServiceResult
     */
    public function showTemplate(\Bitrix\Sale\Payment $payment = null, $template = '')
    {
    }
    /**
     * @param Sale\Payment $payment
     * @param Request|null $request
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\NotImplementedException
     */
    protected function getPreparedParams(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null)
    {
    }
    /**
     * @return array
     */
    public function getCurrencyList()
    {
    }
    /**
     * @return bool
     */
    public function isAffordPdf()
    {
    }
    /**
     * @return array
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectException
     */
    public function getDemoParams()
    {
    }
    /**
     * @param Payment $payment
     * @return mixed|string
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\NotImplementedException
     */
    public function getContent(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @return array|bool|false|mixed|null
     * @throws \Bitrix\Main\ObjectException
     */
    public function getFile(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @return mixed
     */
    public function isGenerated(\Bitrix\Sale\Payment $payment)
    {
    }
}