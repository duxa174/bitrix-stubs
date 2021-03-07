<?php

class CForumMessage extends \CAllForumMessage
{
    public static function Add($arFields, $strUploadDir = \false, $arParams = array())
    {
    }
    public static function GetList($arOrder = array("ID" => "ASC"), $arFilter = array(), $bCount = \false, $iNum = 0, $arAddParams = array())
    {
    }
    public static function GetListEx($arOrder = array("ID" => "ASC"), $arFilter = array(), $bCount = \false, $iNum = 0, $arAddParams = array())
    {
    }
    public static function QueryFirstUnread($arFilter)
    {
    }
}
class CForumFiles extends \CAllForumFiles
{
    public static function GetList($arOrder = array("ID" => "ASC"), $arFilter = array(), $iNum = 0, $arAddParams = array())
    {
    }
    public static function CleanUp()
    {
    }
}