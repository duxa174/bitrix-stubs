<?php

namespace Bitrix\Main\UI\Uploader;

class Package
{
    /* @var string $index Package ID. */
    protected $index;
    /* @var Log $cidLog */
    protected $cidLog = null;
    /* @var Log $log */
    protected $log = null;
    /** @var string $path Path to temp directory. */
    protected $path;
    /** @var string $CID Control exemplar ID. */
    protected $CID;
    /* @var array */
    protected $copies = array("default" => array("width" => null, "height" => null));
    /* @var Storable */
    protected $storage;
    /** @var array File */
    public $files = array();
    /** @var string */
    public $controlId = "fileUploader";
    /*
     * @var string $script Url to uploading page for forming url to view
     * @var array $processTime Time limits
     */
    protected $processTime = array(
        // Time limits
        "max" => 30,
        "start" => 0,
        "current" => 0,
    );
    /**
     * Package constructor.
     * @param $path
     * @param $CID
     * @param $index
     * @throws ArgumentNullException
     * @throws NotImplementedException
     */
    public function __construct($path, $CID, $index)
    {
    }
    protected function setIndex($index)
    {
    }
    /**
     * Returns package Index.
     * @return string
     */
    public function getIndex()
    {
    }
    /**
     * Returns package Log of Control Exemplar.
     * @return Log
     */
    public function getCidLog($key = null)
    {
    }
    /**
     * Returns package Log.
     * @return array|mixed
     */
    public function getLog($key = null)
    {
    }
    /**
     * Returns file array.
     * @return array
     */
    public function getFile($id)
    {
    }
    protected function setCid($CID)
    {
    }
    /**
     * @return string
     */
    public function getCid()
    {
    }
    /**
     * @return string
     */
    public function getPath()
    {
    }
    /**
     * @param array $params
     * @return $this
     * @throws \Exception
     */
    public function setStorage(array $params)
    {
    }
    /**
     * @return Storable
     */
    public function getStorage()
    {
    }
    /**
     * @param array $params
     * @return $this
     */
    public function setCopies(array $params)
    {
    }
    /**
     * @return array
     */
    public function getCopies()
    {
    }
    /**
     * Decodes and converts keys(!) and values
     * @param $data
     * @return array
     */
    protected static function unescape($data)
    {
    }
    /**
     * Main function for uploading data.
     *
     * @throws NotImplementedException
     * @return array
     */
    public function checkPost($fileLimits)
    {
    }
    /**
     * @return bool
     */
    public function checkTime()
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
    public static function merge($res, $res2)
    {
    }
}