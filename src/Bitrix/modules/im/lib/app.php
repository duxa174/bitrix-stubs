<?php

namespace Bitrix\Im;

class App
{
    const CACHE_TTL = 31536000;
    const CACHE_PATH = '/bx/im/app/';
    public static function register(array $fields)
    {
    }
    public static function unRegister(array $app)
    {
    }
    public static function update(array $app, array $updateFields)
    {
    }
    public static function addToken(array $params)
    {
    }
    public static function addMessage(array $app, array $messageFields)
    {
    }
    public static function getListCache($lang = LANGUAGE_ID)
    {
    }
    public static function getListForJs($lang = LANGUAGE_ID)
    {
    }
    public static function getUserHash($userId, $hash = 'register')
    {
    }
    public static function getDomainHash($hash)
    {
    }
    public static function clearCache()
    {
    }
}