<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class CashboxCheckbox
 * @package Bitrix\Sale\Cashbox
 */
class CashboxCheckbox extends \Bitrix\Sale\Cashbox\Cashbox implements \Bitrix\Sale\Cashbox\IPrintImmediately, \Bitrix\Sale\Cashbox\ICheckable
{
    private const HANDLER_MODE_TEST = 'TEST';
    private const HANDLER_MODE_ACTIVE = 'ACTIVE';
    private const API_VERSION = 'v1';
    private const HANDLER_TEST_URL = 'https://dev-api.checkbox.in.ua/api';
    private const HANDLER_ACTIVE_URL = 'https://api.checkbox.in.ua/api';
    private const OPERATION_SIGN_IN = 'cashier/signin';
    private const OPERATION_CREATE_SHIFT = 'shifts';
    private const OPERATION_CHECK_SHIFTS = 'cashier/shift';
    private const OPERATION_CLOSE_SHIFT = 'shifts/close';
    private const OPERATION_CREATE_CHECK = 'receipts/sell';
    private const OPERATION_GET_CHECK = 'receipts';
    private const MAX_CODE_LENGTH = 256;
    private const MAX_NAME_LENGTH = 256;
    private const HTTP_METHOD_GET = 'get';
    private const HTTP_METHOD_POST = 'post';
    private const HTTP_NO_REDIRECT = false;
    private const HTTP_RESPONSE_CODE_201 = 201;
    private const HTTP_RESPONSE_CODE_202 = 202;
    private const HTTP_RESPONSE_CODE_400 = 400;
    private const HTTP_RESPONSE_CODE_403 = 403;
    private const HTTP_RESPONSE_CODE_422 = 422;
    private const SHIFT_STATUS_OPENED = 'OPENED';
    private const CHECK_STATUS_DONE = 'DONE';
    private const CHECK_STATUS_ERROR = 'ERROR';
    private const HEADER_TOKEN_TYPE = 'Bearer';
    private const TOKEN_OPTION_NAME = 'cashbox_checkbox_token';
    private const QUANTITY_MULTIPLIER = 1000;
    private const PRICE_MULTIPLIER = 100;
    private const DPS_URL = 'https://cabinet.tax.gov.ua/cashregs/check?';
    private const CODE_NO_VAT = '0';
    private const CODE_VAT_0 = '4';
    private const CODE_VAT_7 = '2';
    private const CODE_VAT_20 = '1';
    private const OPEN_SHIFT_WAIT_SECONDS = 5;
    private const OPEN_SHIFT_WAIT_ATTEMPTS = 2;
    public static function getName()
    {
    }
    private static function isCheckReturn(\Bitrix\Sale\Cashbox\Check $check)
    {
    }
    public function buildCheckQuery(\Bitrix\Sale\Cashbox\Check $check)
    {
    }
    /**
     * @inheritDoc
     */
    public function buildZReportQuery($id)
    {
    }
    /**
     * @inheritDoc
     */
    public function check(\Bitrix\Sale\Cashbox\Check $check)
    {
    }
    protected static function extractCheckData(array $data)
    {
    }
    /**
     * @inheritDoc
     */
    public function printImmediately(\Bitrix\Sale\Cashbox\Check $check)
    {
    }
    private function addCloseShiftAgent()
    {
    }
    /**
     * @param $cashboxId
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\ObjectException
     */
    public static function closeShiftAgent($cashboxId)
    {
    }
    private function sendRequest(string $method, string $url, array $headersData = [], array $bodyData = [], bool $allowRedirect = true) : \Bitrix\Sale\Result
    {
    }
    private function sendRequestWithAuthorization(string $method, string $url, array $headersData = [], array $bodyData = [], bool $allowRedirect = true) : \Bitrix\Sale\Result
    {
    }
    private static function getAuthorizationHeaderValue(string $token) : ?string
    {
    }
    private static function getHeaders(array $headersData) : array
    {
    }
    private static function encode(array $data)
    {
    }
    private static function decode(string $data)
    {
    }
    private function getRequestUrl(string $action, array $requestParams = []) : string
    {
    }
    private function getTokenOptionName() : string
    {
    }
    private function getAccessToken() : string
    {
    }
    private function setAccessToken(string $token) : void
    {
    }
    private function requestAccessToken() : \Bitrix\Sale\Result
    {
    }
    private function getCurrentShift() : \Bitrix\Sale\Result
    {
    }
    private function openShift() : \Bitrix\Sale\Result
    {
    }
    private function closeShift() : \Bitrix\Sale\Result
    {
    }
    /**
     * @inheritDoc
     */
    public static function getSettings($modelId = 0)
    {
    }
    /**
     * @inheritDoc
     */
    public function getCheckLink(array $linkParams)
    {
    }
    private static function getCatalogPropertiesForItems($itemIds, $properties, $siteId) : array
    {
    }
}