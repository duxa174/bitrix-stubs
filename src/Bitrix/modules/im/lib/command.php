<?php

namespace Bitrix\Im;

class Command
{
    const CACHE_TTL = 31536000;
    const CACHE_PATH = '/bx/im/command/';
    public static function register(array $fields)
    {
    }
    public static function unRegister(array $command)
    {
    }
    public static function update(array $command, array $updateFields)
    {
    }
    public static function onCommandAdd($messageId, $messageFields)
    {
    }
    public static function addMessage(array $access, array $messageFields)
    {
    }
    public static function getDialogId($messageFields)
    {
    }
    private static function findCommands($fields)
    {
    }
    private static function mergeWithDefaultCommands($commands)
    {
    }
    public static function getListCache($lang = LANGUAGE_ID)
    {
    }
    public static function getListForJs($lang = LANGUAGE_ID)
    {
    }
    public static function getListSonetForJs($lang = LANGUAGE_ID)
    {
    }
    public static function clearCache()
    {
    }
}