<?php

abstract class CCloudStorageService
{
    protected $verb = '';
    protected $host = '';
    protected $url = '';
    protected $errno = 0;
    protected $errstr = '';
    protected $status = 0;
    protected $headers = array();
    protected $result = '';
    public $tokenHasExpired = \false;
    /**
     * @return CCloudStorageService
     * @deprecated
     */
    public abstract function GetObject();
    /**
     * @return string
     */
    public abstract function GetID();
    /**
     * @return string
     */
    public abstract function GetName();
    /**
     * @return array[string]string
     */
    public abstract function GetLocationList();
    /**
     * @param array[string]string $arBucket
     * @param bool $bServiceSet
     * @param string $cur_SERVICE_ID
     * @param bool $bVarsFromForm
     * @return string
     */
    public abstract function GetSettingsHTML($arBucket, $bServiceSet, $cur_SERVICE_ID, $bVarsFromForm);
    /**
     * @param array[string]string $arBucket
     * @param array[string]string & $arSettings
     * @return bool
     */
    public abstract function CheckSettings($arBucket, &$arSettings);
    /**
     * @param array[string]string $arBucket
     * @return bool
     */
    public abstract function CreateBucket($arBucket);
    /**
     * @param array[string]string $arBucket
     * @return bool
     */
    public abstract function DeleteBucket($arBucket);
    /**
     * @param array[string]string $arBucket
     * @return bool
     */
    public abstract function IsEmptyBucket($arBucket);
    /**
     * @param array[string]string $arBucket
     * @param mixed $arFile
     * @return string
     */
    public abstract function GetFileSRC($arBucket, $arFile);
    /**
     * @param array[string]string $arBucket
     * @param string $filePath
     * @return bool
     */
    public abstract function FileExists($arBucket, $filePath);
    /**
     * @param array[string]string $arBucket
     * @param mixed $arFile
     * @param string $filePath
     * @return bool
     */
    public abstract function FileCopy($arBucket, $arFile, $filePath);
    /**
     * @param array[string]string $arBucket
     * @param mixed $arFile
     * @param string $filePath
     * @return bool
     */
    public abstract function DownloadToFile($arBucket, $arFile, $filePath);
    /**
     * @param array[string]string $arBucket
     * @param string $filePath
     * @return bool
     */
    public abstract function DeleteFile($arBucket, $filePath);
    /**
     * @param array[string]string $arBucket
     * @param string $filePath
     * @param mixed $arFile
     * @return bool
     */
    public abstract function SaveFile($arBucket, $filePath, $arFile);
    /**
     * @param array[string]string $arBucket
     * @param string $filePath
     * @param bool $bRecursive
     * @return array[string][int]string
     */
    public abstract function ListFiles($arBucket, $filePath, $bRecursive = \false);
    /**
     * @param array[string]string $arBucket
     * @param string $sourcePath
     * @param string $targetPath
     * @param bool $overwrite
     * @return bool
     */
    public function FileRename($arBucket, $sourcePath, $targetPath, $overwrite = \true)
    {
    }
    /**
     * @param array[string]string $arBucket
     * @param mixed & $NS
     * @param string $filePath
     * @param float $fileSize
     * @param string $ContentType
     * @return bool
     */
    public abstract function InitiateMultipartUpload($arBucket, &$NS, $filePath, $fileSize, $ContentType);
    /**
     * @return float
     */
    public abstract function GetMinUploadPartSize();
    /**
     * @param array[string]string $arBucket
     * @param mixed & $NS
     * @param string $data
     * @return bool
     */
    public abstract function UploadPart($arBucket, &$NS, $data);
    /**
     * @param array[string]string $arBucket
     * @param mixed & $NS
     * @return bool
     */
    public abstract function CompleteMultipartUpload($arBucket, &$NS);
    /**
     * @param array[string]string $arBucket
     * @param mixed & $NS
     * @return bool
     */
    public function CancelMultipartUpload($arBucket, &$NS)
    {
    }
    /**
     * @param string $name
     * @param string $value
     * @return void
     */
    public function SetHeader($name, $value)
    {
    }
    /**
     * @param string $name
     * @return void
     */
    public function UnsetHeader($name)
    {
    }
    /**
     * @param bool $state
     * @return void
     */
    public function SetPublic($state = \true)
    {
    }
    /**
     * @return array[string]string
     */
    function getHeaders()
    {
    }
    /**
     * @return int
     */
    function GetLastRequestStatus()
    {
    }
    /**
     * @param string $headerName
     * @return string
     */
    function GetLastRequestHeader($headerName)
    {
    }
    /**
     * @return CCloudStorageService
     */
    public static function GetObjectInstance()
    {
    }
}