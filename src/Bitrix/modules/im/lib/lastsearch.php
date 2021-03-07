<?php

namespace Bitrix\Im;

class LastSearch
{
    const LIMIT = 30;
    const CACHE_TTL = 31536000;
    const CACHE_PATH = '/bx/im/search/last/';
    public static function add($dialogId, $userId = null)
    {
    }
    public static function delete($dialogId, $userId = null)
    {
    }
    public static function get($userId = null, $options = array())
    {
    }
    public static function clearCache($userId = null)
    {
    }
}