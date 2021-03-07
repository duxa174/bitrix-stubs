<?php

namespace Bitrix\MessageService;

class RestService extends \IRestService
{
    const SCOPE = 'messageservice';
    protected static $app;
    const ERROR_UNSUPPORTED_PROTOCOL = 'ERROR_UNSUPPORTED_PROTOCOL';
    const ERROR_WRONG_HANDLER_URL = 'ERROR_WRONG_HANDLER_URL';
    const ERROR_HANDLER_URL_MATCH = 'ERROR_HANDLER_URL_MATCH';
    const ERROR_SENDER_ALREADY_INSTALLED = 'ERROR_SENDER_ALREADY_INSTALLED';
    const ERROR_SENDER_ADD_FAILURE = 'ERROR_SENDER_ADD_FAILURE';
    const ERROR_SENDER_VALIDATION_FAILURE = 'ERROR_SENDER_VALIDATION_FAILURE';
    const ERROR_SENDER_NOT_FOUND = 'ERROR_SENDER_NOT_FOUND';
    const ERROR_MESSAGE_NOT_FOUND = 'ERROR_MESSAGE_NOT_FOUND';
    const ERROR_MESSAGE_STATUS_INCORRECT = 'ERROR_MESSAGE_STATUS_INCORRECT';
    public static function onRestServiceBuildDescription()
    {
    }
    /**
     * @param array $fields Fields describes application.
     * @return void
     */
    public static function onRestAppDelete(array $fields)
    {
    }
    /**
     * @param array $fields Fields describes application.
     * @return void
     */
    public static function onRestAppUpdate(array $fields)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws \Exception
     */
    public static function addSender($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws \Exception
     */
    public static function deleteSender($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return array
     * @throws AccessException
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getSenderList($params, $n, $server)
    {
    }
    /**
     * @param array $params Input params.
     * @param int $n Offset.
     * @param \CRestServer $server Rest server instance.
     * @return bool
     * @throws AccessException
     * @throws RestException
     */
    public static function updateMessageStatus($params, $n, $server)
    {
    }
    private static function getUserId()
    {
    }
    private static function checkAdminPermissions()
    {
    }
    private static function validateSender($data, $server)
    {
    }
    private static function validateSenderCode($code)
    {
    }
    private static function validateSenderHandler($handler, $server)
    {
    }
    /**
     * @param \CRestServer $server
     * @return array|bool|false|mixed|null
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     */
    private static function getApp($server)
    {
    }
    private static function addSenderLang($langFields, $clientId)
    {
    }
    private static function getAppNames($clientId)
    {
    }
}