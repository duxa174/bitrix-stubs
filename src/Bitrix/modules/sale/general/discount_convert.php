<?php

class CSaleDiscountConvert
{
    public static $intConvertPerStep = 0;
    public static $intNextConvertPerStep = 0;
    public static $intConverted = 0;
    public static $intLastConvertID = 0;
    public static $boolEmptyList = \false;
    public static $intErrors = 0;
    public static $arErrors = array();
    public static $strSessID = '';
    public function __construct()
    {
    }
    public static function InitStep()
    {
    }
    public static function SaveStep()
    {
    }
    public static function GetErrors()
    {
    }
    public static function GetCountOld()
    {
    }
    public static function GetCount()
    {
    }
    public static function ConvertDiscount($intStep = 100, $intMaxExecutionTime = 15)
    {
    }
}