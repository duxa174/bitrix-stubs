<?php

namespace Bitrix\Main\Config;

class Option
{
    const CACHE_DIR = "b_option";
    protected static $options = array();
    /**
     * Returns a value of an option.
     *
     * @param string $moduleId The module ID.
     * @param string $name The option name.
     * @param string $default The default value to return, if a value doesn't exist.
     * @param bool|string $siteId The site ID, if the option differs for sites.
     * @return string
     * @throws Main\ArgumentNullException
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function get($moduleId, $name, $default = "", $siteId = false)
    {
    }
    /**
     * Returns the real value of an option as it's written in a DB.
     *
     * @param string $moduleId The module ID.
     * @param string $name The option name.
     * @param bool|string $siteId The site ID.
     * @return null|string
     * @throws Main\ArgumentNullException
     */
    public static function getRealValue($moduleId, $name, $siteId = false)
    {
    }
    /**
     * Returns an array with default values of a module options (from a default_option.php file).
     *
     * @param string $moduleId The module ID.
     * @return array
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function getDefaults($moduleId)
    {
    }
    /**
     * Returns an array of set options array(name => value).
     *
     * @param string $moduleId The module ID.
     * @param bool|string $siteId The site ID, if the option differs for sites.
     * @return array
     * @throws Main\ArgumentNullException
     */
    public static function getForModule($moduleId, $siteId = false)
    {
    }
    protected static function load($moduleId)
    {
    }
    /**
     * Sets an option value and saves it into a DB. After saving the OnAfterSetOption event is triggered.
     *
     * @param string $moduleId The module ID.
     * @param string $name The option name.
     * @param string $value The option value.
     * @param string $siteId The site ID, if the option depends on a site.
     * @throws Main\ArgumentOutOfRangeException
     */
    public static function set($moduleId, $name, $value = "", $siteId = "")
    {
    }
    protected static function loadTriggers($moduleId)
    {
    }
    protected static function getCacheTtl()
    {
    }
    /**
     * Deletes options from a DB.
     *
     * @param string $moduleId The module ID.
     * @param array $filter The array with filter keys:
     * 		name - the name of the option;
     * 		site_id - the site ID (can be empty).
     * @throws Main\ArgumentNullException
     */
    public static function delete($moduleId, array $filter = array())
    {
    }
    protected static function clearCache($moduleId)
    {
    }
    protected static function getDefaultSite()
    {
    }
}