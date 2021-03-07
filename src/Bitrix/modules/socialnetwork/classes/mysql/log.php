<?php

class CSocNetLog extends \CAllSocNetLog
{
    /***************************************/
    /********  DATA MODIFICATION  **********/
    /***************************************/
    function Add($arFields, $bSendEvent = \true)
    {
    }
    function Update($ID, $arFields)
    {
    }
    function ClearOld($days = 90)
    {
    }
    /***************************************/
    /**********  DATA SELECTION  ***********/
    /***************************************/
    function GetList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array(), $arParams = array())
    {
    }
    function DeleteSystemEventsByGroupID($group_id = \false)
    {
    }
    function Delete($ID)
    {
    }
    function DeleteNoDemand($userID)
    {
    }
    function OnBlogDelete($blog_id)
    {
    }
}