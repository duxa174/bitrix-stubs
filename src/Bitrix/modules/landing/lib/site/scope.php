<?php

namespace Bitrix\Landing\Site;

abstract class Scope
{
    protected static $currentScopeId = null;
    /**
     * Method for first time initialization scope.
     * @param array $params Additional params.
     * @return void
     */
    public static function init(array $params = [])
    {
    }
    /**
     * Returns current scope id.
     * @return string|null
     */
    public static function getCurrentScopeId()
    {
    }
    /**
     * Should return publication path string.
     * @return string
     */
    public static abstract function getPublicationPath();
    /**
     * Should return general key for site path (ID or CODE).
     * @return string
     */
    public static abstract function getKeyCode();
    /**
     * Should return domain id for new site.
     * @return int|string
     */
    public static abstract function getDomainId();
    /**
     * Should return filter value for 'TYPE' key.
     * @return mixed
     */
    public static abstract function getFilterType();
    /**
     * Returns array of hook's codes, which excluded by scope.
     * @return array
     */
    public static abstract function getExcludedHooks() : array;
}