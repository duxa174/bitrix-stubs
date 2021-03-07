<?php

class CForumRestService extends \IRestService
{
    const PERM_DENY = 'D';
    const PERM_READ = 'R';
    const PERM_WRITE = 'W';
    public static function OnRestServiceBuildDescription()
    {
    }
    public static function getUserMessage($arParams, $offset, \CRestServer $server)
    {
    }
    public static function deleteMessage($arFields)
    {
    }
    private static function getForumMessagePerm($arFields)
    {
    }
    private static function getForumMessageFields($messageId)
    {
    }
    private static function isAdmin()
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
}