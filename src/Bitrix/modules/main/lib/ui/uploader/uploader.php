<?php

namespace Bitrix\Main\UI\Uploader;

class Log implements \ArrayAccess
{
    /*
     * @var \CBXVirtualFileFileSystem $file
     */
    protected $file = null;
    var $data = array();
    /**
     * Log constructor.
     * @param string $path Path to log file.
     * @return void
     */
    function __construct($path)
    {
    }
    /**
     * Saves log.
     * @param string $key Key of log array.
     * @param mixed $value value of log array.
     * @return $this
     */
    public function setLog($key, $value)
    {
    }
    /**
     * @param $key
     * @return mixed
     */
    public function getValue($key)
    {
    }
    /**
     *
     */
    public function save()
    {
    }
    /**
     * @return array
     */
    public function getLog()
    {
    }
    /**
     *
     */
    public function unlink()
    {
    }
    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
    }
    /**
     * @param mixed $offset
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
    }
    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
    }
    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
    }
}
class Uploader
{
    public $files = array();
    public $controlId = "fileUploader";
    public $params = array("allowUpload" => "A", "allowUploadExt" => "", "copies" => array("default" => array("width" => null, "height" => null)), "storage" => array("moduleId" => "main", "cloud" => false));
    /*
     * @var string $script Url to uploading page for forming url to view
     * @var string $path Path to temp directory
     * @var string $CID Controller ID
     * @var string $mode
     * @var array $processTime Time limits
     * @var HttpClient $http
    */
    public $script;
    protected $path = "";
    protected $CID = null;
    protected $version = null;
    protected $mode = "view";
    protected $param = array();
    protected $requestMethods = array("get" => true, "post" => true);
    /* @var HttpRequest $request */
    protected $request;
    protected $http;
    const FILE_NAME = "bxu_files";
    const INFO_NAME = "bxu_info";
    const EVENT_NAME = "main_bxu";
    const SESSION_LIST = "MFI_SESSIONS";
    const SESSION_TTL = 86400;
    function __construct($params = array())
    {
    }
    public function setControlId($controlId)
    {
    }
    public function setHandler($name, $callback)
    {
    }
    /**
     * excludes real paths from array
     * @param $item - array
     * @return array
     */
    protected static function removeTmpPath($item)
    {
    }
    public static function prepareData($data)
    {
    }
    /**
     * @return bool
     * @throws AccessDeniedException
     * @throws ArgumentOutOfRangeException
     * @throws NotImplementedException
     */
    protected function fillRequireData()
    {
    }
    protected function showJsonAnswer($result)
    {
    }
    /**
     * Sets request methods to check.
     * @param array $methods Request methods array("get", "post").
     * @return $this
     */
    protected function setRequestMethodToCheck(array $methods)
    {
    }
    /**
     * @param string $key Array key in request.
     * @return null|mixed
     */
    protected function getRequest($key)
    {
    }
    /**
     * @param string $key
     * @return mixed
     */
    public function getParam($key)
    {
    }
    /**
     *
     * @param bool $checkPost Flag for check post.
     * @return boolean
     */
    public function checkPost($checkPost = true)
    {
    }
    /**
     * @param $hash
     * @param $file
     * @param array $canvases
     * @param array $watermark
     * @return mixed
     */
    public function checkCanvases($hash, &$file, $canvases = array(), $watermark = array())
    {
    }
    public function deleteFile($hash)
    {
    }
    /**
     * @param string $tmpName
     * @return false|array
     */
    public static function getPaths($tmpName)
    {
    }
}