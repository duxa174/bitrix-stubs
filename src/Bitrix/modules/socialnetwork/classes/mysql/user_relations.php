<?php

class CSocNetUserRelations extends \CAllSocNetUserRelations
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
    function GetListBirthday($userID, $number = 5, $online_interval = 120)
    {
    }
    function GetRelationsTop($userID, $number = 100)
    {
    }
}