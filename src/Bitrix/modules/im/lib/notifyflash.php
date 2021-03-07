<?php

namespace Bitrix\Im;

class NotifyFlash
{
    static $instance = null;
    private $notify = [];
    private $commitList = [];
    const TYPE_NOTIFY = 'notify';
    const TYPE_MESSAGE = 'message';
    const ENGINE_SESSION = 'session';
    const ENGINE_CACHE = 'cache';
    private $cacheTtl = null;
    private $cacheDir = null;
    public static function getInstance() : self
    {
    }
    public function getEngineType() : string
    {
    }
    public function setEngineType(string $type) : bool
    {
    }
    private function __construct()
    {
    }
    public function set(string $type, $id) : bool
    {
    }
    public function exists(string $type, $id) : bool
    {
    }
    public function commit() : bool
    {
    }
    /* session block */
    private function initSession() : bool
    {
    }
    private function commitSession() : bool
    {
    }
    /* cache block */
    private function getCacheId() : string
    {
    }
    private function initCache() : bool
    {
    }
    private function commitCache() : bool
    {
    }
}