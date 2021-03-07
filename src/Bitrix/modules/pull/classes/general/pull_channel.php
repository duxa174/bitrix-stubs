<?php

class CPullChannel
{
    const TYPE_PRIVATE = 'private';
    const TYPE_SHARED = 'shared';
    const CHANNEL_TTL = 43205;
    public static function GetNewChannelId($extraString = '')
    {
    }
    public static function GetChannelShared($channelType = self::TYPE_SHARED, $cache = \true, $reOpen = \false)
    {
    }
    public static function GetShared($cache = \true, $reOpen = \false, $channelType = self::TYPE_SHARED)
    {
    }
    public static function GetChannel($userId, $channelType = self::TYPE_PRIVATE, $cache = \true, $reOpen = \false)
    {
    }
    public static function Get($userId, $cache = \true, $reOpen = \false, $channelType = self::TYPE_PRIVATE)
    {
    }
    public static function SignChannel($channelId)
    {
    }
    public static function SignPublicChannel($channelId)
    {
    }
    public static function GetPublicSignature($value)
    {
    }
    public static function GetSignature($value, $signatureKey = \null)
    {
    }
    // create a channel for the user
    public static function Add($userId, $channelId = \null, $publicChannelId = \null, $channelType = self::TYPE_PRIVATE)
    {
    }
    // remove channel by identifier
    // before removing need to send a message to change channel
    public static function Delete($channelId)
    {
    }
    public static function DeleteByUser($userId, $channelId = \null, $channelType = self::TYPE_PRIVATE)
    {
    }
    public static function Send($channelId, $message, $options = array())
    {
    }
    private static function SendCommand($channelId, $message, $options = array())
    {
    }
    public static function SaveToCache($cacheId, $data)
    {
    }
    public static function UpdateLastId($channelId, $lastId)
    {
    }
    // check channels that are older than 12 hours, remove them.
    public static function CheckExpireAgent()
    {
    }
    public static function CheckOnlineChannel()
    {
    }
    /**
     * Deprecated method, use \Bitrix\Pull\Config::get() insted.
     *
     * @deprecated
     * @see \Bitrix\Pull\Config::get()
     */
    public static function GetConfig($userId, $cache = \true, $reopen = \false, $mobile = \false)
    {
    }
    public static function GetOnlineChannels(array $channels)
    {
    }
}