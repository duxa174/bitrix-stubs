<?php

namespace Bitrix\Sale\Delivery\Rest;

/**
 * Class DeliveryManager
 * @package Bitrix\Sale\Delivery\Rest
 */
class DeliveryService extends \Bitrix\Sale\Delivery\Rest\BaseService
{
    private const ERROR_CHECK_FAILURE = 'ERROR_CHECK_FAILURE';
    private const ERROR_HANDLER_NOT_FOUND = 'ERROR_HANDLER_NOT_FOUND';
    private const ERROR_DELIVERY_ADD = 'ERROR_DELIVERY_ADD';
    private const ERROR_DELIVERY_UPDATE = 'ERROR_DELIVERY_UPDATE';
    private const ERROR_DELIVERY_DELETE = 'ERROR_DELIVERY_DELETE';
    private const ERROR_DELIVERY_CONFIG_UPDATE = 'ERROR_DELIVERY_CONFIG_UPDATE';
    private const ERROR_DELIVERY_NOT_FOUND = 'ERROR_DELIVERY_NOT_FOUND';
    /**
     * @param $params
     * @throws Main\SystemException
     * @throws RestException
     */
    private static function checkParamsBeforeDeliveryAdd($params) : void
    {
    }
    /**
     * @param $params
     * @throws Main\SystemException
     * @throws RestException
     */
    private static function checkParamsBeforeDeliveryUpdate($params) : void
    {
    }
    /**
     * @param $params
     * @throws Main\SystemException
     * @throws RestException
     */
    private static function checkParamsBeforeDeliveryDelete($params) : void
    {
    }
    /**
     * @param $params
     * @throws RestException
     */
    private static function checkParamsBeforeDeliveryConfigGet($params) : void
    {
    }
    private static function checkParamsBeforeDeliveryConfigUpdate($params) : void
    {
    }
    private static function saveFile($fileContent)
    {
    }
    /**
     * @param $query
     * @param $n
     * @param \CRestServer $server
     * @return array|int
     * @throws AccessException
     * @throws Main\LoaderException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function addDelivery($query, $n, \CRestServer $server)
    {
    }
    /**
     * @param $query
     * @param $n
     * @param \CRestServer $server
     * @return bool
     * @throws AccessException
     * @throws Main\LoaderException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function updateDelivery($query, $n, \CRestServer $server) : bool
    {
    }
    /**
     * @param $query
     * @param $n
     * @param \CRestServer $server
     * @return bool
     * @throws AccessException
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     * @throws Main\LoaderException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function deleteDelivery($query, $n, \CRestServer $server) : bool
    {
    }
    /**
     * @param $query
     * @param $n
     * @param \CRestServer $server
     * @return array
     * @throws AccessException
     * @throws Main\ArgumentException
     * @throws Main\LoaderException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function getDeliveryList($query, $n, \CRestServer $server) : array
    {
    }
    /**
     * @param $query
     * @param $n
     * @param \CRestServer $server
     * @return array
     * @throws AccessException
     * @throws Main\LoaderException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function getConfig($query, $n, \CRestServer $server) : array
    {
    }
    /**
     * @param $query
     * @param $n
     * @param \CRestServer $server
     * @return bool
     * @throws AccessException
     * @throws Main\LoaderException
     * @throws Main\SystemException
     * @throws RestException
     */
    public static function updateConfig($query, $n, \CRestServer $server) : bool
    {
    }
}