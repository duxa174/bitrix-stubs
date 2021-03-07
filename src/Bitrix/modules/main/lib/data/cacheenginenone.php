<?php

namespace Bitrix\Main\Data;

class CacheEngineNone implements \Bitrix\Main\Data\ICacheEngine, \Bitrix\Main\Data\ICacheEngineStat
{
    public function getReadBytes()
    {
    }
    public function getWrittenBytes()
    {
    }
    public function getCachePath()
    {
    }
    public function isAvailable()
    {
    }
    public function clean($baseDir, $initDir = false, $filename = false)
    {
    }
    public function read(&$allVars, $baseDir, $initDir, $filename, $TTL)
    {
    }
    public function write($allVars, $baseDir, $initDir, $filename, $TTL)
    {
    }
    public function isCacheExpired($path)
    {
    }
}