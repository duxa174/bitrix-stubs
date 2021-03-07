<?php

class CCloudStorageUpload
{
    protected $_filePath = "";
    protected $_ID = "";
    protected $obBucket;
    protected $_max_retries = 3;
    protected $_cache = \null;
    /**
     * @param string $filePath
     * @return void
     */
    function __construct($filePath)
    {
    }
    /**
     * @return array[string]string
     */
    public function GetArray()
    {
    }
    /**
     * @return bool
     */
    public function isStarted()
    {
    }
    /**
     * @return void
     */
    public function Delete()
    {
    }
    /**
     * @return void
     */
    public function DeleteOld()
    {
    }
    /**
     * @param int $bucket_id
     * @param float $fileSize
     * @param string $ContentType
     * @return bool
     */
    function Start($bucket_id, $fileSize, $ContentType = 'binary/octet-stream', $tmpFileName = \false)
    {
    }
    /**
     * @param string $data
     * @return bool
     */
    function Next($data, $obBucket = \null)
    {
    }
    /**
     * @param string $data
     * @param int $part_no
     * @return bool
     */
    function Part($data, $part_no, $obBucket = \null)
    {
    }
    /**
     * @return bool
     */
    function Finish($obBucket = \null)
    {
    }
    /**
     * @return int
     */
    function GetPartCount()
    {
    }
    /**
     * @return float
     */
    function GetPos()
    {
    }
    /**
     * @return int
     */
    function getPartSize()
    {
    }
    /**
     * @return bool
     */
    function hasRetries()
    {
    }
    /**
     * @return string
     */
    function getTempFileName()
    {
    }
    /**
     * @param array $arUploadInfo
     * @param boolean $bSuccess
     * @return boolean
     */
    protected function UpdateProgress($arUploadInfo, $bSuccess)
    {
    }
    public static function CleanUp($ID = '')
    {
    }
}