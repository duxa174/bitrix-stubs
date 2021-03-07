<?php

namespace Bitrix\Main\Data\LocalStorage\Storage;

class CacheStorage implements \Bitrix\Main\Data\LocalStorage\Storage\StorageInterface
{
    private const CACHE_DIR = 'local-session';
    /** @var string */
    private $baseDir;
    /** @var CacheEngineInterface */
    private $cacheEngine;
    public function __construct(\Bitrix\Main\Data\LocalStorage\Storage\CacheEngineInterface $cacheEngine)
    {
    }
    public function read(string $key, int $ttl)
    {
    }
    public function write(string $key, $value, int $ttl)
    {
    }
}