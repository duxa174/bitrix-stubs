<?php

namespace Bitrix\Main\Routing;

/**
 * @package    bitrix
 * @subpackage main
 *
 * @method RoutingConfiguration middleware($middleware)
 * @method RoutingConfiguration prefix($prefix)
 * @method RoutingConfiguration name($name)
 * @method RoutingConfiguration domain($domain)
 * @method RoutingConfiguration where($parameter, $pattern)
 * @method RoutingConfiguration default($parameter, $value)
 *
 * @method RoutingConfiguration get($uri, $controller)
 * @method RoutingConfiguration post($uri, $controller)
 * @method RoutingConfiguration any($uri, $controller)
 *
 * @method RoutingConfiguration group($callback)
 */
class RoutingConfigurator
{
    /** @var Router */
    protected $router;
    /** @var Options Acts inside groups as a stack */
    protected $scopeOptions;
    /**
     * RoutingConfigurator constructor.
     */
    public function __construct()
    {
    }
    public function __call($method, $arguments)
    {
    }
    public function createConfiguration()
    {
    }
    public function mergeOptionsWith($anotherOptions)
    {
    }
    /**
     * @return Router
     */
    public function getRouter()
    {
    }
    /**
     * @param Router $router
     */
    public function setRouter($router)
    {
    }
    public function __clone()
    {
    }
}