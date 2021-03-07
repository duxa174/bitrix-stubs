<?php

class CCloudStorageService_GoogleStorage extends \CCloudStorageService
{
    protected $new_end_point;
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
    protected function StartUpload($arBucket, $filePath, $ContentType)
    {
    }
    function InitiateMultipartUpload($arBucket, &$NS, $filePath, $fileSize, $ContentType)
    {
    }
    function GetMinUploadPartSize()
    {
    }
    private function UploadRange($filePathU, $arBucket, &$NS, $data, $pos)
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
    function SendRequest($access_key, $secret_key, $verb, $bucket, $file_name = '/', $params = '', $content = '', $additional_headers = array())
    {
    }
    function hmacsha1($data, $key)
    {
    }
}