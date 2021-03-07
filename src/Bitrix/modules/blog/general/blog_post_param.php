<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage blog
 * @copyright 2001-2013 Bitrix
 */
class CBlogUserOptions
{
    protected static $__USER_OPTIONS_CACHE;
    public static function GetList($arOrder = array("ID" => "ASC"), $arFilter = array(), $arAddParams = array())
    {
    }
    public static function GetOption($post_id, $name, $default_value = \false, $user_id = \false)
    {
    }
    public static function SetOption($post_id, $name, $value, $user_id = \false)
    {
    }
    public static function DeleteOption($post_id, $name, $user_id = \false)
    {
    }
    public static function DeleteUsersOptions($user_id = \false)
    {
    }
    //*****************************
    // Events
    //*****************************
    //user deletion event
    public static function OnUserDelete($user_id)
    {
    }
    protected static function _clear_cache($user_id = 0)
    {
    }
}