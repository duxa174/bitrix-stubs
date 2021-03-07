<?php

namespace Bitrix\Main\UrlPreview;

class Router
{
    const CACHE_ID = 'UrlPreviewRouteCache';
    const CACHE_TTL = 315360000;
    /** @var array
     * Allowed keys: ID, MODULE, CLASS, BUILD_METHOD, CHECK_METHOD, PARAMETERS
     */
    protected static $routeTable = array();
    /** @var \Bitrix\Main\Data\ManagedCache */
    protected static $managedCache;
    /** @var bool */
    protected static $initialized = false;
    /**
     * Adds, or, if route already exists, changes route handling method.
     * @param string $route Route URL template.
     * Route parameters should be enclosed in hash symbols, like '/user/#userId#/'.
     * @param string $handlerModule Route handler module.
     * @param string $handlerClass Route handler class should implement methods:
     * <ul>
     * 		<li>buildPreview($params): string. Method must accept array of parameters and return rendered preview
     * 		<li>checkUserReadAccess($params): boolean. Method must accept array of parameters. Method must return true if
     * 			currently logged in user has read access to the entity; false otherwise.
     * 		<li>getCacheTag(): string. Method must return cache tag for the entity.
     * </ul>.
     * @param array $handlerParameters Array of parameters, passed to the handler methods.
     * Will be passed as the argument when calling handler's method for building preview or checking access.
     * Array values may contain variables referencing route parameters.
     * e.g. ['userId' => '$userId'].
     * @return void
     * @throws ArgumentException
     */
    public static function setRouteHandler($route, $handlerModule, $handlerClass, array $handlerParameters)
    {
    }
    /**
     * Returns handler for the url
     *
     * @param Uri $uri Absolute or relative URL.
     * @return array|false Handler for this URL if found, false otherwise.
     */
    public static function dispatch(\Bitrix\Main\Web\Uri $uri)
    {
    }
    /**
     * Initializes router and prepares routing table.
     * @return void
     */
    protected static function init()
    {
    }
    /**
     * Persists routing table record in database
     *
     * @param string $route Route URL template.
     * @param bool $isNew True if handler record was not encountered in router cache.
     * @return bool Returns true if route is successfully stored in the database table, and false otherwise.
     */
    protected static function persistRoute($route, $isNew)
    {
    }
    /**
     * Return regexp string for checking URL against route template.
     * @param string $route Route URL template.
     * @return string
     */
    protected static function convertRouteToRegexp($route)
    {
    }
    /**
     * Resets router cache
     * @return void
     */
    public static function invalidateRouteCache()
    {
    }
}