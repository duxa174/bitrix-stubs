<?php

class CAllBlogUser
{
    public static function IsLocked($userID)
    {
    }
    public static function CanUserUpdateUser($ID, $userID, $selectType = \BLOG_BY_BLOG_USER_ID)
    {
    }
    /*************** ADD, UPDATE, DELETE *****************/
    public static function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function DeleteFromUserGroup($ID, $blogID, $selectType = \BLOG_BY_BLOG_USER_ID)
    {
    }
    public static function AddToUserGroup($ID, $blogID, $arGroups = array(), $joinStatus = "Y", $selectType = \BLOG_BY_BLOG_USER_ID, $action = \BLOG_CHANGE)
    {
    }
    public static function SetLastVisit()
    {
    }
    //*************** SELECT *********************/
    public static function GetByID($ID, $selectType = \BLOG_BY_BLOG_USER_ID)
    {
    }
    public static function GetUserFriends($ID, $bFlag = \True)
    {
    }
    public static function GetUserGroups($ID, $blogID, $joinStatus = "", $selectType = \BLOG_BY_BLOG_USER_ID, $bUrl = \false)
    {
    }
    public static function GetUserPerms($arGroups, $blogID, $postID = 0, $permsType = \BLOG_PERMS_POST, $selectType = \BLOG_BY_BLOG_USER_ID)
    {
    }
    public static function GetUserName($alias, $name, $lastName, $login, $secondName = "")
    {
    }
    public static function GetUserNameEx($arUser, $arBlogUser, $arParams)
    {
    }
    public static function PreparePath($userID = 0, $siteID = \False, $is404 = \True)
    {
    }
    public static function PreparePath2User($arParams = array())
    {
    }
    public static function GetUserIP()
    {
    }
    public static function GetUserInfo($id, $path, $arParams = array())
    {
    }
    public static function GetUserInfoArray($arId, $path, $arParams = array())
    {
    }
}