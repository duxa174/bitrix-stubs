<?php

class CAllSocNetUserToGroup
{
    protected static $roleCache = array();
    /***************************************/
    /********  DATA MODIFICATION  **********/
    /***************************************/
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    public static function Delete($ID, $bSendExclude = \false)
    {
    }
    public static function DeleteNoDemand($userID)
    {
    }
    /***************************************/
    /**********  DATA SELECTION  ***********/
    /***************************************/
    public static function GetByID($ID)
    {
    }
    /***************************************/
    /**********  COMMON METHODS  ***********/
    /***************************************/
    public static function GetUserRole($userID, $groupID, $bExtendedReturn = \false)
    {
    }
    /***************************************/
    /**********  SEND EVENTS  **************/
    /***************************************/
    function SendEvent($userGroupID, $mailTemplate = "SONET_INVITE_GROUP")
    {
    }
    /***************************************/
    /************  ACTIONS  ****************/
    /***************************************/
    public static function SendRequestToBeMember($userID, $groupID, $message, $RequestConfirmUrl = "", $bAutoSubscribe = \true)
    {
    }
    public static function SendRequestToJoinGroup($senderID, $userID, $groupID, $message, $bMail = \true)
    {
    }
    public static function ConfirmRequestToBeMember($userID, $groupID, $arRelationID, $bAutoSubscribe = \true)
    {
    }
    public static function RejectRequestToBeMember($userID, $groupID, $arRelationID)
    {
    }
    public static function UserConfirmRequestToBeMember($targetUserID, $relationID, $bAutoSubscribe = \true)
    {
    }
    public static function UserRejectRequestToBeMember($targetUserID, $relationID)
    {
    }
    public static function TransferModerator2Member($userID, $groupID, $arRelationID, $currentUserIsAdmin)
    {
    }
    public static function TransferMember2Moderator($userID, $groupID, $arRelationID, $currentUserIsAdmin)
    {
    }
    public static function BanMember($userID, $groupID, $arRelationID, $currentUserIsAdmin)
    {
    }
    public static function UnBanMember($userID, $groupID, $arRelationID, $currentUserIsAdmin)
    {
    }
    public static function SetOwner($userID, $groupID, $arGroup = \false)
    {
    }
    public static function DeleteRelation($userID, $groupID)
    {
    }
    public static function InitUserPerms($userID, $arGroup, $bCurrentUserIsAdmin)
    {
    }
    public static function __SpeedFileCheckMessages($userID)
    {
    }
    public static function __SpeedFileCreate($userID)
    {
    }
    public static function __SpeedFileDelete($userID)
    {
    }
    function SpeedFileExists($userID)
    {
    }
    /* Module IM callback */
    function OnBeforeConfirmNotify($module, $tag, $value, $arParams)
    {
    }
    public static function NotifyImToModerators($arNotifyParams)
    {
    }
    public static function getMessage($message)
    {
    }
    public static function notifyModeratorAdded($params)
    {
    }
}