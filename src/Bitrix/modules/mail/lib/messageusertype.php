<?php

namespace Bitrix\Mail;

class MessageUserType
{
    const USER_TYPE_ID = 'mail_message';
    public static function getUserTypeDescription()
    {
    }
    public static function getDbColumnType($userField)
    {
    }
    public static function getPublicView($userField, $params)
    {
    }
    public static function getPublicEdit($userField, $params)
    {
    }
    protected static function getPublicHtml($userField, $params, $mode = 'view')
    {
    }
    public static function onBeforeSaveAll($userField, $mailIds, $userId)
    {
    }
    public static function onBeforeSave($userField, $mailMessageId, $userId)
    {
    }
    public static function onDelete($userField, $messageId)
    {
    }
    private static function deleteList($filter)
    {
    }
    private static function sendEntityCreatedEvents($message, $userField)
    {
    }
}