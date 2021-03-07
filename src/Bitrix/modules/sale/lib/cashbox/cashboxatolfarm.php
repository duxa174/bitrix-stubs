<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class CashboxAtolFarm
 * @package Bitrix\Sale\Cashbox
 */
class CashboxAtolFarm extends \Bitrix\Sale\Cashbox\Cashbox implements \Bitrix\Sale\Cashbox\IPrintImmediately, \Bitrix\Sale\Cashbox\ICheckable
{
    const OPERATION_CHECK_REGISTRY = 'registry';
    const OPERATION_CHECK_CHECK = 'check';
    const OPERATION_GET_TOKEN = 'get_token';
    const REQUEST_TYPE_GET = 'get';
    const REQUEST_TYPE_POST = 'post';
    const TOKEN_OPTION_NAME = 'atol_access_token';
    const SERVICE_URL = 'https://online.atol.ru/possystem/v3';
    const RESPONSE_HTTP_CODE_401 = 401;
    const RESPONSE_HTTP_CODE_200 = 200;
    const CODE_VAT_0 = 'vat0';
    const CODE_VAT_10 = 'vat10';
    const CODE_VAT_20 = 'vat20';
    protected const MAX_NAME_LENGTH = 128;
    /**
     * @param Check $check
     * @return array
     */
    public function buildCheckQuery(\Bitrix\Sale\Cashbox\Check $check)
    {
    }
    /**
     * @return string
     */
    protected function getCallbackUrl()
    {
    }
    /**
     * @return string
     */
    public static function getName()
    {
    }
    /**
     * @param array $data
     * @return array
     */
    protected static function extractCheckData(array $data)
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
     * @param array $data
     * @return array
     */
    protected static function extractZReportData(array $data)
    {
    }
    /**
     * @return array
     */
    protected function getCheckTypeMap()
    {
    }
    /**
     * @param $operation
     * @param $token
     * @param array $queryData
     * @return string
     * @throws Main\SystemException
     */
    protected function getRequestUrl($operation, $token, array $queryData = array())
    {
    }
    /**
     * @param Check $check
     * @return Result
     * @throws Main\NotImplementedException
     * @throws Main\SystemException
     */
    public function printImmediately(\Bitrix\Sale\Cashbox\Check $check)
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
     * @param array $checkData
     * @return Result
     */
    protected function validateCheckQuery(array $checkData)
    {
    }
    /**
     * @param $method
     * @param $url
     * @param array $data
     * @return Result
     */
    private function send($method, $url, array $data = array())
    {
    }
    /**
     * @param int $modelId
     * @return array
     */
    public static function getSettings($modelId = 0)
    {
    }
    /**
     * @return array
     */
    public static function getGeneralRequiredFields()
    {
    }
    /**
     * @return string
     */
    private function getAccessToken()
    {
    }
    /**
     * @param $token
     */
    private function setAccessToken($token)
    {
    }
    /**
     * @return string
     */
    private function getOptionName()
    {
    }
    /**
     * @param array $data
     * @return mixed
     */
    private function encode(array $data)
    {
    }
    /**
     * @param $data
     * @return mixed
     * @throws Main\ArgumentException
     */
    private function decode($data)
    {
    }
    /**
     * @return string
     * @throws Main\SystemException
     */
    private function requestAccessToken()
    {
    }
    /**
     * @param $errorCode
     * @throws Main\NotImplementedException
     * @return int
     */
    protected static function getErrorType($errorCode)
    {
    }
}