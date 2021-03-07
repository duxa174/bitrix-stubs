<?php

class CAllSocNetLogComments
{
    /***************************************/
    /********  DATA MODIFICATION  **********/
    /***************************************/
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    public static function Delete($ID, $bSetSource = \false)
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
    /**********  SEND EVENTS  **************/
    /***************************************/
    function SendEvent($ID, $mailTemplate = "SONET_NEW_EVENT", $bTransport = \false)
    {
    }
    public static function UpdateLogData($log_id, $bSetDate = \true, $bSetDateByLastComment = \false)
    {
    }
    public static function SetSource($arFields, $action = \false)
    {
    }
    function SendMentionNotification($arCommentFields)
    {
    }
    function OnSendMentionGetEntityFields_Forum($arCommentFields)
    {
    }
    public static function BatchUpdateLogId($oldLogId, $newLogId)
    {
    }
}