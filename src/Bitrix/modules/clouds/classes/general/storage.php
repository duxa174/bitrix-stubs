<?php

class CCloudStorage
{
    const FILE_SKIPPED = 0;
    const FILE_MOVED = 1;
    const FILE_PARTLY_UPLOADED = 2;
    const FILE_UPLOAD_ERROR = 3;
    public static $part_size = 0;
    public static $part_count = 0;
    private static $_services = \null;
    public static $file_skip_reason = '';
    /**
     * @return void
     */
    static function _init()
    {
    }
    /**
     * @param string $ID
     * @return CCloudStorageService
     */
    public static function GetServiceByID($ID)
    {
    }
    /**
     * @return array[string]CCloudStorageService
     */
    public static function GetServiceList()
    {
    }
    /**
     * @param string $ID
     * @return array[string]string
     */
    public static function GetServiceLocationList($ID)
    {
    }
    /**
     * @param string $ID
     * @return string
     */
    public static function GetServiceDescription($ID)
    {
    }
    /**
     * @param array [string]string $arFile
     * @param string $strFileName
     * @return CCloudStorageBucket
     */
    public static function FindBucketForFile($arFile, $strFileName)
    {
    }
    /**
     * @param array [string]string $arFile
     * @param array [string]string $arResizeParams
     * @param array [string]mixed $callbackData
     * @param bool $bNeedResize
     * @param array [string]string $sourceImageFile
     * @param array [string]string $cacheImageFileTmp
     * @return bool
     */
    public static function OnBeforeResizeImage($arFile, $arResizeParams, &$callbackData, &$bNeedResize, &$sourceImageFile, &$cacheImageFileTmp)
    {
    }
    public static function OnAfterResizeImage($arFile, $arResizeParams, &$callbackData, &$cacheImageFile, &$cacheImageFileTmp, &$arImageSize)
    {
    }
    public static function ResizeImageFileGet($destinationFile)
    {
    }
    public static function ResizeImageFileAdd(&$arDestinationSize, $sourceFile, $destinationFile, $arResizeParams, $errorCode = 0)
    {
    }
    public static function ResizeImageFileDelay(&$arDestinationSize, $sourceFile, $destinationFile, $arResizeParams)
    {
    }
    /**
     * @param CCloudStorageBucket $obBucket
     * @param string $path
     * @return bool
     */
    public static function ResizeImageFileCheck($obBucket, $path)
    {
    }
    public static function OnMakeFileArray($arSourceFile, &$arDestination)
    {
    }
    public static function OnFileDelete($arFile)
    {
    }
    public static function DeleteDirFilesEx($path)
    {
    }
    public static function OnFileCopy(&$arFile, $newPath = "")
    {
    }
    public static function OnGetFileSRC($arFile)
    {
    }
    protected static function _delete_file($file)
    {
    }
    public static function MoveFile($arFile, $obTargetBucket)
    {
    }
    public static function OnFileSave(&$arFile, $strFileName, $strSavePath, $bForceMD5 = \false, $bSkipExt = \false, $dirAdd = '', $checkDuplicates = \true)
    {
    }
    public static function OnAfterFileSave($arFile)
    {
    }
    public static function CleanUp()
    {
    }
    public static function FindBucketByFile($file_name)
    {
    }
    public static function FindFileURIByURN($urn, $log_descr = "")
    {
    }
    public static function OnBuildGlobalMenu(&$aGlobalMenu, &$aModuleMenu)
    {
    }
    public static function OnAdminListDisplay(&$obList)
    {
    }
    public static function HasActiveBuckets()
    {
    }
    public static function OnBeforeProlog()
    {
    }
    public static function GetAuditTypes()
    {
    }
    public static function translit($file_name, $safe_chars = '')
    {
    }
    /**
     * @param array [string]string $arFile
     * @return void
     */
    public static function FixFileContentType(&$arFile)
    {
    }
}