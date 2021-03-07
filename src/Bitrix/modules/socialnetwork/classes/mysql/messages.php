<?php

class CSocNetMessages extends \CAllSocNetMessages
{
    /***************************************/
    /********  DATA MODIFICATION  **********/
    /***************************************/
    function Add($arFields)
    {
    }
    function Update($ID, $arFields)
    {
    }
    /***************************************/
    /**********  DATA SELECTION  ***********/
    /***************************************/
    public static function GetList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array())
    {
    }
    function GetChatLastDate($currentUserID, $userID)
    {
    }
    function GetMessagesForChat($currentUserID, $userID, $date = \false, $arNavStartParams = \false, $replyMessId = \false)
    {
    }
    function GetMessagesUsers($userID, $arNavStartParams = \false, $online_interval = 120)
    {
    }
    function Now()
    {
    }
}