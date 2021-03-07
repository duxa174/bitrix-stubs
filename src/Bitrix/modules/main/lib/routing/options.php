<?php

namespace Bitrix\Main\Routing;

/**
 * @package    bitrix
 * @subpackage main
 */
class Options
{
    // could be auto-generated by Reflection and prop-prefixes
    public static $optionList = ['methods', 'middleware', 'prefix', 'name', 'domain', 'where', 'default'];
    protected $methods = [];
    protected $middleware = [];
    protected $prefix;
    protected $parentPrefixes = [];
    protected $name;
    protected $parentNames = [];
    protected $domain;
    protected $where = [];
    protected $default = [];
    /**
     * @param Options $anotherOptions
     */
    public function mergeWith($anotherOptions)
    {
    }
    public function methods($methods)
    {
    }
    /**
     * @return array
     */
    public function getMethods()
    {
    }
    public function middleware($middleware)
    {
    }
    public function prefix($prefix)
    {
    }
    public function hasPrefix()
    {
    }
    public function getFullPrefix()
    {
    }
    public function name($name)
    {
    }
    public function hasName()
    {
    }
    public function getFullName()
    {
    }
    /**
     * @param string $domain
     */
    public function domain($domain)
    {
    }
    public function where($parameter, $pattern)
    {
    }
    public function hasWhere($parameter)
    {
    }
    public function getWhere($parameter = null)
    {
    }
    public function default($parameter, $value)
    {
    }
    public function hasDefault($parameter)
    {
    }
    public function getDefault($parameter = null)
    {
    }
    /**
     * Clears runtime options for the new scope
     * Saves global options and
     */
    public function clearCurrent()
    {
    }
}