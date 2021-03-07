<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2013 Bitrix
 */
class CUserOptions
{
    protected static $cache = array();
    public static function GetList($arOrder = array("ID" => "ASC"), $arFilter = array())
    {
    }
    public static function GetOption($category, $name, $default_value = \false, $user_id = \false)
    {
    }
    public static function SetOption($category, $name, $value, $bCommon = \false, $user_id = \false)
    {
    }
    public static function SetOptionsFromArray($aOptions)
    {
    }
    public static function DeleteOption($category, $name, $bCommon = \false, $user_id = \false)
    {
    }
    public static function DeleteCommonOptions()
    {
    }
    public static function DeleteUsersOptions($user_id = \false)
    {
    }
    public static function DeleteOptionsByName($category, $name)
    {
    }
    public static function SetCookieOptions($cookieName)
    {
    }
    //*****************************
    // Events
    //*****************************
    //user deletion event
    public static function OnUserDelete($user_id)
    {
    }
}