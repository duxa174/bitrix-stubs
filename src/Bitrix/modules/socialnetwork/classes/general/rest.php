<?php

class CSocNetLogRestService extends \IRestService
{
    const PERM_DENY = 'D';
    const PERM_READ = 'R';
    const PERM_WRITE = 'W';
    private static $arAllowedOperations = array('', '!', '<', '<=', '>', '>=', '><', '!><', '?', '=', '!=', '%', '!%', '');
    public static function OnRestServiceBuildDescription()
    {
    }
    public static function createEventInfo($moduleName, $eventName, array $callback)
    {
    }
    private static function getBlogPostEventId()
    {
    }
    private static function getBlogCommentEventId()
    {
    }
    private static function getLogCommentEventId()
    {
    }
    public static function getBlogPost($arFields, $n, $server)
    {
    }
    public static function getUserBlogPost($arParams, $offset, \CRestServer $server)
    {
    }
    public static function addBlogPost($arFields)
    {
    }
    public static function updateBlogPost($arFields)
    {
    }
    public static function deleteBlogPost($arFields)
    {
    }
    public static function shareBlogPost($arFields)
    {
    }
    public static function getBlogPostUsersImprtnt($arFields)
    {
    }
    public static function getUserBlogComment($arParams, $offset, \CRestServer $server)
    {
    }
    public static function addBlogComment($arFields)
    {
    }
    public static function deleteBlogComment($arFields)
    {
    }
    public static function getUserLogComment($arParams, $offset, \CRestServer $server)
    {
    }
    public static function deleteLogComment($arFields)
    {
    }
    private static function getBlogPostPerm($arFields)
    {
    }
    private static function getBlogCommentPerm($arFields)
    {
    }
    private static function getLogCommentPerm($arFields)
    {
    }
    private static function getBlogPostFields($postId)
    {
    }
    private static function getBlogCommentFields($commentId)
    {
    }
    private static function getLogCommentFields($commentId)
    {
    }
    private static function getFileData($diskObjectId)
    {
    }
    private static function convertFileData($fileData)
    {
    }
    private static function getPublicDomain()
    {
    }
    public static function createGroup($arFields)
    {
    }
    public static function updateGroup($arFields)
    {
    }
    public static function deleteGroup($arFields)
    {
    }
    public static function setGroupOwner($arFields)
    {
    }
    public static function getGroup($arFields, $n, $server)
    {
    }
    public static function getGroupUsers($arFields, $n, $server)
    {
    }
    public static function inviteGroupUsers($arFields)
    {
    }
    public static function requestGroupUser($arFields)
    {
    }
    public static function addGroupUsers($arFields)
    {
    }
    public static function updateGroupUsers($arFields)
    {
    }
    public static function deleteGroupUsers($arFields)
    {
    }
    public static function getUserGroups($arFields, $n, $server)
    {
    }
    public static function getGroupFeatureAccess($arFields)
    {
    }
    private static function checkGroupFilter($arFilter)
    {
    }
    private static function getFile($fileId)
    {
    }
    private static function isAdmin()
    {
    }
    public static function getGroupSubject($arFields, $n, $server)
    {
    }
    public static function updateGroupSubject($arFields)
    {
    }
    public static function deleteGroupSubject($arFields)
    {
    }
    public static function addGroupSubject($arFields)
    {
    }
}
class CSocNetLogBlogPostRestProxy
{
    public static function processEvent(array $arParams, array $arHandler)
    {
    }
}
class CSocNetGroupRestProxy
{
    public static function processEvent(array $arParams, array $arHandler)
    {
    }
}
class CSocNetGroupSubjectRestProxy
{
    public static function processEvent(array $arParams, array $arHandler)
    {
    }
}