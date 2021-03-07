<?php

class CCloudStorageService_OpenStackStorage extends \CCloudStorageService
{
    function GetObject()
    {
    }
    function GetID()
    {
    }
    function GetName()
    {
    }
    function GetLocationList()
    {
    }
    function GetSettingsHTML($arBucket, $bServiceSet, $cur_SERVICE_ID, $bVarsFromForm)
    {
    }
    function CheckSettings($arBucket, &$arSettings)
    {
    }
    function _GetToken($host, $user, $key)
    {
    }
    function SendRequest($settings, $verb, $bucket, $file_name = '', $params = '', $content = \false, $additional_headers = array())
    {
    }
    function CreateBucket($arBucket)
    {
    }
    function DeleteBucket($arBucket)
    {
    }
    function IsEmptyBucket($arBucket)
    {
    }
    function GetFileSRC($arBucket, $arFile)
    {
    }
    function FileExists($arBucket, $filePath)
    {
    }
    function FileCopy($arBucket, $arFile, $filePath)
    {
    }
    function DownloadToFile($arBucket, $arFile, $filePath)
    {
    }
    function DeleteFile($arBucket, $filePath)
    {
    }
    function SaveFile($arBucket, $filePath, $arFile)
    {
    }
    function ListFiles($arBucket, $filePath, $bRecursive = \false)
    {
    }
    function InitiateMultipartUpload($arBucket, &$NS, $filePath, $fileSize, $ContentType)
    {
    }
    function GetMinUploadPartSize()
    {
    }
    function UploadPartNo($arBucket, &$NS, $data, $part_no)
    {
    }
    function UploadPart($arBucket, &$NS, $data)
    {
    }
    function CompleteMultipartUpload($arBucket, &$NS)
    {
    }
}