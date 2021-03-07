<?php

namespace Bitrix\Rest\Api;

class Placement extends \IRestService
{
    const SCOPE_PLACEMENT = 'placement';
    public static function onRestServiceBuildDescription()
    {
    }
    public static function getList($query, $n, \CRestServer $server)
    {
    }
    public static function bind($params, $n, \CRestServer $server)
    {
    }
    public static function unbind($params, $n, \CRestServer $server)
    {
    }
    public static function get($params, $n, \CRestServer $server)
    {
    }
    protected static function checkPermission(\CRestServer $server)
    {
    }
    protected static function getScope(\CRestServer $server)
    {
    }
    protected static function getApplicationInfo(\CRestServer $server)
    {
    }
    protected static function getPlacementList(\CRestServer $server, $scopeList = null)
    {
    }
}