<?php

class CBlogUser extends \CAllBlogUser
{
    /*************** ADD, UPDATE, DELETE *****************/
    public static function Add($arFields)
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    //*************** SELECT *********************/
    public static function GetList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    public static function GetUserFriendsList($ID, $userID = \False, $bAuth = \False, $limit = 20, $arGroup = array())
    {
    }
}