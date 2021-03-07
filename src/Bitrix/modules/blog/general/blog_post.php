<?php

class CAllBlogPost
{
    public static $arSocNetPostPermsCache = array();
    public static $arUACCache = array();
    public static $arBlogPostCache = array();
    public static $arBlogPostIdCache = array();
    public static $arBlogPCCache = array();
    public static $arBlogUCache = array();
    const UF_NAME = 'UF_BLOG_POST_DOC';
    function CanUserEditPost($ID, $userID)
    {
    }
    public static function CanUserDeletePost($ID, $userID)
    {
    }
    public static function GetBlogUserPostPerms($ID, $userID)
    {
    }
    public static function GetBlogUserCommentPerms($ID, $userID)
    {
    }
    /*************** ADD, UPDATE, DELETE *****************/
    public static function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    function SetPostPerms($ID, $arPerms = array(), $permsType = \BLOG_PERMS_POST)
    {
    }
    public static function Delete($ID)
    {
    }
    //*************** SELECT *********************/
    public static function PreparePath($blogUrl, $postID = 0, $siteID = \False, $is404 = \True, $userID = 0, $groupID = 0)
    {
    }
    function PreparePath2Post($realUrl, $url, $arParams = array())
    {
    }
    public static function CounterInc($ID)
    {
    }
    public static function Notify($arPost, $arBlog, $arParams)
    {
    }
    public static function UpdateLog($postID, $arPost, $arBlog, $arParams)
    {
    }
    public static function DeleteLog($postID, $bMicroblog = \false)
    {
    }
    public static function GetID($code, $blogID)
    {
    }
    public static function GetPostID($postID, $code, $allowCode = \false)
    {
    }
    public static function AddSocNetPerms($ID, $perms = array(), $arPost = array())
    {
    }
    public static function UpdateSocNetPerms($ID, $perms = array(), $arPost = array())
    {
    }
    public static function __AddSocNetPerms($ID, $entityType = "", $entityID = 0, $entity)
    {
    }
    public static function GetSocNetGroups($entity_type, $entity_id, $operation = "view_post")
    {
    }
    public static function getFullGroupRoleSet($role = "", $prefix = "")
    {
    }
    public static function getSocNetPerms($ID, $useCache = \true)
    {
    }
    public static function GetSocNetPermsName($ID)
    {
    }
    public static function GetSocNetPermsCode($ID)
    {
    }
    public static function ChangeSocNetPermission($entity_type, $entity_id, $operation)
    {
    }
    public static function GetSocNetPostsPerms($entity_type, $entity_id)
    {
    }
    public static function GetSocNetPostPerms($postId = 0, $bNeedFull = \false, $userId = \false, $postAuthor = 0)
    {
    }
    public static function NotifyIm($arParams)
    {
    }
    public static function NotifyImReady($arParams = array())
    {
    }
    public static function NotifyImPublish($arParams = array())
    {
    }
    private static function processNotifyTitle($title)
    {
    }
    public static function NotifyMail($arFields)
    {
    }
    public static function DeleteSocNetPostPerms($postId)
    {
    }
    public static function GetMentionedUserID($arFields)
    {
    }
}