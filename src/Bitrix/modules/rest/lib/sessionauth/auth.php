<?php

namespace Bitrix\Rest\SessionAuth;

class Auth
{
    const AUTH_TYPE = 'sessionauth';
    protected static $authQueryParams = array('sessid');
    public static function isAccessAllowed() : bool
    {
    }
    public static function onRestCheckAuth(array $query, $scope, &$res)
    {
    }
    private static function setLastActivityDate($userId, $query)
    {
    }
    protected static function requireHttpAuth()
    {
    }
    protected static function checkHttpAuth()
    {
    }
    protected static function checkCookieAuth()
    {
    }
}