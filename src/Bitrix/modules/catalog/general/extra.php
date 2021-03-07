<?php

class CAllExtra
{
    protected static $arExtraCache = array();
    public static function ClearCache()
    {
    }
    public static function GetByID($ID)
    {
    }
    public static function SelectBox($sFieldName, $sValue, $sDefaultValue = "", $JavaChangeFunc = "", $sAdditionalParams = "")
    {
    }
    public static function Update($ID, $arFields)
    {
    }
    public static function Delete($ID)
    {
    }
    public static function CheckFields($strAction, &$arFields, $ID = 0)
    {
    }
    /**
     * @deprecated deprecated since catalog 12.5.6
     *
     * @param array $arFields
     * @param int $intID
     * @return false
     */
    public static function PrepareInsert(&$arFields, &$intID)
    {
    }
}