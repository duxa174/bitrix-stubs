<?php

class CCloudStorageService_S3 extends \CCloudStorageService
{
    protected $set_headers = array();
    protected $new_end_point = '';
    protected $_public = \true;
    protected $location = '';
    /**
     * @return CCloudStorageService
     */
    function GetObject()
    {
    }
    /**
     * @return string
     */
    function GetID()
    {
    }
    /**
     * @return string
     */
    function GetName()
    {
    }
    /**
     * @return array[string]string
     */
    function GetLocationList()
    {
    }
    /**
     * @param array[string]string $arBucket
     * @param bool $bServiceSet
     * @param string $cur_SERVICE_ID
     * @param bool $bVarsFromForm
     * @return string
     */
    function GetSettingsHTML($arBucket, $bServiceSet, $cur_SERVICE_ID, $bVarsFromForm)
    {
    }
    /**
     * @param array[string]string $arBucket
     * @param array[string]string & $arSettings
     * @return bool
     */
    function CheckSettings($arBucket, &$arSettings)
    {
    }
    /**
     * @param string $data
     * @param string $key
     * @return string
     */
    function hmacsha1($data, $key)
    {
    }
    /**
     * @param array[string]string $arSettings
     * @param string $RequestMethod
     * @param string $bucket
     * @param string $RequestURI
     * @param string $ContentType
     * @param array[string]string $additional_headers
     * @param string $params
     * @param string|resource $content
     * @return array[string]string
     */
    function SignRequest($arSettings, $RequestMethod, $bucket, $RequestURI, $ContentType, $additional_headers, $params = "", $content = "")
    {
    }
    /**
     * @param string $location
     * @return void
     **/
    function SetLocation($location)
    {
    }
    /**
     * @param string $bucket
     * @return string
     **/
    protected function GetRequestHost($bucket, $arSettings)
    {
    }
    /**
     * @param array[string]string $arSettings
     * @param string $verb
     * @param string $bucket
     * @param string $file_name
     * @param string $params
     * @param string $content
     * @param array[string]string $additional_headers
     * @return mixed
     */
    function SendRequest($arSettings, $verb, $bucket, $file_name = '/', $params = '', $content = '', $additional_headers = array())
    {
    }
    function ListBuckets($arBucket)
    {
    }
    /**
     * @param array[string]string $arBucket
     * @return bool
     */
    function CreateBucket($arBucket)
    {
    }
    /**
     * @param array[string]string $arBucket
     * @return bool
     */
    function IsEmptyBucket($arBucket)
    {
    }
    /**
     * @param array[string]string $arBucket
     * @return bool
     */
    function DeleteBucket($arBucket)
    {
    }
    /**
     * @param array[string]string $arBucket
     * @param mixed $arFile
     * @return string
     */
    function GetFileSRC($arBucket, $arFile)
    {
    }
    /**
     * @param array[string]string $arBucket
     * @param string $filePath
     * @return bool
     */
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
    function ListFiles($arBucket, $filePath, $bRecursive = \false, $pageSize = 0, $pageMarker = '')
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
    /**
     * @param array[string]string $arBucket
     * @param mixed & $NS
     * @param string $data
     * @return bool
     */
    function UploadPart($arBucket, &$NS, $data)
    {
    }
    /**
     * @param array[string]string $arBucket
     * @param mixed & $NS
     * @return bool
     */
    function CompleteMultipartUpload($arBucket, &$NS)
    {
    }
    /**
     * @param array[string]string $arBucket
     * @param mixed & $NS
     * @return bool
     */
    public function CancelMultipartUpload($arBucket, &$NS)
    {
    }
    /**
     * @param bool $state
     * @return void
     */
    function SetPublic($state = \true)
    {
    }
    /**
     * @param string $name
     * @param string $value
     * @return void
     */
    function SetHeader($name, $value)
    {
    }
    /**
     * @param string $name
     * @return void
     */
    function UnsetHeader($name)
    {
    }
    /**
     * @param int $status
     * @param string $result
     * @return bool
     */
    protected function checkForTokenExpiration($status, $result)
    {
    }
}