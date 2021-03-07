<?php

namespace Bitrix\Im\Disk;

class NoRelationPermission
{
    const ACCESS_TIME = 86400;
    const CACHE_TIME = 864000;
    public static function add($chatId, $userId)
    {
    }
    public static function delete($chatId, $userId, $permissionDisk = true)
    {
    }
    public static function cleaningAgent()
    {
    }
}