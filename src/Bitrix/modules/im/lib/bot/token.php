<?php

namespace Bitrix\Im\Bot;

class Token
{
    const CACHE_TOKEN_TTL = 86400;
    const CACHE_TOKEN_PATH = '/bx/im/token/';
    public static function isActive($botId, $dialogId)
    {
    }
    public static function add($botId, $dialogId)
    {
    }
    public static function get($botId, $dialogId, $prolong = false)
    {
    }
    private static function getFromCache($botId)
    {
    }
}