<?php

namespace Bitrix\Main\Data;

class TaggedCache
{
    protected $compCacheStack = [];
    protected $salt = false;
    protected $cacheTag = [];
    protected $wasTagged = false;
    protected $isMySql = false;
    protected $pool = false;
    public function __construct()
    {
    }
    protected static function getDbType()
    {
    }
    protected function initDbCache($path)
    {
    }
    protected function initCompSalt()
    {
    }
    public function startTagCache($relativePath)
    {
    }
    public function endTagCache()
    {
    }
    public function abortTagCache()
    {
    }
    public function registerTag($tag)
    {
    }
    public function clearByTag($tag)
    {
    }
}