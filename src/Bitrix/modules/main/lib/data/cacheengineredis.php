<?php

namespace Bitrix\Main\Data;

class CacheEngineRedis implements \Bitrix\Main\Data\ICacheEngine, \Bitrix\Main\Data\LocalStorage\Storage\CacheEngineInterface
{
    public const SESSION_REDIS_CONNECTION = 'cache.redis';
    protected static $redis = null;
    protected static $locks = [];
    protected static $isConnected = false;
    private static $baseDirVersion = [];
    private static $host = '127.0.0.1';
    private static $port = 6379;
    protected $sid = "BX";
    protected $useLock = false;
    protected $ttlMultiplier = 2;
    protected $old = false;
    protected $serializer = \Redis::SERIALIZER_IGBINARY;
    protected $persistent = true;
    /**
     * CacheEngineRedis constructor.
     * @param array $options Cache options.
     */
    public function __construct($options = [])
    {
    }
    protected function configure()
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
     * Returns true if cache can be read or written.
     *
     * @return bool
     */
    public function isAvailable()
    {
    }
    /**
     * Tries to put non blocking exclusive lock on the cache entry.
     * Returns true on success.
     *
     * @param string $baseDir Base cache directory (usually /bitrix/cache).
     * @param string $initDir Directory within base.
     * @param string $key Calculated cache key.
     * @param integer $ttl Expiration period in seconds.
     *
     * @return boolean
     */
    protected function lock($baseDir, $initDir, $key, $ttl)
    {
    }
    /**
     * Releases the lock obtained by lock method.
     *
     * @param string $baseDir Base cache directory (usually /bitrix/cache).
     * @param string $initDir Directory within base.
     * @param string $key Calculated cache key.
     * @param integer $ttl Expiration period in seconds.
     *
     * @return void
     */
    protected function unlock($baseDir, $initDir = false, $key = false, $ttl = 0)
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
    public function clean($baseDir, $initDir = false, $filename = false)
    {
    }
    /**
     * Reads cache from the memcache. Returns true if key value exists, not expired, and successfully read.
     *
     * @param mixed &$allVars Cached result.
     * @param string $baseDir Base cache directory (usually /bitrix/cache).
     * @param string $initDir Directory within base.
     * @param string $filename File name.
     * @param integer $ttl Expiration period in seconds.
     *
     * @return boolean
     */
    public function read(&$allVars, $baseDir, $initDir, $filename, $ttl)
    {
    }
    /**
     * Puts cache into the memcache.
     *
     * @param mixed $allVars Cached result.
     * @param string $baseDir Base cache directory (usually /bitrix/cache).
     * @param string $initDir Directory within base.
     * @param string $filename File name.
     * @param integer $ttl Expiration period in seconds.
     *
     * @return void
     */
    public function write($allVars, $baseDir, $initDir, $filename, $ttl)
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
    public function isCacheExpired($path)
    {
    }
    /**
     * Return InitDirVersion
     * @param bool|string $baseDir Base cache directory (usually /bitrix/cache).
     * @param bool|string $initDir Directory within base.
     * @param bool $skipOld Return cleaned value.
     * @return array|bool|string
     */
    protected function getInitDirVersion($baseDir, $initDir = false, $skipOld = false)
    {
    }
    /**
     * Return BaseDirVersion
     * @param bool|string $baseDir Base cache directory (usually /bitrix/cache).
     * @param bool $skipOld Return cleaned value.
     *
     * @return void
     */
    protected function getBaseDirVersion($baseDir, $skipOld = false)
    {
    }
}