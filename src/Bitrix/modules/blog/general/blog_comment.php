<?php

class CAllBlogComment
{
    const UF_NAME = 'UF_BLOG_COMMENT_DOC';
    /*************** ADD, UPDATE, DELETE *****************/
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    public static function Delete($ID)
    {
    }
    //*************** SELECT *********************/
    public static function GetByID($ID)
    {
    }
    function BuildRSS($postID, $blogID, $type = "RSS2.0", $numPosts = 10, $arPathTemplate = array())
    {
    }
    public static function _IndexPostComments($arParams = array())
    {
    }
    public static function UpdateLog($commentID, $arBlogUser, $arUser, $arComment, $arPost, $arParams)
    {
    }
    public static function DeleteLog($commentID)
    {
    }
    public static function GetSocNetPostsPerms($entity_type, $entity_id)
    {
    }
    public static function GetSocNetCommentPerms($postID = 0)
    {
    }
    public static function GetSocNetUserPerms($postId = 0, $authorId = 0, $userId = 0)
    {
    }
    public static function GetSocNetUserPermsNew($postId = 0, $authorId = 0, $userId = 0, &$permsBySG)
    {
    }
    public static function GetMentionedUserID($arFields)
    {
    }
    /**
     * Use component main.post.list to work with LiveFeed
     * @param int $commentId Comment ID which needs to send.
     * @param array $arParams Array of settings (DATE_TIME_FORMAT, SHOW_RATING, PATH_TO_USER, AVATAR_SIZE, NAME_TEMPLATE, SHOW_LOGIN)
     * @return string
     */
    public static function addLiveComment($commentId = 0, $arParams = array())
    {
    }
    public static function BuildUFFields($arUF)
    {
    }
}