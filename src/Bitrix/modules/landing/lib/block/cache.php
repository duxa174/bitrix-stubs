<?php

namespace Bitrix\Landing\Block;

class Cache
{
    /**
     * Tag prefix.
     */
    const TAG_PREFIX = 'landing_block_';
    protected static $cacheDisabled = false;
    /**
     * Disables caching.
     * @return void
     */
    public static function disableCache() : void
    {
    }
    /**
     * Enables caching.
     * @return void
     */
    public static function enableCache() : void
    {
    }
    /**
     * Cache is enabled.
     * @return bool
     */
    public static function isCaching() : bool
    {
    }
    /**
     * Registers the block in the cache.
     * @param int $id Block id.
     * @return void
     */
    public static function register($id) : void
    {
    }
    /**
     * Clears cache for the block.
     * @param int $id Block id.
     * @return void
     */
    public static function clear($id) : void
    {
    }
}