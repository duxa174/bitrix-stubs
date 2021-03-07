<?php

namespace Bitrix\Main\Data;

class CacheEngineMemcache implements \Bitrix\Main\Data\ICacheEngine, \Bitrix\Main\Data\ICacheEngineStat, \Bitrix\Main\Data\LocalStorage\Storage\CacheEngineInterface
{
    public const SESSION_MEMCACHE_CONNECTION = 'cache.memcache';
    protected static $memcache = null;
    private static $isConnected = false;
    private static $baseDirVersion = array();
    protected $sid = "BX";
    //cache stats
    private $written = false;
    private $read = false;
    // unfortunately is not available for memcache...
    protected $useLock = false;
    protected $ttlMultiplier = 2;
    protected static $locks = array();
    protected $old = false;
    /**
     * Engine constructor.
     * @param array $options Cache options.
     */
    function __construct($options = [])
    {
    }
    /**
     * Closes opened connection.
     *
     * @return void
     */
    function close()
    {
    }
    /**
     * Returns number of bytes read from memcache or false if there was no read operation.
     * Stub function always returns false.
     *
     * @return integer|false
     */
    public function getReadBytes()
    {
    }
    /**
     * Returns number of bytes written to memcache or false if there was no write operation.
     * Stub function always returns false.
     *
     * @return integer|false
     */
    public function getWrittenBytes()
    {
    }
    /**
     * Returns physical file path after read or write operation.
     * Stub function always returns '' (empty string).
     *
     * @return string
     */
    public function getCachePath()
    {
    }
    /**
     * Returns true if cache can be read or written.
     *
     * @return bool
     */
    function isAvailable()
    {
    }
    /**
     * Tries to put non blocking exclusive lock on the cache entry.
     * Returns true on success.
     *
     * @param string $baseDir Base cache directory (usually /bitrix/cache).
     * @param string $initDir Directory within base.
     * @param string $key Calculated cache key.
     * @param integer $TTL Expiration period in seconds.
     *
     * @return boolean
     */
    protected function lock($baseDir, $initDir, $key, $TTL)
    {
    }
    /**
     * Releases the lock obtained by lock method.
     *
     * @param string $baseDir Base cache directory (usually /bitrix/cache).
     * @param string $initDir Directory within base.
     * @param string $key Calculated cache key.
     * @param integer $TTL Expiration period in seconds.
     *
     * @return void
     */
    protected function unlock($baseDir, $initDir = false, $key = false, $TTL = 0)
    {
    }
    /**
     * Cleans (removes) cache directory or file.
     *
     * @param string $baseDir Base cache directory (usually /bitrix/cache).
     * @param string $initDir Directory within base.
     * @param string $filename File name.
     *
     * @return void
     */
    function clean($baseDir, $initDir = false, $filename = false)
    {
    }
    /**
     * Reads cache from the memcache. Returns true if key value exists, not expired, and successfully read.
     *
     * @param mixed &$allVars Cached result.
     * @param string $baseDir Base cache directory (usually /bitrix/cache).
     * @param string $initDir Directory within base.
     * @param string $filename File name.
     * @param integer $TTL Expiration period in seconds.
     *
     * @return boolean
     */
    function read(&$allVars, $baseDir, $initDir, $filename, $TTL)
    {
    }
    /**
     * Puts cache into the memcache.
     *
     * @param mixed $allVars Cached result.
     * @param string $baseDir Base cache directory (usually /bitrix/cache).
     * @param string $initDir Directory within base.
     * @param string $filename File name.
     * @param integer $TTL Expiration period in seconds.
     *
     * @return void
     */
    function write($allVars, $baseDir, $initDir, $filename, $TTL)
    {
    }
    /**
     * Returns true if cache has been expired.
     * Stub function always returns true.
     *
     * @param string $path Absolute physical path.
     *
     * @return boolean
     */
    function isCacheExpired($path)
    {
    }
    /**
     * Return InitDirVersion
     * @param bool|string $baseDir Base cache directory (usually /bitrix/cache).
     * @param bool|string $initDir Directory within base.
     * @param bool $skipOld Return cleaned value.
     * @return array|bool|string
     */
    function getInitDirVersion($baseDir, $initDir = false, $skipOld = false)
    {
    }
    /**
     * Return BaseDirVersion
     * @param bool|string $baseDir Base cache directory (usually /bitrix/cache).
     * @param bool $skipOld Return cleaned value.
     *
     * @return void
     */
    function getBaseDirVersion($baseDir, $skipOld = false)
    {
    }
}