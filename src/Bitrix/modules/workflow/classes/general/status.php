<?php

class CWorkflowStatus
{
    public static function err_mess()
    {
    }
    //Despite this function is not documented it should be version compatible
    public static function GetList(&$by, &$order, $arFilter = array(), &$is_filtered, $arSelect = array())
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function GetDropDownList($SHOW_ALL = "N", $strOrder = "desc", $arFilter = array())
    {
    }
    public static function GetNextSort()
    {
    }
    //check fields before writing
    function CheckFields($ID, $arFields)
    {
    }
    //add
    function Add($arFields)
    {
    }
    //update
    function Update($ID, $arFields)
    {
    }
    function SetPermissions($STATUS_ID, $arGroups, $PERMISSION_TYPE = 1)
    {
    }
}