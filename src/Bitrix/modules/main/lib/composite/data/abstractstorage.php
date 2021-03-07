<?php

namespace Bitrix\Main\Composite\Data;

/**
 * Class AbstractStorage
 * Represents the interface for a cache storage
 * @package Bitrix\Main\Composite\Data
 */
abstract class AbstractStorage
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
     * Writes the content to the storage
     * @param string $content the string that is to be written
     * @param string $md5 the content hash
     *
     * @return bool
     */
    public abstract function write($content, $md5);
    /**
     * Returns the cache contents
     * @return string|false
     */
    public abstract function read();
    /**
     * Returns true if the cache exists
     * @return bool
     */
    public abstract function exists();
    /**
     * Deletes the cache
     * Returns the number of deleted bytes
     * @return int|false
     */
    public abstract function delete();
    /**
     * Deletes all cache data in the storage
     * @return bool
     */
    public abstract function deleteAll();
    /**
     * Returns md5 hash of the cache
     * @return string|false
     */
    public abstract function getMd5();
    /**
     * Should we count a quota limit
     * @return bool
     */
    public abstract function shouldCountQuota();
    /**
     * Returns the time the cache was last modified
     * @return int|false
     */
    public abstract function getLastModified();
    /**
     * Returns cache size
     * @return int|false
     */
    public abstract function getSize();
}