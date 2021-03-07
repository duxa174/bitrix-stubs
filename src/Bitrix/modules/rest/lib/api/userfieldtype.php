<?php

namespace Bitrix\Rest\Api;

class UserFieldType extends \IRestService
{
    const SCOPE_USERFIELDTYPE = 'placement';
    const PLACEMENT_UF_TYPE = 'USERFIELD_TYPE';
    public static function onRestServiceBuildDescription()
    {
    }
    public static function getList($param, $nav, \CRestServer $server)
    {
    }
    public static function add($param, $n, \CRestServer $server)
    {
    }
    public static function update($param, $n, \CRestServer $server)
    {
    }
    public static function delete($param, $n, \CRestServer $server)
    {
    }
    protected static function checkPermission(\CRestServer $server)
    {
    }
}