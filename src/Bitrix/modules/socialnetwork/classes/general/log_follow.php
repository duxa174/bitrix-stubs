<?php

class CSocNetLogFollow
{
    public static function Set($user_id, $code = "**", $type = "Y", $follow_date = \false, $site_id = \SITE_ID, $bByWF = \false)
    {
    }
    public static function Add($user_id, $code, $type, $follow_date = \false, $bByWF = \false)
    {
    }
    public static function Update($user_id, $code, $type, $follow_date = \false, $bByWF = \false)
    {
    }
    public static function Delete($user_id, $code, $type = \false)
    {
    }
    public static function DeleteByLogID($log_id, $type = \false, $bUseSmartLogic = \false)
    {
    }
    public static function GetExactValueByRating($user_id, $rating_type_id, $rating_entity_id)
    {
    }
    public static function GetList($arFilter = array(), $arSelectFields = array())
    {
    }
    public static function GetDefaultValue($user_id)
    {
    }
    function OnBlogPostMentionNotifyIm($ID, $arMessageFields)
    {
    }
    public static function checkAutoUnfollow($traffic_cnt, $traffic_avg, $userId = \false)
    {
    }
    function OnBeforeConfirmNotify($module, $tag, $value, $arParams)
    {
    }
}