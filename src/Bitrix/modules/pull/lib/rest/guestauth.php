<?php

namespace Bitrix\Pull\Rest;

class GuestAuth
{
    const AUTH_TYPE = 'pull_guest';
    const METHODS_WITHOUT_AUTH = ['server.time', 'pull.config.get'];
    const PULL_UID_PARAM = 'pull_guest_id';
    protected static $authQueryParams = array('pull_guest_id');
    public static function onRestCheckAuth(array $query, $scope, &$res)
    {
    }
    protected static function checkQueryMethod($whiteListMethods)
    {
    }
    protected static function getSuccessfulResult()
    {
    }
}