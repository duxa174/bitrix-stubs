<?php

abstract class CBXAllShortUri
{
    private static $httpStatusCodes = array(301 => "301 Moved Permanently", 302 => "302 Found");
    protected static $arErrors = array();
    public static function GetErrors()
    {
    }
    protected static function AddError($error)
    {
    }
    protected static function ClearErrors()
    {
    }
    public static function Update($id, $arFields)
    {
    }
    public static function GetShortUri($uri)
    {
    }
    public static function GetUri($shortUri)
    {
    }
    public static function SetLastUsed($id)
    {
    }
    public static function Delete($id)
    {
    }
    public static function Crc32($str)
    {
    }
    protected static function ParseFields(&$arFields, $id = 0)
    {
    }
    public static function GetHttpStatusCodeText($code)
    {
    }
    public static function SelectBox($fieldName, $value, $defaultValue = "", $field = "class=\"typeselect\"")
    {
    }
    public static function GenerateShortUri()
    {
    }
    public static function CheckUri()
    {
    }
}