<?php

namespace Bitrix\Sale\Exchange\OneC;

/**
 * Class ConverterDocumentPayment
 * @package Bitrix\Sale\Exchange\OneC
 * @deprecated
 */
class ConverterDocumentPayment extends \Bitrix\Sale\Exchange\OneC\Converter
{
    /**
     * @return array
     */
    protected function getFieldsInfo()
    {
    }
    /**
     * @param $documentImport
     * @return array
     * @throws ArgumentException
     */
    public function resolveParams($documentImport)
    {
    }
    /**
     * @param $fields
     * @return int
     */
    public function getPaySystemId($fields)
    {
    }
    /**
     * @param Payment|null $payment
     * @param array $fields
     */
    public static function sanitizeFields($payment = null, array &$fields, \Bitrix\Sale\Exchange\ISettings $settings)
    {
    }
    public function externalize(array $fields)
    {
    }
    /**
     * @param $fields
     * @param array $fieldsInfo
     * @return array
     */
    protected function externalizeCashBoxChecksFields($fields, array $fieldsInfo)
    {
    }
}