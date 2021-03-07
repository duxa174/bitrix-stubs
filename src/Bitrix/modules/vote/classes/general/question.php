<?php

class CAllVoteQuestion
{
    function err_mess()
    {
    }
    function CheckFields($ACTION, &$arFields, $ID = 0)
    {
    }
    function Add($arFields, $strUploadDir = \false)
    {
    }
    public static function Update($ID, $arFields, $strUploadDir = \false)
    {
    }
    public static function Copy($ID, $newVoteID)
    {
    }
    function GetNextSort($VOTE_ID)
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function GetList($VOTE_ID, &$by, &$order, $arFilter = array(), &$is_filtered)
    {
    }
    function GetListEx($arOrder = array("ID" => "ASC"), $arFilter = array())
    {
    }
    public static function Delete($ID, $VOTE_ID = \false)
    {
    }
    public static function Reset($ID, $VOTE_ID = \false)
    {
    }
    public static function setActive($ID, $activate = \true)
    {
    }
}