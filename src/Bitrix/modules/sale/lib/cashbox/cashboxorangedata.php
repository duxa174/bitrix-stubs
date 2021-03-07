<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class CashboxOrangeData
 * @package Bitrix\Sale\Cashbox
 */
class CashboxOrangeData extends \Bitrix\Sale\Cashbox\Cashbox implements \Bitrix\Sale\Cashbox\IPrintImmediately, \Bitrix\Sale\Cashbox\ICheckable, \Bitrix\Sale\Cashbox\ITestConnection
{
    private const PARTNER_CODE_BITRIX = '3010144';
    const RESPONSE_HTTP_CODE_200 = 200;
    const RESPONSE_HTTP_CODE_201 = 201;
    const HANDLER_MODE_TEST = 'TEST';
    const HANDLER_MODE_ACTIVE = 'ACTIVE';
    const HANDLER_TEST_URL = 'ssl://apip.orangedata.ru:2443/api/v2';
    const HANDLER_ACTIVE_URL = 'ssl://api.orangedata.ru:12003/api/v2';
    private $pathToSslCertificate = '';
    private $pathToSslCertificateKey = '';
    const CODE_VAT_0 = 5;
    const CODE_VAT_10 = 2;
    const CODE_VAT_20 = 1;
    const CODE_CALC_VAT_10 = 4;
    const CODE_CALC_VAT_20 = 3;
    private const MAX_TEXT_LENGTH = 128;
    /**
     * @return string
     */
    public static function getName()
    {
    }
    /**
     * @return array
     */
    private function getCheckTypeMap()
    {
    }
    /**
     * @return array
     */
    private function getCalculatedSignMap()
    {
    }
    /**
     * @param Check $check
     * @return array
     * @throws Main\NotImplementedException
     */
    public function buildCheckQuery(\Bitrix\Sale\Cashbox\Check $check)
    {
    }
    /**
     * @param $checkType
     * @param $vat
     * @return mixed
     */
    private function mapVatValue($checkType, $vat)
    {
    }
    /**
     * @param array $data
     * @return mixed|string
     */
    private function getCustomerContact(array $data)
    {
    }
    /**
     * @return array
     */
    private function getPaymentObjectMap()
    {
    }
    /**
     * @return array
     */
    private function getPaymentTypeMap()
    {
    }
    /**
     * @param $url
     * @param $data
     * @return string
     */
    private function getPostQueryHeaders($url, $data)
    {
    }
    /**
     * @param $id
     * @return array
     */
    public function buildZReportQuery($id)
    {
    }
    /**
     * @param Check $check
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    public function printImmediately(\Bitrix\Sale\Cashbox\Check $check)
    {
    }
    /**
     * @return string
     */
    private function getUrl()
    {
    }
    /**
     * @param $url
     * @param $headers
     * @param string $data
     * @return Result
     * @throws Main\ObjectException
     */
    private function send($url, $headers, $data = '')
    {
    }
    /**
     * @param $headers
     * @return int
     */
    private function extractResponseStatus($headers)
    {
    }
    /**
     * @return void
     */
    public function __destruct()
    {
    }
    /**
     * @return resource
     */
    private function createStreamContext()
    {
    }
    /**
     * @param Check $check
     * @return Result
     */
    public function check(\Bitrix\Sale\Cashbox\Check $check)
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectException
     */
    public function validate() : \Bitrix\Sale\Result
    {
    }
    protected function buildValidateQuery()
    {
    }
    /**
     * @return Result
     * @throws Main\ArgumentException
     * @throws Main\ObjectException
     */
    public function testConnection()
    {
    }
    /**
     * @param $url
     * @return string
     */
    private function getCheckQueryHeaders($url)
    {
    }
    /**
     * @param array $data
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     * @throws Main\ObjectException
     */
    protected static function extractCheckData(array $data)
    {
    }
    /**
     * @param $data
     * @return string
     */
    public function sign($data)
    {
    }
    /**
     * @param array $data
     * @return mixed
     * @throws Main\ArgumentException
     */
    private function encode(array $data)
    {
    }
    /**
     * @param string $data
     * @return mixed
     */
    private function decode($data)
    {
    }
    /**
     * @param $data
     * @return mixed
     */
    private function createTmpFile($data)
    {
    }
    /**
     * @param int $modelId
     * @return array
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getSettings($modelId = 0)
    {
    }
    /**
     * @param Main\HttpRequest $request
     * @return array
     */
    public static function extractSettingsFromRequest(\Bitrix\Main\HttpRequest $request)
    {
    }
    /**
     * @return bool
     */
    public static function isSupportedFFD105()
    {
    }
}