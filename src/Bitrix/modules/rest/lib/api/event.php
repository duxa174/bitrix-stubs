<?php

namespace Bitrix\Rest\Api;

class Event extends \IRestService
{
    const FEATURE_EXTENDED_MODE = 'rest_offline_extended';
    /**
     * Returns description of events REST API
     *
     * @return array
     */
    public static function onRestServiceBuildDescription()
    {
    }
    /**
     * /rest/events method handler
     *
     * Administrator rights required
     *
     * Query format:
     *
     * SCOPE - limit events list by some scope
     * FULL - get all events regardless of application scope
     *
     * @param array $query
     * @param $n
     * @param \CRestServer $server
     *
     * @return array
     *
     * @throws AuthTypeException
     */
    public static function eventsList($query, $n, \CRestServer $server)
    {
    }
    /**
     * /rest/event.bind method handler
     *
     * Administrator rights required
     *
     * Query format:
     *
     * - EVENT - event name
     * - EVENT_TYPE = {online|offline} - type of event handling. Default: online
     * - AUTH_TYPE - User ID, whose auth will be generated for handler. Useless for offline type. Default value is 0, which means getting auth for user, authorized when event is called
     * - HANDLER - URL of event handler. Useless for offline type
     *
     * @param array $query
     * @param $n
     * @param \CRestServer $server
     *
     * @return bool
     *
     * @throws AccessException
     * @throws ArgumentException
     * @throws ArgumentNullException
     * @throws AuthTypeException
     * @throws RestException
     * @throws \Exception
     */
    public static function eventBind($query, $n, \CRestServer $server)
    {
    }
    /**
     * /rest/event.unbind method handler
     *
     * Returns count of unbinded events
     *
     * Administrator rights required
     *
     * Query format:
     *
     * - EVENT - event name
     * - EVENT_TYPE = {online|offline} - type of event handling. Default: online
     * - AUTH_TYPE - The same value as event.bind was called with. Useless for offline type. Default 0
     * - HANDLER - URL of event handler. Useless for offline type
     *
     * @param array $query
     * @param $n
     * @param \CRestServer $server
     *
     * @return array
     *
     * @throws AccessException
     * @throws ArgumentException
     * @throws ArgumentNullException
     * @throws AuthTypeException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     * @throws \Exception
     */
    public static function eventUnbind($query, $n, \CRestServer $server)
    {
    }
    public static function eventGet($query, $n, \CRestServer $server)
    {
    }
    public static function eventTest($query, $n, \CRestServer $server)
    {
    }
    public static function eventOfflineGet($query, $n, \CRestServer $server)
    {
    }
    public static function eventOfflineClear($query, $n, \CRestServer $server)
    {
    }
    public static function eventOfflineError($query, $n, \CRestServer $server)
    {
    }
    public static function eventOfflineList($query, $n, \CRestServer $server)
    {
    }
    protected static function sanitizeFilter($filter, array $availableFields = null, $valueCallback = null, array $availableOperations = null)
    {
    }
    protected static function sanitizeOrder($order, array $availableFields = null)
    {
    }
    protected static function isExtendedModeEnabled()
    {
    }
}