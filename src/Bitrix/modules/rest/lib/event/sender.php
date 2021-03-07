<?php

namespace Bitrix\Rest\Event;

/**
 * Class Sender
 *
 * Transport and utility for REST events.
 *
 * @package Bitrix\Rest
 **/
class Sender
{
    protected static $initialized = false;
    protected static $forkSet = false;
    protected static $queryData = array();
    /**
     * @var ProviderInterface
     */
    protected static $provider;
    /**
     * @var ProviderOfflineInterface
     */
    protected static $providerOffline;
    protected static $defaultEventParams = array("category" => \Bitrix\Rest\Sqs::CATEGORY_DEFAULT, "sendAuth" => true, "sendRefreshToken" => false);
    /**
     * Utility function to parse pseudo-method name
     *
     * @param string $name Pseudo-method name.
     *
     * @return array
     */
    public static function parseEventName($name)
    {
    }
    /**
     * Binds REST event handler on PHP event.
     *
     * @param string $moduleId Event owner module.
     * @param string $eventName Event name.
     */
    public static function bind($moduleId, $eventName)
    {
    }
    /**
     * Unbinds REST event handler on PHP event.
     *
     * @param string $moduleId Event owner module.
     * @param string $eventName Event name.
     */
    public static function unbind($moduleId, $eventName)
    {
    }
    /**
     * Getter for default event params array.
     *
     * @return array
     */
    public static function getDefaultEventParams()
    {
    }
    /**
     * Returns authorization array for event handlers and BP activities.
     *
     * @param string|int $appId Application ID or CODE.
     * @param int $userId User ID which will be the owner of access_token.
     * @param array $additionalData Additional data which will be stored with access_token.
     * @param array $additional Event parameters. Keys sendAuth and sendRefreshToken supported.
     *
     * @return array|bool|null
     */
    public static function getAuth($appId, $userId, array $additionalData = array(), array $additional = array())
    {
    }
    /**
     * Calls or schedules the query to SQS.
     *
     * @param array $handlersList Event handlers to call.
     *
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function call($handlersList)
    {
    }
    /**
     * Sends all scheduled handlers to SQS.
     */
    public static function send()
    {
    }
    /**
     * @return ProviderInterface
     */
    public static function getProvider()
    {
    }
    /**
     * @param ProviderInterface $provider
     */
    public static function setProvider(\Bitrix\Rest\Event\ProviderInterface $provider)
    {
    }
    protected static function getDefaultProvider()
    {
    }
    /**
     * @return ProviderOfflineInterface
     */
    public static function getProviderOffline()
    {
    }
    /**
     * @param ProviderOfflineInterface $providerOffline
     */
    public static function setProviderOffline(\Bitrix\Rest\Event\ProviderOfflineInterface $providerOffline)
    {
    }
    protected static function getDefaultProviderOffline()
    {
    }
    protected static function initialize()
    {
    }
    protected static function getHandlerName($moduleId, $eventName)
    {
    }
}