<?php

class CImageUploader
{
    public static function ShowScript($Params = array())
    {
    }
    public static function UploadCallback($uploadedFiles)
    {
    }
    public static function InitUploaderHandler()
    {
    }
    private static $id;
    public static function GetId()
    {
    }
    public static function SetId($id = "")
    {
    }
    public static $uploadCallbackFunc, $uploadCallbackParams, $convCount, $sTmpPath, $PackageGuid, $savedData = \false;
    public static function SetTmpPath($PackageGuid, $pathToTmp)
    {
    }
    public static function CheckDirPath($path = "")
    {
    }
    public static function UploadFileHandler($callback, $Params)
    {
    }
    public static function SaveAllUploadedFiles($uploadedFiles)
    {
    }
    public static function SetSavedData($savedData = array())
    {
    }
    public static function GetSavedData()
    {
    }
    public static function CleanSavedData()
    {
    }
    public static function CheckErrors()
    {
    }
    public static function SaveError($arError)
    {
    }
    public static function GetMimeType($fileName)
    {
    }
    public static function GetLocalization()
    {
    }
    public static function GetChunkSize()
    {
    }
    private function GetSize($v)
    {
    }
    public static function StrangeUrlEncode($url)
    {
    }
}
class CFlashUploader extends \CImageUploader
{
    public static function ShowScript($Params = array())
    {
    }
    public static function InitUploaderHandler()
    {
    }
    public static function UploadFileHandler($callback, $Params)
    {
    }
    public static function HealFilesVars($bKill = \false)
    {
    }
    public static function SaveAllUploadedFiles($uploadedFiles)
    {
    }
    public static function GetLocalization()
    {
    }
}
class CFileUploader extends \Bitrix\Main\UI\Uploader\Uploader
{
    function __construct($params, $doCheckPost = \true)
    {
    }
}