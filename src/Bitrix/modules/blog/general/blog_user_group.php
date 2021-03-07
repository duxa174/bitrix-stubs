<?php

class CAllBlogUserGroup
{
    /*************** ADD, UPDATE, DELETE *****************/
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    function Delete($ID)
    {
    }
    function SetGroupPerms($ID, $blogID, $postID = 0, $permission = \BLOG_PERMS_DENY, $permsType = \BLOG_PERMS_POST)
    {
    }
    //*************** SELECT *********************/
    function GetByID($ID)
    {
    }
    public static function GetGroupPerms($ID, $blogID, $postID = 0, $permsType = \BLOG_PERMS_POST)
    {
    }
}