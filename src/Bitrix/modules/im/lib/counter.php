<?php

namespace Bitrix\Im;

class Counter
{
    const CACHE_TTL = 2678400;
    // 1 month
    const CACHE_NAME = 'counter_v2';
    // 1 month
    const CACHE_PATH = '/bx/im/counter/';
    const TYPE_MESSENGER = 'messenger';
    const MODULE_ID = 'im';
    public static function get($userId)
    {
    }
    public static function clearCache($userId = null)
    {
    }
    public static function getChatCounter($chatId, $userId)
    {
    }
    public static function getDialogCounter($userId, $opponentUserId)
    {
    }
    public static function getNotifyCounter($userId)
    {
    }
    public static function countingLostCountersAgent($notifyRelationId = 0, $chatRelationId = 0)
    {
    }
    public static function onGetMobileCounterTypes(\Bitrix\Main\Event $event)
    {
    }
    public static function onGetMobileCounter(\Bitrix\Main\Event $event)
    {
    }
}