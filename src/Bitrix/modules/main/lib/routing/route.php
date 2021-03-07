<?php

namespace Bitrix\Main\Routing;

/**
 * @package    bitrix
 * @subpackage main
 */
class Route
{
    /** @var string Defined by user */
    protected $uri;
    /** @var string uri with prefix */
    protected $fullUri;
    /** @var string Defined by compile() */
    protected $matchUri;
    /** @var array [name => pattern] Defined by compile() */
    protected $parameters;
    /** @var ParameterDictionary Set by router->match() */
    protected $parametersValues;
    /** @var callable */
    protected $controller;
    /** @var Options */
    protected $options;
    public function __construct($uri, $controller)
    {
    }
    /**
     * @return Options
     */
    public function getOptions()
    {
    }
    /**
     * @param Options $options
     */
    public function setOptions($options)
    {
    }
    /**
     * @return callable
     */
    public function getController()
    {
    }
    /**
     * @return array
     */
    public function getParameters()
    {
    }
    /**
     * @return ParameterDictionary
     */
    public function getParametersValues()
    {
    }
    public function getParameterValue($name)
    {
    }
    public function compile()
    {
    }
    public function compileFromCache($cacheData)
    {
    }
    public function getCompileCache()
    {
    }
    public function match($uriPath)
    {
    }
    function getUri()
    {
    }
}