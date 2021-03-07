<?php

class CIMStatus
{
    public static $AVAILABLE_STATUSES = array('online', 'dnd', 'away');
    public static $CACHE_USERS = \null;
    public static $CACHE_RECENT = \null;
    const CACHE_TTL = 31536000;
    const CACHE_PATH = '/bx/im/status/';
    const CACHE_ONLINE_TTL = 60;
    const CACHE_ONLINE_PATH = '/bx/im/online/';
    public static function Set($userId, $params)
    {
    }
    public static function SetIdle($userId, $result = \true, $ago = 10)
    {
    }
    public static function SetMobile($userId, $result = \true)
    {
    }
    public static function SetColor($userId, $color)
    {
    }
    private static function PrepareToPush($params)
    {
    }
    private static function PrepareFields($params)
    {
    }
    public static function GetList($params = array())
    {
    }
    public static function GetOnline()
    {
    }
    public static function GetStatus($userId)
    {
    }
    public static function OnUserOnlineStatusGetCustomStatus($userId, $lastseen, $now, $mode)
    {
    }
    public static function getDesktopStatus($dates)
    {
    }
    public static function prepareLastDate($dates)
    {
    }
    public static function Enable()
    {
    }
}