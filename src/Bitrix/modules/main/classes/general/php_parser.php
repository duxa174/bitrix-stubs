<?php

/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2013 Bitrix
 */
class PHPParser
{
    protected static $arAllStr;
    public static function ReplString($str, $arAllStr)
    {
    }
    public static function getString($matches)
    {
    }
    public static function getQuotedString($matches)
    {
    }
    public static function GetParams($params)
    {
    }
    public static function GetParamsRec($params, &$arAllStr, &$arResult)
    {
    }
    // Parse string and check if it is a component call. Return call params array
    public static function CheckForComponent($str)
    {
    }
    public static function GetComponentParams($instruction, $arAllStr)
    {
    }
    public static function ParseScript($scriptContent)
    {
    }
    // Components 2. Parse string and check if it is a component call. Return call params array
    public static function CheckForComponent2($str)
    {
    }
    // Parse file and return all PHP blocks in array
    public static function ParseFile($filesrc, $limit = \false)
    {
    }
    public static function PreparePHP($str)
    {
    }
    // Return PHP string of component call params
    public static function ReturnPHPStr($arVals, $arParams)
    {
    }
    public static function ReturnPHPStrRec($arVal, $level, $comm = "")
    {
    }
    // Components 2. Return PHP string of component call params
    public static function ReturnPHPStr2($arVals, $arParams = array())
    {
    }
    public static function FindComponent($component_name, $filesrc, $src_line)
    {
    }
    public static function getPhpChunks($filesrc, $limit = \false)
    {
    }
    public static function getPageTitle($filesrc, $prolog = \false)
    {
    }
    public static function getComponentFunctionStrings()
    {
    }
}