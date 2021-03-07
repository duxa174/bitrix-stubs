<?php

namespace Bitrix\Im;

class Bot
{
    const INSTALL_TYPE_SYSTEM = 'system';
    const INSTALL_TYPE_USER = 'user';
    const INSTALL_TYPE_SILENT = 'silent';
    const LOGIN_START = 'bot_';
    const EXTERNAL_AUTH_ID = 'bot';
    const LIST_ALL = 'all';
    const LIST_OPENLINE = 'openline';
    const TYPE_HUMAN = 'H';
    const TYPE_BOT = 'B';
    const TYPE_SUPERVISOR = 'S';
    const TYPE_NETWORK = 'N';
    const TYPE_OPENLINE = 'O';
    const CACHE_TTL = 31536000;
    const CACHE_PATH = '/bx/im/bot/';
    public static function register(array $fields)
    {
    }
    public static function unRegister(array $bot)
    {
    }
    public static function update(array $bot, array $updateFields)
    {
    }
    /**
     * @param int $botId Bot Id.
     * @param string $messageType Notify type - addBot|updateBot|deleteBot
     *
     * @return void
     */
    public static function sendPullNotify($botId, $messageType)
    {
    }
    public static function onMessageAdd($messageId, $messageFields)
    {
    }
    public static function onMessageUpdate($messageId, $messageFields)
    {
    }
    public static function onMessageDelete($messageId, $messageFields)
    {
    }
    public static function onJoinChat($dialogId, $joinFields)
    {
    }
    public static function onLeaveChat($dialogId, $leaveFields)
    {
    }
    public static function startWriting(array $bot, $dialogId, $userName = '')
    {
    }
    public static function addMessage(array $bot, array $messageFields)
    {
    }
    public static function updateMessage(array $bot, array $messageFields)
    {
    }
    public static function deleteMessage(array $bot, $messageId)
    {
    }
    public static function likeMessage(array $bot, $messageId, $action = 'AUTO')
    {
    }
    public static function getDialogId($messageFields)
    {
    }
    private static function findBots($fields)
    {
    }
    public static function getCache($botId)
    {
    }
    public static function clearCache()
    {
    }
    public static function getListCache($type = self::LIST_ALL)
    {
    }
    public static function getListForJs()
    {
    }
    private static function removeFieldsToEvent($messageFields)
    {
    }
    private static function getChatListCache($botId)
    {
    }
    public static function changeChatMembers($chatId, $botId, $append = true)
    {
    }
    public static function getDefaultLanguage()
    {
    }
    public static function deleteExpiredTokenAgent()
    {
    }
    /**
     * @param $messageFields
     * @return array
     */
    private static function getBotsForMessage($messageFields)
    {
    }
}