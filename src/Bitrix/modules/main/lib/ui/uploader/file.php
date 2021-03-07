<?php

namespace Bitrix\Main\UI\Uploader;

class File
{
    /** @var Package */
    protected $package;
    /** @var array */
    protected $data = array();
    /** @var ErrorCollection */
    protected $errorCollection;
    /** @var HttpClient */
    protected static $http = null;
    /**
     * File constructor.
     * @param Package $package Package for file.
     * @param array $file File array.
     */
    public function __construct($package, array $file)
    {
    }
    /**
     * @param array $file File array("id" => ... ).
     * @return string
     */
    public static function initHash($file = array())
    {
    }
    /**
     * @return string
     */
    public function getId()
    {
    }
    /**
     * @return string
     */
    public function getHash()
    {
    }
    /**
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @return integer
     */
    public function getSize()
    {
    }
    /**
     * @return string
     */
    public function getType()
    {
    }
    /**
     * Returns file data array.
     * @param string $code File code like "default", "real_picture".
     * @return array|null
     */
    public function getFile($code)
    {
    }
    /**
     * Sets file data in file with code $code and saves changes into cache.
     * @param string $code File code like "default", "real_picture".
     * @param array $data Array("name" => "", "code" => ..., "type" => ..., "uploadStatus" => "inprogress",...).
     * @return void
     */
    public function setFile($code, $data)
    {
    }
    /**
     * Saves file on drive.
     * @param array $file Array("name" => "", "code" => ..., "type" => ..., "uploadStatus" => "inprogress",...).
     * @param Storable $storage .
     * @param array $copies Array("small" => array("width" => 100, "height" => 100)).
     * @return Result
     */
    public function saveFile(&$file, \Bitrix\Main\UI\Uploader\Storable $storage, array $copies)
    {
    }
    /**
     * Saves changes into cache.
     * @return void
     */
    public function saveLog()
    {
    }
    /**
     * Just function to prepare data array for saving on drive.
     * @param array $array Data array.
     * @return array
     */
    protected static function arrayWalkRecursive(array $array)
    {
    }
    /**
     * Adds error into errorConnection
     * @param Error $error
     * @return void
     */
    public function addError(\Bitrix\Main\Error $error)
    {
    }
    /**
     * Checks if errorCollection has errors.
     * @return bool
     */
    public function hasError()
    {
    }
    /**
     * Returns error collection.
     * @return ErrorCollection
     */
    public function getErrorCollection()
    {
    }
    /**
     * Returns error message.
     * @return string
     */
    public function getErrorMessage()
    {
    }
    /**
     * Return data array from cache.
     * @param string $hash
     * @param string $path
     * @return array|false
     */
    protected static function getFromCache($hash, $path)
    {
    }
    /**
     * @param Package $package
     * @param array $file
     * @return void
     */
    public static function deleteCache(\Bitrix\Main\UI\Uploader\Package $package, array $file)
    {
    }
    /**
     * Saves serialized data on disk.
     * @param string $hash
     * @param string $path
     * @param array $data
     * @return void
     */
    protected static function setIntoCache($hash, $path, $data)
    {
    }
    /**
     * this function just merge 2 arrays with a lot of deep keys
     * array_merge replaces keys in second level and deeper
     * array_merge_recursive multiplies similar keys
     * @param $res
     * @param $res2
     * @return array
     */
    static function merge($res, $res2)
    {
    }
    /**
     * Sets upload status.
     * @param string $status
     * @return void
     */
    public function setUploadStatus($status)
    {
    }
    /**
     * Checks if file is uploaded.
     * @return bool
     */
    public function isUploaded()
    {
    }
    /**
     * Sets executed status.
     * @param string $status
     * @return void
     */
    public function setExecuteStatus($status)
    {
    }
    /**
     * Check if file is executed.
     * @return bool
     */
    public function isExecuted()
    {
    }
    /**
     * Returns file whole data.
     * @return array
     */
    public function toArray()
    {
    }
    /**
     * Restore data from array and saves into cache.
     * @param array $data
     * @return void
     */
    public function fromArray(array $data)
    {
    }
    /**
     * @param string $cid Control exemplar ID.
     * @param string $hash File ID.
     * @param string $path Path to temporary directory.
     * @return bool
     */
    public static function deleteFile($cid, $hash, $path)
    {
    }
    /**
     * @param string $cid Control exemplar ID.
     * @param string $hash File ID.
     * @param string $path Path to temporary directory.
     * @return void
     */
    public static function viewFile($cid, $hash, $path)
    {
    }
    /**
     * @param string $act
     * @param string $copy
     * @return string
     */
    private function getUrl($act = "view", $copy = "default", $uri = null)
    {
    }
    public static function getUrlFromRelativePath($tmpName)
    {
    }
    /**
     * @param $error
     * @return string
     */
    public static function getUploadErrorMessage($error)
    {
    }
    /**
     * @return HttpClient
     */
    public static function http()
    {
    }
    /**
     * @param $file
     * @param File $f
     * @param $params
     * @return Result
     */
    public static function checkFile(&$file, \Bitrix\Main\UI\Uploader\File $f, $params)
    {
    }
    /**
     * Generates hash from info about file
     * @param $chunksCount
     * @param $chunkNumber
     * @return string
     */
    protected static function getChunkKey($chunksCount, $chunkNumber)
    {
    }
    /**
     * @param array $source Source file.
     * @param array $dest Destination File.
     * @param array $canvasParams Array("width" => 100, "height" => 100).
     * @param array $watermarkParams Array("position" => "top", "type" => "text", "text" => "Bla-bla", "font" => "", "color" => "red").
     * @return array
     */
    public static function createCanvas($source, $dest, $canvasParams = array(), $watermarkParams = array())
    {
    }
    /**
     * @param array $fileData
     * @param array $options
     * @return bool|mixed
     */
    public static function view(array $fileData, $options = array())
    {
    }
}