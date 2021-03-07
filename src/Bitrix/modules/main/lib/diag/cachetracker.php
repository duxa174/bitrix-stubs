<?php

namespace Bitrix\Main\Diag;

class CacheTracker
{
    private static $cacheStatBytes = 0;
    private static $arCacheDebug = array();
    private static $skipUntil = array("bitrix\\main\\diag\\cachetracker::add" => true, "bitrix\\main\\data\\cache->initcache" => true, "bitrix\\main\\data\\cache->startdatacache" => true, "bitrix\\main\\data\\cache->enddatacache" => true, "bitrix\\main\\data\\cache->clean" => true, "bitrix\\main\\data\\cache->cleandir" => true, "bitrix\\main\\data\\managedcache->read" => true, "bitrix\\main\\data\\managedcache->setimmediate" => true, "bitrix\\main\\data\\managedcache->clean" => true, "bitrix\\main\\data\\managedcache->cleandir" => true, "bitrix\\main\\data\\managedcache->cleanall" => true, "cbitrixcomponent->startresultcache" => true);
    /**
     * @param int $cacheStatBytes
     */
    public static function setCacheStatBytes($cacheStatBytes)
    {
    }
    public static function addCacheStatBytes($cacheStatBytes)
    {
    }
    public static function getCacheStatBytes()
    {
    }
    public static function add($size, $path, $baseDir, $initDir, $filename, $operation)
    {
    }
    public static function getCacheTracking()
    {
    }
    public static function setCacheTracking($val)
    {
    }
}