<?php

class CIMNotify
{
    private $user_id = 0;
    private $bHideLink = \false;
    function __construct($user_id = \false, $arParams = array())
    {
    }
    public static function Add($arFields)
    {
    }
    public function GetNotifyList($arParams = array())
    {
    }
    public function GetUnreadNotify($arParams = array())
    {
    }
    public static function GetUnsendNotify()
    {
    }
    public static function GetFlashNotify($unreadNotify)
    {
    }
    public function GetNotify($ID)
    {
    }
    public static function GetFormatNotify($arFields)
    {
    }
    public function MarkNotifyRead($id = 0, $setThisAndHigher = \false, $appId = 'Bitrix24')
    {
    }
    public function MarkNotifyReadBySubTag($subTagList = array())
    {
    }
    public function MarkNotifyUnRead($id = 0, $setThisAndHigher = \false, $appId = 'Bitrix24')
    {
    }
    public static function SetLastId($chatId, $userId, $lastId = \null)
    {
    }
    public static function SetLastSendId($chatId, $lastSendId)
    {
    }
    public function Confirm($id, $value)
    {
    }
    public function Answer($id, $text)
    {
    }
    public static function Delete($ID)
    {
    }
    public function DeleteWithCheck($ID)
    {
    }
    public static function DeleteByTag($notifyTag, $authorId = \false)
    {
    }
    public static function ConfirmBySubTag($notifySubTag, $resultMessages)
    {
    }
    public static function DeleteBySubTag($notifySubTag, $authorId = \false)
    {
    }
    public static function DeleteByModule($moduleId, $moduleEvent = '')
    {
    }
    public function GetNotifyCounter($arNotify = array())
    {
    }
    public static function GetRealCounter($chatId)
    {
    }
    public static function GetRealCounters($chatId)
    {
    }
    public static function GetCounter($chatId)
    {
    }
    public static function GetCounters($chatIds)
    {
    }
}