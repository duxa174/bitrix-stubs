<?php

class CIMSettings
{
    const SETTINGS = 'settings';
    const NOTIFY = 'notify';
    const CLIENT_SITE = 'site';
    const CLIENT_XMPP = 'xmpp';
    const CLIENT_MAIL = 'email';
    const CLIENT_PUSH = 'push';
    const START_MESSAGE_FIRST = 'first';
    const START_MESSAGE_LAST = 'last';
    const PRIVACY_MESSAGE = 'privacyMessage';
    const PRIVACY_CHAT = 'privacyChat';
    const PRIVACY_CALL = 'privacyCall';
    const PRIVACY_SEARCH = 'privacySearch';
    const PRIVACY_PROFILE = 'privacyProfile';
    const PRIVACY_RESULT_ALL = 'all';
    const PRIVACY_RESULT_CONTACT = 'contact';
    const PRIVACY_RESULT_NOBODY = 'nobody';
    const STATUS = 'status';
    public static function Get($userId = \false)
    {
    }
    public static function Set($type, $value, $userId = \false)
    {
    }
    public static function SetSetting($type, $value, $userId = \false)
    {
    }
    public static function GetSetting($type, $value, $userId = \false)
    {
    }
    public static function GetNotifyAccess($userId, $moduleId, $eventId, $clientId)
    {
    }
    public static function GetDefaultSettings($type)
    {
    }
    public static function CheckValues($type, $value)
    {
    }
    public static function GetNotifyNames()
    {
    }
    public static function GetSimpleNotifyBlocked($byModule = \false)
    {
    }
    public static function GetPrivacy($type, $userId = \false)
    {
    }
    public static function GetStartChatMessage()
    {
    }
    public static function ClearCache($userId = \false)
    {
    }
}