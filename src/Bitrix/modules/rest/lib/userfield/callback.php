<?php

namespace Bitrix\Rest\UserField;

class Callback
{
    const USER_TYPE_ID_PREFIX = 'rest';
    protected static $descriptionCache = null;
    public static function __callStatic($handlerCode, $arguments)
    {
    }
    public static function bind($fields)
    {
    }
    public static function unbind($fields)
    {
    }
    public static function unbindByCode($handlerCode)
    {
    }
    protected static function getUserTypeDescription($placementHandlerCode)
    {
    }
    public static function getUserTypeId($userTypeInfo)
    {
    }
}