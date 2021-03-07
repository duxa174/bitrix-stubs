<?php

namespace Bitrix\Sale\PaySystem;

/**
 * Class RestService
 * @package Bitrix\Sale\PaySystem
 */
class RestService extends \IRestService
{
    const SCOPE = 'pay_system';
    const ERROR_CHECK_FAILURE = 'ERROR_CHECK_FAILURE';
    const ERROR_HANDLER_ALREADY_EXIST = 'ERROR_HANDLER_ALREADY_EXIST';
    const ERROR_HANDLER_NOT_FOUND = 'ERROR_HANDLER_NOT_FOUND';
    const ERROR_PERSON_TYPE_NOT_FOUND = 'ERROR_PERSON_TYPE_NOT_FOUND';
    const ERROR_PAY_SYSTEM_ADD = 'ERROR_PAY_SYSTEM_ADD';
    const ERROR_PAY_SYSTEM_NOT_FOUND = 'ERROR_PAY_SYSTEM_NOT_FOUND';
    const ERROR_PAY_SYSTEM_DELETE = 'ERROR_PAY_SYSTEM_DELETE';
    const ERROR_INTERNAL_INVOICE_NOT_FOUND = 'ERROR_INTERNAL_INVOICE_NOT_FOUND';
    const ERROR_INTERNAL_ORDER_NOT_FOUND = 'ERROR_INTERNAL_ORDER_NOT_FOUND';
    const ERROR_PROCESS_REQUEST_RESULT = 'ERROR_PROCESS_REQUEST_RESULT';
    const ERROR_PAY_INVOICE_NOT_SUPPORTED = 'ERROR_INVOICE_NO_SUPPORTED';
    /**
     * @return array
     */
    public static function onRestServiceBuildDescription()
    {
    }
    /**
     * @param array $params
     * @return array|int
     * @throws AccessException
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\IO\FileNotFoundException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function addPaySystem(array $params)
    {
    }
    /**
     * @param $params
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\IO\FileNotFoundException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    protected static function checkParamsBeforePaySystemAdd($params)
    {
    }
    /**
     * @param $serviceId
     * @param $personTypeId
     * @throws \Exception
     */
    private static function savePersonTypeId($serviceId, $personTypeId)
    {
    }
    /**
     * @param array $params
     * @return bool
     * @throws AccessException
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\IO\FileNotFoundException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function updatePaySystem(array $params)
    {
    }
    /**
     * @param $params
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     * @throws Main\IO\FileNotFoundException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    protected static function checkParamsBeforePaySystemUpdate($params)
    {
    }
    /**
     * @param $params
     * @return bool
     * @throws AccessException
     * @throws Main\LoaderException
     * @throws RestException
     */
    public static function updateSettings($params)
    {
    }
    /**
     * @param $params
     * @throws RestException
     */
    protected static function checkParamsBeforeSettingsUpdate($params)
    {
    }
    /**
     * @param $params
     * @return array
     * @throws AccessException
     * @throws Main\LoaderException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function getSettings($params)
    {
    }
    /**
     * @param $params
     * @throws RestException
     */
    protected static function checkParamsBeforeSettingsGet($params)
    {
    }
    /**
     * @param array $params
     * @return bool
     * @throws AccessException
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function deletePaySystem(array $params)
    {
    }
    /**
     * @param $params
     * @throws RestException
     */
    protected static function checkParamsBeforePaySystemDelete($params)
    {
    }
    /**
     * @param array $params
     * @return array|bool|int
     * @throws AccessException
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function addHandler(array $params)
    {
    }
    /**
     * @param array $params
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    private static function checkParamsOnAddHandler(array $params)
    {
    }
    /**
     * @param array $params
     * @return bool
     * @throws AccessException
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function updateHandler(array $params)
    {
    }
    /**
     * @param array $params
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    private static function checkParamsOnUpdateHandler(array $params)
    {
    }
    /**
     * @param array $params
     * @return bool
     * @throws AccessException
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function deleteHandler(array $params)
    {
    }
    /**
     * @return array
     * @throws AccessException
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getHandlerList()
    {
    }
    /**
     * @param array $params
     * @return array
     * @throws AccessException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     */
    public static function getPaySystemList(array $params = [])
    {
    }
    /**
     * @param array $params
     * @return array
     * @throws AccessException
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function getSettingsByInvoice(array $params)
    {
    }
    /**
     * @param array $params
     * @return array
     * @throws AccessException
     * @throws RestException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\LoaderException
     */
    public static function getSettingsByPayment(array $params)
    {
    }
    /**
     * @param array $params
     * @return bool
     * @throws AccessException
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function payInvoice(array $params)
    {
    }
    /**
     * @param array $params
     * @return bool
     * @throws AccessException
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws RestException
     */
    public static function payPayment(array $params)
    {
    }
    /**
     * @param array $params
     * @return bool
     * @throws RestException
     */
    private static function payPaymentInternal(array $params)
    {
    }
    /**
     * @param array $data
     * @return array
     */
    private static function prepareParams(array $data)
    {
    }
    /**
     * @param array $params
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    private static function checkParamsForInvoice(array $params)
    {
    }
    /**
     * @param array $params
     * @throws Main\ArgumentException
     * @throws RestException
     */
    private static function checkParamsForPayment(array $params)
    {
    }
    /**
     * @throws AccessException
     * @throws Main\LoaderException
     */
    protected static function checkOrderPermission()
    {
    }
    /**
     * @throws AccessException
     * @throws Main\LoaderException
     */
    protected static function checkPaySystemPermission()
    {
    }
    private static function saveFile($fileContent)
    {
    }
}