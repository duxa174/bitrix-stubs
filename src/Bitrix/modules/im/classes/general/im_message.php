<?php

class CIMMessage
{
    private $user_id = 0;
    private $bHideLink = \false;
    function __construct($user_id = \false, $arParams = array())
    {
    }
    public static function Add($arFields)
    {
    }
    public function GetMessage($id, $files = \false)
    {
    }
    public static function UpdateMessageOut($id, $messageOut)
    {
    }
    public function GetUnreadMessage($arParams = array())
    {
    }
    function GetLastMessage($toUserId, $fromUserId = \false, $loadUserData = \false, $bTimeZone = \true, $limit = \true)
    {
    }
    function GetLastSendMessage($arParams)
    {
    }
    public static function GetUnsendMessage($order = "ASC")
    {
    }
    public function SetReadMessage($fromUserId, $lastId = \null, $byEvent = \false)
    {
    }
    public function SetUnReadMessage($fromUserId, $lastId)
    {
    }
    public static function SetReadMessageAll($fromUserId)
    {
    }
    public static function SetLastId($chatId, $userId, $lastId = \null)
    {
    }
    public static function SetLastIdForUnread($chatId, $userId, $lastId)
    {
    }
    public static function SetLastSendId($chatId, $userId, $lastSendId)
    {
    }
    public static function GetFlashMessage($unreadMessage)
    {
    }
    public static function Delete($id, $userId = \null, $completeDelete = \false, $byEvent = \false)
    {
    }
    /**
     * @param $arParams
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function GetFormatMessage($arParams)
    {
    }
    public static function GetChatId($fromUserId, $toUserId)
    {
    }
}