<?php

namespace Bitrix\Main\Composite\Data;

/**
 * Class MemcachedStorage
 * Stores html cache in a memcached
 * @package Bitrix\Main\Composite\Data
 */
final class MemcachedStorage extends \Bitrix\Main\Composite\Data\AbstractStorage
{
    private $memcached = null;
    private $props = null;
    private $compression = true;
    public function __construct($cacheKey, array $configuration, array $htmlCacheOptions)
    {
    }
    public function write($content, $md5)
    {
    }
    public function read()
    {
    }
    public function exists()
    {
    }
    public function delete()
    {
    }
    public function deleteAll()
    {
    }
    /**
     * Returns the md5 hash of the cache
     * @return string|false
     */
    public function getMd5()
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
     * Returns the time the cache was last modified
     * @return int|false
     */
    public function getLastModified()
    {
    }
    /**
     * Returns the size of the cache
     *
     * @return int|false
     */
    public function getSize()
    {
    }
    /**
     * Returns an array of the cache properties
     *
     * @return \stdClass|false
     */
    protected function getProps()
    {
    }
    /**
     * Deletes the cache properties
     *
     * @return bool
     */
    protected function deleteProps()
    {
    }
    /**
     * Returns the property value
     * @param string $property the property name
     *
     * @return string|false
     */
    protected function getProp($property)
    {
    }
}