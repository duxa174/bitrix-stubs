<?php

class CSaleHelper
{
    public static function IsAssociativeArray($ar)
    {
    }
    /**
     * Writes to /bitrix/modules/sale.log
     *
     * @param string $text message to write
     * @param array $arVars array (varname => value) to print out variables
     * @param string $code log record tag
     */
    public static function WriteToLog($text, $arVars = array(), $code = "")
    {
    }
    /**
     * @param $fieldId
     * @param $arField
     * @param $fieldName
     * @param $formName
     * @return string
     * @deprecated
     */
    public static function getAdminHtml($fieldId, $arField, $fieldName, $formName)
    {
    }
    public static function getAdminMultilineControl($arMultiControlQuery)
    {
    }
    public static function wrapAdminHtml($controlHtml, &$arConfig)
    {
    }
    public static function getOptionOrImportValues($optName, $importFuncName = \false, $arFuncParams = array(), $siteId = "")
    {
    }
    private static function getShopLocationParams($siteId = \false)
    {
    }
    public static function getShopLocationId($siteId)
    {
    }
    public static function getShopLocationZIP()
    {
    }
    public static function getShopLocation($siteId = \false)
    {
    }
    public static function getCsvObject($filePath)
    {
    }
    /**
     * Returns HTML code to show file (image or download link)
     * Similar to CFile::ShowFile but shows name of the file in the download link
     *
     * @param int $fileId - file id
     * @param array $arSize - width and height for image thumbnail
     * @return string
     */
    public static function getFileInfo($fileId, $arSize = array("WIDTH" => 90, "HEIGHT" => 90))
    {
    }
    public static function getIblockPropInfo($value, $propData, $arSize = array("WIDTH" => 90, "HEIGHT" => 90))
    {
    }
    public static function getLocationByIdHitCached($id)
    {
    }
}