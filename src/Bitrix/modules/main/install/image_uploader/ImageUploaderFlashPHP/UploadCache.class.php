<?php

class UploadCache
{
    private $_cacheRoot;
    /**
     * UploadCache constructor
     * @param UploadSession $uploadSession
     */
    function __construct($cacheRoot)
    {
    }
    /**
     * Get default root upload cache directory.
     */
    public function getCacheRoot()
    {
    }
    public static function moveFile($source, $destination)
    {
    }
    public function getLastFullScanTimestamp()
    {
    }
    public function setLastFullScanTimestamp($value = \NULL)
    {
    }
    /**
     * Check if package exists in the cache
     * @param $package
     */
    public function isPackageCached($uploadSessionId, $packageIndex)
    {
    }
    public function loadSavedFields($uploadSessionId, $packageIndex)
    {
    }
    public function loadSavedFiles($uploadSessionId, $packageIndex)
    {
    }
    /**
     * Save package fields and files into upload temp cache
     * @param Package $package
     */
    public function saveRequestData($uploadSessionId, $packageIndex, $fields, $files)
    {
    }
    private function saveFields($path, $fields)
    {
    }
    private function saveFiles($path, $files, $fields)
    {
    }
    private function appendToFile($source, $destination)
    {
    }
    public function getSessionCacheDirectory($uploadSessionId)
    {
    }
    public function getPackageCacheDirectory($uploadSessionId, $packageIndex)
    {
    }
    private function setWriteTimestamp($uploadSessionId, $time = \NULL)
    {
    }
    public function getWriteTimestamp($uploadSessionId)
    {
    }
    public function cleanUploadSessionCache($uploadSessionId)
    {
    }
    private static function rmdir_recursive($dir)
    {
    }
}