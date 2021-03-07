<?php

namespace Bitrix\Sale\Delivery\Rest;

/**
 * Class RestHandler
 * @package Bitrix\Sale\Delivery\Rest
 */
class HandlerService extends \Bitrix\Sale\Delivery\Rest\BaseService
{
    private const ERROR_HANDLER_ADD = 'ERROR_HANDLER_ADD';
    private const ERROR_HANDLER_UPDATE = 'ERROR_HANDLER_UPDATE';
    private const ERROR_HANDLER_DELETE = 'ERROR_HANDLER_DELETE';
    private const ERROR_CHECK_FAILURE = 'ERROR_CHECK_FAILURE';
    private const ERROR_HANDLER_ALREADY_EXIST = 'ERROR_HANDLER_ALREADY_EXIST';
    private const ERROR_HANDLER_NOT_FOUND = 'ERROR_HANDLER_NOT_FOUND';
    /**
     * @param array $params
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    private static function checkParamsOnAddHandler(array $params) : void
    {
    }
    /**
     * @param array $params
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    private static function checkParamsOnUpdateHandler(array $params) : void
    {
    }
    /**
     * @param $params
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    private static function checkParamsOnDeleteHandler($params) : void
    {
    }
    /**
     * @param $query
     * @param $n
     * @param \CRestServer $server
     * @return array|false|int
     * @throws AccessException
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function addHandler($query, $n, \CRestServer $server)
    {
    }
    /**
     * @param $query
     * @param $n
     * @param \CRestServer $server
     * @return bool
     * @throws AccessException
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function updateHandler($query, $n, \CRestServer $server) : bool
    {
    }
    /**
     * @param $query
     * @param $n
     * @param \CRestServer $server
     * @return bool
     * @throws AccessException
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function deleteHandler($query, $n, \CRestServer $server) : bool
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
    public static function getHandlerList() : array
    {
    }
}