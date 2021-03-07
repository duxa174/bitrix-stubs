<?php

class CAllBlog
{
    public static function IsBlogOwner($ID, $userID)
    {
    }
    function CanUserCreateBlog($userID = 0)
    {
    }
    function CanUserViewBlogs($arUserGroups = array())
    {
    }
    public static function CanUserManageBlog($ID, $userID = 0)
    {
    }
    function GetBlogUserPostPerms($ID, $userID = 0)
    {
    }
    function GetBlogUserCommentPerms($ID, $userID)
    {
    }
    /*************** ADD, UPDATE, DELETE *****************/
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    public static function Delete($ID)
    {
    }
    function SetBlogPerms($ID, $arPerms = array(), $permsType = \BLOG_PERMS_POST)
    {
    }
    public static function SetStat($ID)
    {
    }
    //*************** COMMON UTILS *********************/
    public static function GetFilterOperation($key)
    {
    }
    public static function PrepareSql(&$arFields, $arOrder, &$arFilter, $arGroupBy, $arSelectFields, $obUserFieldsSql = \false)
    {
    }
    //*************** SELECT *********************/
    public static function GetByID($ID)
    {
    }
    public static function GetByOwnerID($ID, $arGroup = array())
    {
    }
    public static function GetByUrl($BLOG_URL, $arGroup = array())
    {
    }
    public static function GetBySocNetGroupID($ID, $arGroup = array())
    {
    }
    function BuildRSS($ID, $type = "RSS .92", $numPosts = 10, $blogTemplate = "", $postTemplate = "", $userTemplate = "", $bSoNet = \false, $arParams = array())
    {
    }
    public static function PreparePath($blogUrl, $siteID = \False, $is404 = \True, $userID = 0, $groupID = 0)
    {
    }
    function IsFriend($ID, $userID)
    {
    }
    function BuildRSSAll($GroupId = 0, $type = "RSS .92", $numPosts = 10, $siteID = \SITE_ID, $postTemplate = "", $userTemplate = "", $arAvBlog = array(), $arPathTemplates = array(), $arGroupID = array(), $bUserSocNet = "N")
    {
    }
    public static function DeleteSocnetRead($ID)
    {
    }
    function GetSocnetReadByBlog($ID)
    {
    }
    public static function SendPing($blogName, $blogUrl, $blogXml = "")
    {
    }
    function GetWritableSocnetBlogs($user_id = 0, $type = "U", $site_id = \SITE_ID)
    {
    }
}