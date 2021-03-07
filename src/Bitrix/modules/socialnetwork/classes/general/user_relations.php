<?php

class CAllSocNetUserRelations
{
    /***************************************/
    /********  DATA MODIFICATION  **********/
    /***************************************/
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    public static function Delete($ID)
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
    function GetByUserID($user1ID, $user2ID)
    {
    }
    public static function GetRelatedUsers($userID, $relation, $arNavStartParams = \false, $bActiveOnly = "N")
    {
    }
    /***************************************/
    /**********  COMMON METHODS  ***********/
    /***************************************/
    public static function GetRelation($firstUserID, $secondUserID)
    {
    }
    public static function IsFriends($firstUserID, $secondUserID)
    {
    }
    function IsFriends2($firstUserID, $secondUserID)
    {
    }
    /***************************************/
    /**********  SEND EVENTS  **************/
    /***************************************/
    function SendEvent($relationID, $mailType = "INVITE_FRIEND")
    {
    }
    /***************************************/
    /************  ACTIONS  ****************/
    /***************************************/
    function SendRequestToBeFriend($senderUserID, $targetUserID, $message)
    {
    }
    public static function ConfirmRequestToBeFriend($senderUserID, $relationID, $bAutoSubscribe = \true)
    {
    }
    public static function RejectRequestToBeFriend($senderUserID, $relationID)
    {
    }
    function DeleteRelation($senderUserID, $targetUserID)
    {
    }
    function BanUser($senderUserID, $targetUserID)
    {
    }
    function UnBanMember($senderUserID, $relationID)
    {
    }
    function __SpeedFileCheckMessages($userID)
    {
    }
    function __SpeedFileCreate($userID)
    {
    }
    function __SpeedFileDelete($userID)
    {
    }
    function SpeedFileExists($userID)
    {
    }
    /* Module IM callback */
    function OnBeforeConfirmNotify($module, $tag, $value, $arParams)
    {
    }
}