<?php

class CIMMessenger
{
    private $user_id = 0;
    private static $enableMessageCheck = 1;
    const MESSAGE_LIMIT = 20000;
    function __construct($user_id = \false)
    {
    }
    /*
    	$arParams keys:
    	---------------
    	MESSAGE_TYPE: P - private chat, G - group chat, S - notification
    	TO_USER_ID
    	FROM_USER_ID
    	MESSAGE
    	AUTHOR_ID
    	EMAIL_TEMPLATE
    	NOTIFY_TYPE: 1 - confirm, 2 - notify single from, 4 - notify single
    	NOTIFY_MODULE: module id sender (ex: xmpp, main, etc)
    	NOTIFY_EVENT: module event id for search (ex, IM_GROUP_INVITE)
    	NOTIFY_TITLE: notify title to send email
    	NOTIFY_BUTTONS: array of buttons - available with NOTIFY_TYPE = 1
    		Array(
    			Array('TITLE' => 'OK', 'VALUE' => 'Y', 'TYPE' => 'accept', 'URL' => '/test.php?CONFIRM=Y'),
    			Array('TITLE' => 'Cancel', 'VALUE' => 'N', 'TYPE' => 'cancel', 'URL' => '/test.php?CONFIRM=N'),
    		)
    	NOTIFY_TAG: field for group in JS notification and search in table
    	NOTIFY_SUB_TAG: second TAG for search in table
    */
    public static function Add($arFields)
    {
    }
    public static function IsMobileRequest()
    {
    }
    public static function CheckPossibilityUpdateMessage($type, $id, $userId = \null)
    {
    }
    public static function Update($id, $text, $urlPreview = \true, $editFlag = \true, $userId = \null, $byEvent = \false)
    {
    }
    public static function Share($id, $type, $date = '')
    {
    }
    public static function Delete($id, $userId = \null, $completeDelete = \false, $byEvent = \false)
    {
    }
    public static function LinesSessionVote($dialogId, $messageId, $action, $userId = \null)
    {
    }
    public static function Like($id, $action = 'auto', $userId = \null, $byEvent = \false)
    {
    }
    public static function ExecCommand($id, $botId, $command, $commandParams = '', $userId = \null, $byEvent = \false)
    {
    }
    public static function UrlAttachDelete($id, $attachId = \false, $userId = \null)
    {
    }
    private static function CheckFields($arFields)
    {
    }
    public static function GetById($ID, $params = array())
    {
    }
    public static function GetRelationById($ID)
    {
    }
    public static function CheckXmppStatusOnline()
    {
    }
    public static function CheckEnableOpenChat()
    {
    }
    public static function CheckNetwork()
    {
    }
    public static function CheckNetwork2()
    {
    }
    public static function CheckInstallDesktop()
    {
    }
    public static function EnableInVersion($version)
    {
    }
    public static function SetDesktopVersion($version)
    {
    }
    public static function GetDesktopVersion()
    {
    }
    public static function SetDesktopLastActivityDate($timestamp, $deviceType = \IM_DESKTOP_WINDOWS, $userId = \false)
    {
    }
    public static function CheckPhoneStatus()
    {
    }
    public static function CanUserCallCrmNumber()
    {
    }
    public static function CanUserCallUserNumber()
    {
    }
    public static function CanUserCallAnyNumber()
    {
    }
    public static function CanUserPerformCalls()
    {
    }
    public static function CanInterceptCall()
    {
    }
    public static function GetCallCardRestApps()
    {
    }
    public static function GetTelephonyLines()
    {
    }
    public static function GetTelephonyAvailableLines($userId = \null)
    {
    }
    public static function GetDefaultTelephonyLine($userId = \null)
    {
    }
    public static function CheckDesktopStatusOnline($userId = \null)
    {
    }
    public static function GetDesktopStatusOnline($userId = \null)
    {
    }
    public static function SetDesktopStatusOnline($userId = \null, $cache = \true)
    {
    }
    public static function SetDesktopStatusOffline($userId = \null)
    {
    }
    public static function GetSettings($userId = \false)
    {
    }
    public static function GetFormatFilesMessageOut($files)
    {
    }
    public static function GetSessionLifeTime()
    {
    }
    public static function GetUnreadCounter($userId)
    {
    }
    public static function GetMessageCounter($userId, $arMessages = array())
    {
    }
    private static function GetReasonForMessageSendError($type = \IM_MESSAGE_PRIVATE, $reason = '')
    {
    }
    public static function SpeedFileCreate($userID, $value, $type = \IM_SPEED_MESSAGE)
    {
    }
    public static function SpeedFileDelete($userID, $type = \IM_SPEED_MESSAGE)
    {
    }
    public static function SpeedFileExists($userID, $type = \IM_SPEED_MESSAGE)
    {
    }
    public static function SpeedFileGet($userID, $type = \IM_SPEED_MESSAGE)
    {
    }
    public static function GetTemplateJS($arParams, $arTemplate)
    {
    }
    public static function GetMobileTemplateJS($arParams, $arTemplate)
    {
    }
    public static function GetMobileDialogTemplateJS($arParams, $arTemplate)
    {
    }
    public static function StartWriting($dialogId, $userId = \false, $userName = "", $byEvent = \false, $linesSilentMode = \false)
    {
    }
    public static function PrepareSmiles()
    {
    }
    private static function UploadFileFromText($params)
    {
    }
    public static function SendMention($params)
    {
    }
    public static function PrepareParamsForPull($params)
    {
    }
    public static function PreparePushForMentionInChat($params)
    {
    }
    public static function PreparePushForChat($params)
    {
    }
    public static function PreparePushForPrivate($params)
    {
    }
    public static function PrepareParamsForPush($params)
    {
    }
    public static function PrepareMessageForPush($message)
    {
    }
    public static function PrepareEventForPush($command, $event)
    {
    }
    private static function PrepareEventForPushChangeKeys($object, $map)
    {
    }
    public static function PrepareMessageForPushIconCallBack($params)
    {
    }
    /* TMP FUNCTION */
    public static function GetCachePath($id)
    {
    }
    function GetSonetCode($user_id, $site_id = \SITE_ID)
    {
    }
    public static function EnableMessageCheck()
    {
    }
    public static function DisableMessageCheck()
    {
    }
    public static function IsEnabledMessageCheck()
    {
    }
    public static function IsBitrix24UserRestricted()
    {
    }
    public static function IsMysqlDb()
    {
    }
    public static function IsAdmin()
    {
    }
    public static function GetCurrentUserId()
    {
    }
    private static function GetEventByCounterGroup($events, $maxUserInGroup = 100)
    {
    }
}