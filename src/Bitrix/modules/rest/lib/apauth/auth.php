<?php

namespace Bitrix\Rest\APAuth;

class Auth
{
    const AUTH_TYPE = 'apauth';
    protected static $authQueryParams = array('UID' => 'aplogin', 'PASSWORD' => 'ap');
    protected static $integrationScope = array('crm', 'telephony', 'imopenlines');
    protected static $scopeCache = array();
    public static function onRestCheckAuth(array $query, $scope, &$res)
    {
    }
    protected static function check($auth, $scope)
    {
    }
    protected static function checkOldPassword($userId, $password)
    {
    }
    protected static function convertOldPassword($appPassword, $password)
    {
    }
    protected static function checkPermission($passwordId, $scope)
    {
    }
    protected static function getPasswordScope($passwordId)
    {
    }
}