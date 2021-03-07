<?php

namespace Bitrix\Main\Routing;

/**
 * @package    bitrix
 * @subpackage main
 */
class Router
{
    /** @var Route[] */
    protected $routes = [];
    /** @var Route[] */
    protected $routesByName = [];
    /** @var RoutingConfiguration[] */
    protected $configurations = [];
    public function registerConfiguration($configuration)
    {
    }
    public function releaseRoutes()
    {
    }
    protected function reindexRoutes()
    {
    }
    /**
     * @param HttpRequest $request
     *
     * @return Route|void
     */
    public function match($request)
    {
    }
    /**
     * @param HttpRequest $request
     *
     * @return string
     */
    protected function getUriPath($request)
    {
    }
    public function url($url, $parameters = [])
    {
    }
    public function route($name, $parameters = [])
    {
    }
    /**
     * @return Route[]
     */
    public function getRoutes()
    {
    }
}