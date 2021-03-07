<?php

namespace Bitrix\Main\Composite;

/**
 * Class Responder
 * @package \Bitrix\Main\Composite
 */
class Responder
{
    private static $error = null;
    private static $errorMessage = null;
    /**
     * Checks many conditions to enable HTML Cache and tries to send
     *
     * @return void
     */
    public static function respond()
    {
    }
    private static function isValidRequest()
    {
    }
    /**
     * Tries to send a response if cache exists
     */
    private static function trySendResponse()
    {
    }
    private static function modifyHttpHeaders()
    {
    }
    /**
     *
     * Sets HTTP headers
     *
     * @param string $etag
     * @param int $lastModified
     * @param bool $compositeHeader
     * @param bool $contentType
     */
    private static function setHeaders($etag, $lastModified, $compositeHeader = false, $contentType = false)
    {
    }
    /**
     * Sets HTTP status
     *
     * @param string $status
     */
    private static function setStatus($status)
    {
    }
    private static function isValidQueryString($compositeOptions)
    {
    }
    /**
     * Gets a cache key with a hostname given by $host
     *
     * @return string
     */
    private static function getCacheKey()
    {
    }
    /**
     * Returns the instance of the AbstractResponse
     *
     * @param string $cacheKey unique cache identifier
     *
     * @return AbstractResponse|null
     */
    private static function getHtmlCacheResponse($cacheKey)
    {
    }
    private static function registerAutoloader()
    {
    }
    private static function unregisterAutoloader()
    {
    }
    public static function autoLoad($className)
    {
    }
    /**
     * @internal
     * Returns last respond error
     * @return string
     */
    public static function getLastError()
    {
    }
    /**
     * @internal
     * Returns last error message
     * @return string
     */
    public static function getLastErrorMessage()
    {
    }
    private static function setErrorHandler()
    {
    }
    private static function restoreErrorHandler()
    {
    }
    public static function handleError($code, $message, $file, $line)
    {
    }
}
/**
 * Represents interface for the html cache response
 * Class AbstractResponse
 */
abstract class AbstractResponse
{
    protected $cacheKey = null;
    protected $configuration = array();
    protected $htmlCacheOptions = array();
    /**
     * @param string $cacheKey unique cache identifier
     * @param array $configuration storage configuration
     * @param array $htmlCacheOptions html cache options
     */
    public function __construct($cacheKey, array $configuration, array $htmlCacheOptions)
    {
    }
    /**
     * Returns the cache contents
     * @return string|false
     */
    public abstract function getContents();
    /**
     * Returns true if content is gzipped
     * @return bool
     */
    public abstract function isGzipped();
    /**
     * Returns the time the cache was last modified
     * @return int|false
     */
    public abstract function getLastModified();
    /**
     * Returns the Entity Tag of the cache
     * @return string|int
     */
    public abstract function getEtag();
    /**
     * Returns the content type of the cache
     * @return string|false
     */
    public abstract function getContentType();
    /**
     * Checks whether the cache exists
     *
     * @return bool
     */
    public abstract function exists();
    /**
     * Should we count a quota limit
     * @return bool
     */
    public abstract function shouldCountQuota();
}
final class MemcachedResponse extends \Bitrix\Main\Composite\AbstractResponse
{
    /**
     * @var \stdClass
     */
    private $props = null;
    /**
     * @var \Memcache
     */
    private static $memcached = null;
    private static $connected = null;
    private $contents = null;
    private $flags = 0;
    const MEMCACHED_GZIP_FLAG = 65536;
    public function __construct($cacheKey, array $configuration, array $htmlCacheOptions)
    {
    }
    public function getContents()
    {
    }
    public function getLastModified()
    {
    }
    public function getEtag()
    {
    }
    public function getContentType()
    {
    }
    public function exists()
    {
    }
    /**
     * Returns true if content is gzipped
     * @return bool
     */
    public function isGzipped()
    {
    }
    /**
     * Should we count a quota limit
     * @return bool
     */
    public function shouldCountQuota()
    {
    }
    /**
     * @param array $htmlCacheOptions html cache options
     *
     * @return array
     */
    private static function getServers(array $htmlCacheOptions)
    {
    }
    /**
     * Gets clusters settings
     *
     * @param int $groupId
     *
     * @return array
     */
    private static function getClusterServers($groupId)
    {
    }
    /**
     * Returns the object that represents the connection to the memcached server
     *
     * @param array $configuration memcached configuration
     * @param array $htmlCacheOptions html cache options
     *
     * @return \Memcache|false
     */
    public static function getConnection(array $configuration, array $htmlCacheOptions)
    {
    }
    /**
     * Closes connection to the memcached server
     */
    public static function close()
    {
    }
    /**
     * Returns an array of the cache properties
     *
     * @return \stdClass|false
     */
    public function getProps()
    {
    }
    /**
     * Returns the $property value
     *
     * @param string $property the property name
     *
     * @return string|false
     */
    public function getProp($property)
    {
    }
}
final class FileResponse extends \Bitrix\Main\Composite\AbstractResponse
{
    private $cacheFile = null;
    private $lastModified = null;
    private $contents = null;
    public function __construct($cacheKey, array $configuration, array $htmlCacheOptions)
    {
    }
    public function getContents()
    {
    }
    public function getLastModified()
    {
    }
    public function getEtag()
    {
    }
    public function getContentType()
    {
    }
    public function exists()
    {
    }
    /**
     * Should we count a quota limit
     * @return bool
     */
    public function shouldCountQuota()
    {
    }
    /**
     * Returns true if content is gzipped
     * @return bool
     */
    public function isGzipped()
    {
    }
}