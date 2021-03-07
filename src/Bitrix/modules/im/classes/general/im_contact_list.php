<?php

class CAllIMContactList
{
    private $user_id = 0;
    const NETWORK_AUTH_ID = 'replica';
    function __construct($user_id = \false)
    {
    }
    function GetList($arParams = array())
    {
    }
    public static function CleanChatCache($userId)
    {
    }
    public static function CleanAllChatCache()
    {
    }
    function SearchUsers($searchText)
    {
    }
    static function AllowToSend($arParams)
    {
    }
    static function GetUserData($arParams = array())
    {
    }
    public static function SetOnline($userId = \null, $cache = \true)
    {
    }
    public static function SetOffline($userId = \null)
    {
    }
    public static function SetCurrentTab($userId)
    {
    }
    public static function InRecent($userId, $type, $itemId)
    {
    }
    public static function SetRecentForNewUser($userId)
    {
    }
    public static function SetRecent($arParams)
    {
    }
    public static function DeleteRecent($entityId, $isChat = \false, $userId = \false, $isNotification = \false)
    {
    }
    public static function DialogHide($dialogId, $userId = \null)
    {
    }
    public static function ClearRecentCache($userId = \null)
    {
    }
    public static function GetRecentList($arParams = array())
    {
    }
    public static function GetRecentListSortCounter($counter)
    {
    }
    public static function GetRecentListSortMessage($recent)
    {
    }
    public static function IsExtranet($arUser)
    {
    }
    public static function GetUserPath($userId = \false)
    {
    }
    public static function GetUserNameTemplate($siteId = \false, $langId = \false, $getDefault = \false)
    {
    }
    public static function GetUserColor($id, $gender)
    {
    }
    public static function PrepareUserId($id, $searchMark = '')
    {
    }
    public static function formatAbsentResult($userId)
    {
    }
    public static function PrepareUserIds($userIds, $searchMark = '')
    {
    }
}