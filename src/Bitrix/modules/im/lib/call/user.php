<?php

namespace Bitrix\Im\Call;

class User
{
    const MODULE_ID = 'im';
    const EXTERNAL_AUTH_ID = 'call';
    private static $error = null;
    public static function register($userFields = [])
    {
    }
    public static function get($userId)
    {
    }
    public static function getDefaultName()
    {
    }
    public static function getPersonalPhoto($avatarUrl = '')
    {
    }
    public static function getUserCode()
    {
    }
    /**
     * @return BasicError
     */
    public static function getError()
    {
    }
    /**
     * @param $method
     * @param $code
     * @param $msg
     * @param array $params
     *
     * @return bool
     */
    private static function setError($method, $code, $msg, $params = [])
    {
    }
    private static function clearError()
    {
    }
}