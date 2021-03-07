<?php

namespace Bitrix\Main\Config;

final class Configuration implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var Configuration[]
     */
    private static $instances;
    private $moduleId = null;
    private $storedData = null;
    private $data = array();
    private $isLoaded = false;
    const CONFIGURATION_FILE_PATH = "/bitrix/.settings.php";
    const CONFIGURATION_FILE_PATH_EXTRA = "/bitrix/.settings_extra.php";
    public static function getValue($name)
    {
    }
    public static function setValue($name, $value)
    {
    }
    private function __construct($moduleId = null)
    {
    }
    /**
     * @static
     *
     * @param string|null $moduleId
     * @return Configuration
     */
    public static function getInstance($moduleId = null)
    {
    }
    private static function getPath($path)
    {
    }
    private static function getPathConfigForModule($moduleId)
    {
    }
    private function loadConfiguration()
    {
    }
    public function saveConfiguration()
    {
    }
    public function add($name, $value)
    {
    }
    /**
     * Changes readonly params.
     * Warning! Developer must use this method very carfully!.
     * You must use this method only if you know what you do!
     * @param string $name
     * @param array $value
     * @return void
     */
    public function addReadonly($name, $value)
    {
    }
    public function delete($name)
    {
    }
    public function get($name)
    {
    }
    public function offsetExists($name)
    {
    }
    public function offsetGet($name)
    {
    }
    public function offsetSet($name, $value)
    {
    }
    public function offsetUnset($name)
    {
    }
    public function current()
    {
    }
    public function next()
    {
    }
    public function key()
    {
    }
    public function valid()
    {
    }
    public function rewind()
    {
    }
    public function count()
    {
    }
    public static function wnc()
    {
    }
}