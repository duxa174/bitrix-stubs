<?php

class CGlobalCounter
{
    const ALL_SITES = '**';
    public static function GetValue($code, $site_id = \SITE_ID)
    {
    }
    public static function GetValues($site_id = \SITE_ID, &$arLastDate = array())
    {
    }
    public static function GetAllValues()
    {
    }
    public static function GetLastDate($code, $site_id = \SITE_ID)
    {
    }
    public static function Set($code, $value, $site_id = \SITE_ID, $tag = '', $sendPull = \true)
    {
    }
    public static function Increment($code, $site_id = \SITE_ID, $sendPull = \true, $increment = 1)
    {
    }
    public static function Decrement($code, $site_id = \SITE_ID, $sendPull = \true, $decrement = 1)
    {
    }
    public static function IncrementWithSelect($sub_select, $sendPull = \true, $arParams = array())
    {
    }
    public static function Clear($code, $site_id = \SITE_ID, $sendPull = \true)
    {
    }
    public static function ClearAll($site_id = \SITE_ID, $sendPull = \true)
    {
    }
    public static function ClearByTag($tag, $code, $site_id = \SITE_ID, $sendPull = \true)
    {
    }
}