<?php

namespace Bitrix\Main\Composite\Data;

final class FileStorage extends \Bitrix\Main\Composite\Data\AbstractStorage
{
    private $cacheFile = null;
    function __construct($cacheKey, array $configuration, array $htmlCacheOptions)
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
    public function getLastModified()
    {
    }
    /**
     * Returns cache size
     * @return int|false
     */
    public function getSize()
    {
    }
    public function getCacheFile()
    {
    }
    /**
     * Deletes all above html_pages
     * @param string $relativePath [optional]
     * @param int $validTime [optional] unix timestamp
     * @return float
     */
    public static function deleteRecursive($relativePath = "", $validTime = 0)
    {
    }
}