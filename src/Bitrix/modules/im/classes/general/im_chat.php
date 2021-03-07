<?php

class CIMChat
{
    const CHAT_ALL = 'all';
    const GENERAL_MESSAGE_TYPE_JOIN = 'join';
    const GENERAL_MESSAGE_TYPE_LEAVE = 'leave';
    private $user_id = 0;
    private $bHideLink = \false;
    public $lastAvatarId = 0;
    private static $entityOption = \null;
    function __construct($user_id = \null, $arParams = array())
    {
    }
    public function GetMessage($ID)
    {
    }
    /**
     * @param $toChatId
     * @param bool $fromUserId
     * @param bool $loadExtraData
     * @param bool $bTimeZone
     * @param bool $limit
     * @return array|bool
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    function GetLastMessage($toChatId, $fromUserId = \false, $loadExtraData = \false, $bTimeZone = \true, $limit = \true)
    {
    }
    function GetLastMessageLimit($chatId, $messageStartId, $messageEndId = 0, $loadExtraData = \false, $bTimeZone = \true, $order = 'DESC')
    {
    }
    public static function getChatType($chatData)
    {
    }
    public function GetLastSendMessage($arParams)
    {
    }
    public static function GetRelationById($ID, $userId = \false)
    {
    }
    public function GetPersonalChat()
    {
    }
    public static function GetPrivateRelation($fromUserId, $toUserId)
    {
    }
    public static function GetGeneralChatId()
    {
    }
    public static function InstallGeneralChat($agentMode = \false)
    {
    }
    public static function GetGeneralChatAutoMessageStatus($type)
    {
    }
    public static function CanSendMessageToGeneralChat($userId)
    {
    }
    public static function SetAccessToGeneralChat($allowAll = \true, $allowCodes = array())
    {
    }
    public static function CanJoinGeneralChatId($userId)
    {
    }
    public static function linkGeneralChatId($chatId)
    {
    }
    public static function UnlinkGeneralChatId()
    {
    }
    public static function GetChatData($arParams = array())
    {
    }
    public static function GetOpenChatData($arParams = array())
    {
    }
    public function SetReadMessage($chatId, $lastId = \null, $byEvent = \false)
    {
    }
    public function SetUnReadMessage($chatId, $lastId)
    {
    }
    public function GetUnreadMessage($arParams = array())
    {
    }
    public function SetOwner($chatId, $userId, $checkPermission = \true)
    {
    }
    public function SetDescription($chatId, $description)
    {
    }
    public static function SetChatParams($chatId, $params)
    {
    }
    public function SetManager($chatId, $userId, $isManager = \true, $checkPermission = \true)
    {
    }
    public function SetManagers($chatId, $users, $checkPermission = \true)
    {
    }
    public function SetColor($chatId, $color)
    {
    }
    public function SetAvatarId($chatId, $fileId)
    {
    }
    public function Rename($chatId, $title, $checkPermission = \true, $sendMessage = \true)
    {
    }
    public function Add($arParams)
    {
    }
    public static function AddMessage($arFields)
    {
    }
    public static function AddGeneralMessage($arFields)
    {
    }
    public function Join($chatId)
    {
    }
    public function JoinParent($chatId, $messageId)
    {
    }
    public function AddUser($chatId, $userId, $hideHistory = \null, $skipMessage = \false, $skipRecent = \false)
    {
    }
    public function MuteNotify($chatId, $mute = \true)
    {
    }
    public function DeleteUser($chatId, $userId, $checkPermission = \true, $skipMessage = \false, $skipRecent = \false)
    {
    }
    public static function GetAvatarImage($id, $size = 200, $addBlankPicture = \true)
    {
    }
    public static function AddSystemMessage($params)
    {
    }
    public static function CheckRestriction($chatId, $action)
    {
    }
    public static function GetChatOptions()
    {
    }
    public static function GetSonetGroupChatId($groupId)
    {
    }
    public static function GetCrmChatId($code)
    {
    }
    public static function GetUserCount($chatId)
    {
    }
    public static function DeleteEntityChat($entityType, $entityId)
    {
    }
    public static function hide($chatId)
    {
    }
    public static function index($chatId)
    {
    }
}