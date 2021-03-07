<?php

class CPullOptions
{
    static $optionDefaultConfig = \null;
    static $optionDefaultModule = \null;
    const PROTOBUF_ENABLED = 'enable_protobuf';
    const MAX_CHANNELS_PER_REQUEST = 'limit_max_channels_per_request';
    const MAX_MESSAGES_PER_REQUEST = 'limit_max_messages_per_request';
    const MAX_PAYLOAD = 'limit_max_payload';
    const SERVER_MODE_SHARED = 'shared';
    const SERVER_MODE_PERSONAL = 'personal';
    public static function CheckNeedRun($bGetSectionStatus = \true)
    {
    }
    public static function ModuleEnable()
    {
    }
    public static function GetDependentModule()
    {
    }
    public static function GetExcludeSites()
    {
    }
    public static function SetExcludeSites($sites)
    {
    }
    /*
     * @deprecated No longer used by internal code and not recommended. Use CPullOptions::GetQueueServerStatus()
     */
    public static function GetNginxStatus()
    {
    }
    public static function GetQueueServerStatus()
    {
    }
    public static function GetQueueServerHeaders()
    {
    }
    /*
     * @deprecated No longer used by internal code and not recommended. Use CPullOptions::SetQueueServerStatus()
     */
    public static function SetNginxStatus($flag = "N")
    {
    }
    public static function SetQueueServerStatus($flag = "N")
    {
    }
    public static function SetQueueServerHeaders($flag = "Y")
    {
    }
    /**
     * Return operation mode of the associated server.
     * @return string
     */
    public static function GetQueueServerMode()
    {
    }
    /**
     * Sets operation mode of the associated server.
     * @param string $mode Operation mode of the server.
     */
    public static function SetQueueServerMode($mode)
    {
    }
    public static function IsServerShared()
    {
    }
    public static function GetPushStatus()
    {
    }
    public static function SetPushStatus($flag = "N")
    {
    }
    public static function GetPushMessagePerHit()
    {
    }
    public static function SetPushMessagePerHit($count)
    {
    }
    public static function GetGuestStatus()
    {
    }
    public static function SetGuestStatus($flag = "N")
    {
    }
    public static function GetPublishUrl($channelId = "")
    {
    }
    public static function SetSignatureKey($signature)
    {
    }
    public static function GetSignatureKey()
    {
    }
    public static function GetSignatureAlgorithm()
    {
    }
    public static function SetPublishUrl($path = "")
    {
    }
    public static function GetListenUrl($channelId = "")
    {
    }
    public static function SetListenUrl($path = "")
    {
    }
    public static function GetPublishWebEnabled()
    {
    }
    public static function GetPublishWebUrl($channelId = "")
    {
    }
    public static function SetPublishWebUrl($path = "")
    {
    }
    public static function GetPublishWebSecureUrl($channelId = "")
    {
    }
    public static function SetPublishWebSecureUrl($path = "")
    {
    }
    public static function GetListenSecureUrl($channelId = "")
    {
    }
    public static function SetListenSecureUrl($path = "")
    {
    }
    /*
     * Get version of QueueServer
     * 1 version - nginx-push-stream-module 0.3.4
     * 2 version - nginx-push-stream-module 0.4.0
     * 3 version - Bitrix Push & Pull server 1.0
     * 4 version - Bitrix Push & Pull server 2.0
     */
    public static function GetQueueServerVersion()
    {
    }
    public static function SetQueueServerVersion($version)
    {
    }
    public static function GetCommandPerHit()
    {
    }
    public static function SetCommandPerHit($count)
    {
    }
    public static function GetWebSocketStatus()
    {
    }
    public static function GetWebSocket()
    {
    }
    public static function SetWebSocket($flag = "N")
    {
    }
    public static function GetWebSocketUrl($channelId = "")
    {
    }
    public static function SetWebSocketUrl($path = "")
    {
    }
    public static function GetWebSocketSecureUrl($channelId = "")
    {
    }
    public static function SetWebSocketSecureUrl($path = "")
    {
    }
    public static function SetConfigTimestamp($timestamp = 0)
    {
    }
    public static function GetConfigTimestamp()
    {
    }
    public static function GetMaxPayload()
    {
    }
    public static function GetMaxChannelsPerRequest()
    {
    }
    public static function GetMaxMessagesPerRequest()
    {
    }
    public static function IsProtobufSupported()
    {
    }
    public static function IsProtobufEnabled()
    {
    }
    /* UTILITY */
    public static function SendConfigDie()
    {
    }
    public static function GetDefaultOption($optionName)
    {
    }
    public static function ClearCheckCache()
    {
    }
    public static function ClearAgent()
    {
    }
    public static function OnEpilog()
    {
    }
}