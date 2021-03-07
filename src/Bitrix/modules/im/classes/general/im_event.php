<?php

class CIMEvent
{
    public static function OnFileDelete($params)
    {
    }
    public static function OnBeforeUserSendPassword($params)
    {
    }
    public static function OnAddRatingVote($id, $arParams)
    {
    }
    public static function OnCancelRatingVote($id, $arParams)
    {
    }
    public static function GetMessageRatingVote($arParams, $bForMail = \false)
    {
    }
    public static function GetMessageRatingEntityURL($url, $user_id = \false, $arSites = \false, $intranet_site_id = \false, $extranet_site_id = \false)
    {
    }
    private static function GetMessageRatingLogCommentURL($arComment, $user_id = \false, $arSites = \false, $intranet_site_id = \false, $extranet_site_id = \false)
    {
    }
    public static function OnAfterUserAdd($arParams)
    {
    }
    public static function OnAfterUserUpdate($arParams)
    {
    }
    public static function OnUserDelete($ID)
    {
    }
    public static function OnGetDependentModule()
    {
    }
}
class DesktopApplication extends \Bitrix\Main\Authentication\Application
{
    protected $validUrls = array("/");
    public static function OnApplicationsBuildList()
    {
    }
}