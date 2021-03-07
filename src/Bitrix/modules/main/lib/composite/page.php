<?php

namespace Bitrix\Main\Composite;

/**
 * Class Page
 * @package Bitrix\Main\Composite
 */
class Page
{
    /**
     * @var Page
     */
    protected static $instance = null;
    /**
     * @var string
     */
    private $cacheKey = null;
    /**
     * @var bool
     */
    private $canCache = true;
    /**
     * @var Data\AbstractStorage
     */
    private $storage = null;
    /**
     * @var CacheProvider
     */
    private $cacheProvider = null;
    private $voting = true;
    /**
     * Creates new cache manager instance.
     * @param {string } $requestUri
     * @param {string} $host
     * @param {string} $privateKey
     */
    public function __construct($requestUri = null, $host = null, $privateKey = null)
    {
    }
    protected function init($cacheKey)
    {
    }
    public static function createFromCacheKey($cacheKey)
    {
    }
    /**
     * Returns current instance of the Storage.
     *
     * @return Page
     */
    public static function getInstance()
    {
    }
    /**
     *
     * Returns File Storage or Memcached Storage
     * @return Data\AbstractStorage|null
     */
    public function getStorage()
    {
    }
    public function setCacheProvider(\Bitrix\Main\Composite\Data\CacheProvider $provider)
    {
    }
    /**
     * @return CacheProvider|null
     */
    private static function getCacheProvider()
    {
    }
    /*
     * Returns private cache key
     */
    public static function getPrivateKey()
    {
    }
    /**
     * Converts request uri into path safe file with .html extension.
     * Returns empty string if fails.
     * @param string $uri Uri.
     * @param string $host Host name.
     * @param string $privateKey
     * @return string
     */
    public static function convertUriToPath($uri, $host = null, $privateKey = null)
    {
    }
    /**
     * Returns cache key
     * @return string
     */
    public function getCacheKey()
    {
    }
    /**
     * Writes the content to the storage
     * @param string $content the string that is to be written
     * @param string $md5 the content hash
     *
     * @return bool
     */
    public function write($content, $md5)
    {
    }
    /**
     * Returns html content from the cache
     *
     * @return string
     */
    public function read()
    {
    }
    /**
     * Deletes the cache
     *
     * @return bool|int
     */
    public function delete()
    {
    }
    /**
     * Deletes all cache data
     * @return bool
     */
    public function deleteAll()
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
     * Returns true if the cache exists
     *
     * @return boolean
     */
    public function exists()
    {
    }
    /**
     * Returns hash of the cache
     * @return string|false
     */
    public function getMd5()
    {
    }
    /**
     * Returns cache size
     * @return int|false
     */
    public function getSize()
    {
    }
    /**
     * Returns true if we can cache current request
     *
     * @return bool
     */
    public function isCacheable()
    {
    }
    /**
     * Marks current page as non cacheable.
     *
     * @return void
     */
    public function markNonCacheable()
    {
    }
    public function setUserPrivateKey()
    {
    }
    public function onBeforeEndBufferContent()
    {
    }
    /**
     * Returns the instance of the StaticHtmlStorage
     * @param string $cacheKey unique cache identifier
     *
     * @return Data\AbstractStorage|null
     */
    public static function getStaticHtmlStorage($cacheKey)
    {
    }
    public function enableVoting()
    {
    }
    public function disableVoting()
    {
    }
    public function isVotingEnabled()
    {
    }
    /**
     * Tries to vote against composite mode
     * @param string $context
     * @internal
     */
    public function giveNegativeComponentVote($context = "")
    {
    }
}