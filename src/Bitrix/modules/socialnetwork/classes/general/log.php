<?php

class CAllSocNetLog
{
    /***************************************/
    /********  DATA MODIFICATION  **********/
    /***************************************/
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    /***************************************/
    /**********  DATA SELECTION  ***********/
    /***************************************/
    public static function GetByID($ID)
    {
    }
    function MakeTitle($titleTemplate, $title, $url = "", $bHtml = \true)
    {
    }
    /***************************************/
    /**********  SEND EVENTS  **************/
    /***************************************/
    function __InitUserTmp($userID)
    {
    }
    function __InitUsersTmp($message, $titleTemplate1, $titleTemplate2)
    {
    }
    function __InitGroupTmp($groupID)
    {
    }
    function __InitGroupsTmp($message, $titleTemplate1, $titleTemplate2)
    {
    }
    function SendEventAgent($ID, $mailTemplate = "SONET_NEW_EVENT", $tmp_id = \false)
    {
    }
    public static function SendEvent($ID, $mailTemplate = "SONET_NEW_EVENT", $tmp_id = \false, $bAgent = \false, $bTransport = \false)
    {
    }
    public static function CounterIncrement($entityId, $event_id = \false, $arOfEntities = \false, $type = \CSocNetLogCounter::TYPE_LOG_ENTRY, $bForAllAccess = \false, $arUserIdToPush = array())
    {
    }
    function CounterDecrement($log_id, $event_id = \false, $type = \CSocNetLogCounter::TYPE_LOG_ENTRY, $bForAllAccess = \false)
    {
    }
    function ClearOldAgent()
    {
    }
    function GetSign($url, $userID = \false, $site_id = \false)
    {
    }
    function CheckSign($sign, $userId)
    {
    }
    function OnSocNetLogFormatEvent($arEvent, $arParams)
    {
    }
    function InitUserTmp($userID, $arParams, $bCurrentUserIsAdmin = "unknown", $bRSS = \false)
    {
    }
    function InitUsersTmp($message, $titleTemplate1, $titleTemplate2, $arParams, $bCurrentUserIsAdmin = "unknown", $bRSS = \false)
    {
    }
    function InitGroupTmp($groupID, $arParams, $bRSS = \false)
    {
    }
    function InitGroupsTmp($message, $titleTemplate1, $titleTemplate2, $arParams, $bRSS = \false)
    {
    }
    function ShowGroup($arEntityDesc, $strEntityURL, $arParams)
    {
    }
    function ShowUser($arEntityDesc, $strEntityURL, $arParams)
    {
    }
    static function FormatEvent_FillTooltip($arFields, $arParams)
    {
    }
    public static function FormatEvent_CreateAvatar($arFields, $arParams, $source = "CREATED_BY_")
    {
    }
    static function FormatEvent_IsMessageShort($message, $short_message = \false)
    {
    }
    function FormatEvent_BlogPostComment($arFields, $arParams, $bMail = \false)
    {
    }
    function FormatEvent_Forum($arFields, $arParams, $bMail = \false)
    {
    }
    function FormatEvent_Photo($arFields, $arParams, $bMail = \false)
    {
    }
    function FormatEvent_Files($arFields, $arParams, $bMail = \false)
    {
    }
    function FormatEvent_Task($arFields, $arParams, $bMail = \false)
    {
    }
    function FormatEvent_SystemGroups($arFields, $arParams, $bMail = \false)
    {
    }
    function FormatEvent_SystemFriends($arFields, $arParams, $bMail = \false)
    {
    }
    function FormatEvent_System($arFields, $arParams, $bMail = \false)
    {
    }
    function FormatEvent_Microblog($arFields, $arParams, $bMail = \false)
    {
    }
    function SetCacheLastLogID($id)
    {
    }
    function GetCacheLastLogID()
    {
    }
    function SetUserCache($user_id, $max_id, $max_viewed_id, $count)
    {
    }
    function GetUserCache($user_id)
    {
    }
    public static function GetSite($log_id)
    {
    }
    function GetSimpleOrQuery($val, $key, $strOperation, $strNegative, $OrFields, &$arFields, &$arFilter)
    {
    }
}