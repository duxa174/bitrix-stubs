<?php

class CSocNetLogEvents extends \CAllSocNetLogEvents
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
    function GetList($arOrder = array("ID" => "DESC"), $arFilter = array(), $arGroupBy = \false, $arNavStartParams = \false, $arSelectFields = array(), $arParams = array())
    {
    }
    function GetUserLogEvents($userID, $arFilter = array())
    {
    }
}