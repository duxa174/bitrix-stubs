<?php

namespace Bitrix\Landing\Landing;

class Cache
{
    /**
     * Tag prefix.
     */
    const TAG_PREFIX = 'landing_page_';
    /**
     * Cache is enabled.
     * @return bool
     */
    public static function isCaching()
    {
    }
    /**
     * Registers the page in the cache.
     * @param int $id Landing id.
     * @return void
     */
    public static function register($id)
    {
    }
    /**
     * Clears cache for the page.
     * @param int $id Landing id.
     * @return void
     */
    public static function clear($id)
    {
    }
}