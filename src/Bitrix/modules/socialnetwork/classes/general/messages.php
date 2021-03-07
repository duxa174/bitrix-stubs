<?php

class CAllSocNetMessages
{
    /***************************************/
    /********  DATA MODIFICATION  **********/
    /***************************************/
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    function Delete($ID)
    {
    }
    function DeleteMessage($ID, $userID, $bCheckMessages = \true)
    {
    }
    public static function DeleteNoDemand($userID)
    {
    }
    /***************************************/
    /**********  DATA SELECTION  ***********/
    /***************************************/
    function GetByID($ID)
    {
    }
    /***************************************/
    /**********  SEND EVENTS  **************/
    /***************************************/
    function SendEvent($messageID, $mailTemplate = "SONET_NEW_MESSAGE")
    {
    }
    /***************************************/
    /************  ACTIONS  ****************/
    /***************************************/
    function MarkMessageRead($senderUserID, $messageID, $bRead = \true)
    {
    }
    function CreateMessage($senderUserID, $targetUserID, $message, $title = \false)
    {
    }
    function MarkMessageReadMultiple($userID, $arIDs)
    {
    }
    function DeleteMessageMultiple($userID, $arIDs)
    {
    }
    function DeleteConversation($CurrentUserID, $PartnerUserID)
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
    function SendEventAgent()
    {
    }
}