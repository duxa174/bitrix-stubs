<?php

//*****************************************************************************************************************
//	PM
//************************************!****************************************************************************
class CAllForumPrivateMessage
{
    public static function Send($arFields = array())
    {
    }
    public static function Copy($ID, $arFields = array())
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function MakeRead($ID)
    {
    }
    public static function CheckPermissions($ID)
    {
    }
    public static function CheckFields(&$arFields, $update = \false)
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function GetList($arOrder = array("ID" => "DESC"), $arFilter, $bCnt = \false)
    {
    }
    public static function PMSize($USER_ID, $CountMess = \false)
    {
    }
    public static function GetNewPM($FOLDER_ID = \false)
    {
    }
}
//*****************************************************************************************************************
//	PM. Folders.
//************************************!****************************************************************************
class CALLForumPMFolder
{
    public static function Add($title)
    {
    }
    public static function Update($ID, $arFields = array())
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function GetList($arOrder = array("SORT" => "DESC", "TITLE" => "DESC"), $arFilter, $bCnt = \false)
    {
    }
    public static function CheckPermissions($ID)
    {
    }
    public static function Delete($ID)
    {
    }
}