<?php

/**
 * @property integer $ID
 * @property string $ACTIVE
 * @property integer $SORT
 * @property string $READ_ONLY
 * @property string $SERVICE_ID
 * @property string $BUCKET
 * @property string $LOCATION
 * @property string $CNAME
 * @property integer $FILE_COUNT
 * @property float $FILE_SIZE
 * @property integer $LAST_FILE_ID
 * @property string $PREFIX
 * @property string $SETTINGS
 * @property string $FILE_RULES
 */
class CCloudStorageBucket extends \CAllCloudStorageBucket
{
    protected $arBucket;
    protected $enabledFailover = \true;
    protected $queueFlag = \true;
    /** @var CCloudStorageService $service */
    protected $service;
    protected static $arBuckets;
    /**
     * @param int $ID
     * @param bool $enabledFailover
     */
    public function __construct($ID, $enabledFailover = \true)
    {
    }
    public function disableFailOver()
    {
    }
    /**
     * @return boolean
     */
    public function isFailoverEnabled()
    {
    }
    /**
     * @param boolean $queueFlag
     */
    public function setQueueFlag($queueFlag = \true)
    {
    }
    /**
     * @return boolean
     */
    public function getQueueFlag()
    {
    }
    /**
     * @return array[string]string
     */
    public function getBucketArray()
    {
    }
    /**
     * @return CCloudStorageService
     */
    public function getService()
    {
    }
    /**
     * @param string $str
     * @return string
     */
    private static function CompileModuleRule($str)
    {
    }
    /**
     * @param string $str
     * @return string
     */
    private static function CompileExtentionRule($str)
    {
    }
    /**
     * @param string $str
     * @return double
     */
    private static function ParseSize($str)
    {
    }
    /**
     * @param string $str
     * @return array[int][int]double
     */
    private static function CompileSizeRule($str)
    {
    }
    /**
     * @param array[int][string]string $arRules
     * @return array[int][string]string
     */
    private static function CompileRules($arRules)
    {
    }
    /**
     * @return void
     */
    private static function _init()
    {
    }
    /**
     * @param string $name
     * @return mixed
     */
    function __get($name)
    {
    }
    /**
     * @return bool
     */
    function Init()
    {
    }
    /**
     * @return bool
     */
    function RenewToken()
    {
    }
    /**
     * @param array[string]string $arSettings
     * @return bool
     */
    function CheckSettings(&$arSettings)
    {
    }
    /**
     * @return bool
     */
    function CreateBucket()
    {
    }
    /**
     * @param mixed $arFile
     * @return string
     */
    function GetFileSRC($arFile)
    {
    }
    /**
     * @param string $filePath
     * @return bool
     */
    function FileExists($filePath)
    {
    }
    /**
     * @param mixed $arFile
     * @param string $filePath
     * @return bool
     */
    function DownloadToFile($arFile, $filePath)
    {
    }
    /**
     * @param string $filePath
     * @param mixed $arFile
     * @return bool
     */
    function SaveFile($filePath, $arFile)
    {
    }
    /**
     * @param string $filePath
     * @return bool
     */
    function DeleteFile($filePath)
    {
    }
    /**
     * @param mixed $arFile
     * @param string $filePath
     * @return bool
     */
    function FileCopy($arFile, $filePath)
    {
    }
    /**
     * @param string $sourcePath
     * @param string $targetPath
     * @param bool $overwrite
     * @return bool
     */
    function FileRename($sourcePath, $targetPath, $overwrite = \true)
    {
    }
    /**
     * @param string $filePath
     * @param bool $bRecursive
     * @param int $pageSize
     * @param string $pageMarker
     * @return array[string][int]string
     */
    function ListFiles($filePath = "/", $bRecursive = \false, $pageSize = 0, $pageMarker = '')
    {
    }
    /**
     * @param string $filePath
     * @return array|false
     */
    function GetFileInfo($filePath)
    {
    }
    /**
     * @param string $filePath
     * @return double
     */
    function GetFileSize($filePath)
    {
    }
    /**
     * @return array[int][string]string
     */
    static function GetAllBuckets()
    {
    }
    /**
     * @param array[string]string $arFields
     * @param int $ID
     * @return bool
     */
    function CheckFields(&$arFields, $ID)
    {
    }
    /**
     * @param array[string]string $arOrder
     * @param array[string]string $arFilter
     * @param array[string]string $arSelect
     * @return CDBResult
     */
    static function GetList($arOrder = array(), $arFilter = array(), $arSelect = array())
    {
    }
    /**
     * @param array[string]string $arFields
     * @param boolean $createBucket
     * @return mixed
     */
    function Add($arFields, $createBucket = \true)
    {
    }
    /**
     * @return bool
     */
    function Delete()
    {
    }
    /**
     * @param array[string]string $arFields
     * @return mixed
     */
    function Update($arFields)
    {
    }
    /**
     * @param array[string][int]string $arPOST
     * @return array[int][string]string
     */
    static function ConvertPOST($arPOST)
    {
    }
    /**
     * @param string $name
     * @param string $value
     * @return void
     */
    function setHeader($name, $value)
    {
    }
}