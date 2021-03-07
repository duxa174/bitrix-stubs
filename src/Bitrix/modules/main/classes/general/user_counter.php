<?php

class CAllUserCounter
{
    const ALL_SITES = '**';
    const LIVEFEED_CODE = '**';
    const SYSTEM_USER_ID = 0;
    protected static $counters = \false;
    public static function GetValue($user_id, $code, $site_id = \SITE_ID)
    {
    }
    public static function GetValues($user_id, $site_id = \SITE_ID, &$arLastDate = array())
    {
    }
    public static function GetAllValues($user_id)
    {
    }
    public static function GetLastDate($user_id, $code, $site_id = \SITE_ID)
    {
    }
    public static function ClearAll($user_id, $site_id = \SITE_ID, $sendPull = \true)
    {
    }
    public static function ClearByTag($tag, $code, $site_id = \SITE_ID, $sendPull = \true)
    {
    }
    public static function CheckLiveMode()
    {
    }
    protected static function SendPullEvent($user_id, $code = "", $bMultiple = \false)
    {
    }
    public static function addValueToPullMessage($row, $arSites = array(), &$pullMessage = array())
    {
    }
    public static function getGroupedCounters($counters)
    {
    }
    public static function getGroupedCounterRecords($records)
    {
    }
    private static function getGroupedCode($code)
    {
    }
    public static function OnSocNetLogCommentDelete($commentId)
    {
    }
    public static function OnSocNetLogDelete($logId)
    {
    }
    // legacy function
    public static function GetValueByUserID($user_id, $site_id = \SITE_ID, $code = self::ALL_SITES)
    {
    }
    public static function GetCodeValuesByUserID($user_id, $site_id = \SITE_ID)
    {
    }
    public static function GetLastDateByUserAndCode($user_id, $site_id = \SITE_ID, $code = self::ALL_SITES)
    {
    }
    public static function DeleteOld()
    {
    }
}
class CAllUserCounterPage
{
    protected static function setUserIdOption($value = \false)
    {
    }
    protected static function getUserIdOption()
    {
    }
    public static function getPageSizeOption($defaultValue = 100)
    {
    }
    public static function setNewEvent()
    {
    }
    protected static function getMinMax($prevMax = 0)
    {
    }
}