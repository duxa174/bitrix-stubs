<?php

namespace Bitrix\Landing\Landing;

class Seo
{
    /**
     * Stored seo keys.
     * @var array
     */
    private static $storedKeys = ['title' => null, 'description' => null, 'keywords' => null];
    /**
     * Changed seo keys.
     * @var array
     */
    private static $changedKeys = ['title' => null, 'description' => null, 'keywords' => null];
    /**
     * Keep seo keys for analyze in future.
     * @return void
     */
    public static function beforeLandingView()
    {
    }
    /**
     * Analyze stored seo keys.
     * @return void
     */
    public static function afterLandingView()
    {
    }
    /**
     * If seo key was changed then returns changed value, else returns $value.
     * @param string $key Seo key.
     * @param string $value Seo value.
     * @return string
     */
    public static function processValue($key, $value)
    {
    }
    /**
     * Manually changes some seo key.
     * @param string $key Seo key.
     * @param string $value Seo value.
     * @return void
     */
    public static function changeValue($key, $value)
    {
    }
}