<?php

namespace Bitrix\Im\Integration\Intranet;

class User
{
    static $isEmployee = [];
    const INVITE_MAX_USER_NOTIFY = 50;
    public static function onInviteLinkCopied(\Bitrix\Main\Event $event) : bool
    {
    }
    public static function onUserInvited(\Bitrix\Main\Event $event) : bool
    {
    }
    public static function onUserAdded(\Bitrix\Main\Event $event) : bool
    {
    }
    public static function onUserAdminRights(\Bitrix\Main\Event $event) : bool
    {
    }
    public static function onInviteSend(array $params) : bool
    {
    }
    public static function onInviteAccepted(array $params) : bool
    {
    }
    private static function sendInviteEvent(array $users, $invited) : bool
    {
    }
    private static function sendMessageToGeneralChat(int $fromUserId, array $params) : bool
    {
    }
    private static function getUserBlock(int $userId) : string
    {
    }
    private static function isEmployee(int $userId) : bool
    {
    }
    public static function registerEventHandler()
    {
    }
    public static function unRegisterEventHandler()
    {
    }
}