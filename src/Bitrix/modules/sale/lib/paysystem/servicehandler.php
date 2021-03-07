<?php

namespace Bitrix\Sale\PaySystem;

abstract class ServiceHandler extends \Bitrix\Sale\PaySystem\BaseServiceHandler
{
    /**
     * @return array
     */
    public static function getIndicativeFields()
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
     * @param Request $request
     * @param $paySystemId
     * @return bool
     */
    protected static function isMyResponseExtended(\Bitrix\Main\Request $request, $paySystemId)
    {
    }
    /**
     * @param Payment $payment
     * @param Request $request
     * @return ServiceResult
     */
    public abstract function processRequest(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request);
    /**
     * @param ServiceResult $result
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
    public abstract function getPaymentIdFromRequest(\Bitrix\Main\Request $request);
    /**
     * @param array $paySystemList
     * @return array
     */
    public static function findMyDataRefundablePage(array $paySystemList)
    {
    }
}