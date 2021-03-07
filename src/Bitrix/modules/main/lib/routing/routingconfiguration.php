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
 */
class RoutingConfiguration
{
    /** @var RoutingConfigurator */
    protected $configurator;
    /** @var Route|\Closure One route or group of routes */
    protected $routeContainer;
    /** @var Options */
    protected $options;
    public static $configurationList = ['get', 'post', 'any', 'group'];
    public function __call($method, $arguments)
    {
    }
    /**
     * @param RoutingConfigurator $configurator
     */
    public function setConfigurator($configurator)
    {
    }
    /**
     * @param Options $options
     */
    public function setOptions($options)
    {
    }
    public function get($uri, $controller)
    {
    }
    public function post($uri, $controller)
    {
    }
    public function any($uri, $controller)
    {
    }
    public function group($callback)
    {
    }
    public function release()
    {
    }
}