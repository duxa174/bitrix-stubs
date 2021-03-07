<?php

namespace Sale\Handlers\PaySystem;

/**
 * Class OrderDocumentHandler
 * @package Sale\Handlers\PaySystem
 */
class OrderDocumentHandler extends \Bitrix\Sale\PaySystem\BaseServiceHandler implements \Bitrix\Sale\PaySystem\IDocumentGeneratePdf
{
    /**
     * @return string
     */
    protected static function getDataProviderClass()
    {
    }
    /**
     * @param Sale\Payment $payment
     * @param Request|null $request
     * @return PaySystem\ServiceResult
     * @throws Main\ArgumentTypeException
     * @throws Main\LoaderException
     */
    public function initiatePay(\Bitrix\Sale\Payment $payment, \Bitrix\Main\Request $request = null)
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
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getHandlerModeList()
    {
    }
    /**
     * @param Payment $payment
     * @param $params
     * @return PaySystem\ServiceResult|mixed
     * @throws Main\ArgumentException
     * @throws Main\ObjectException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function registerCallbackOnGenerate(\Bitrix\Sale\Payment $payment, $params)
    {
    }
    /**
     * @param Payment $payment
     * @return DocumentGenerator\Document|false|null
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    protected function getDocument(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @return string
     * @throws Main\ObjectException
     */
    protected function getFileName(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param $payment
     * @return mixed
     */
    protected function getInvoiceNumber(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @return bool|false|mixed|string|null
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function getContent(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @return array|bool|false|mixed|null
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function getFile(\Bitrix\Sale\Payment $payment)
    {
    }
    /**
     * @param Payment $payment
     * @return bool|mixed
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public function isGenerated(\Bitrix\Sale\Payment $payment)
    {
    }
}