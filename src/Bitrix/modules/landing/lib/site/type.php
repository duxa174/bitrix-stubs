<?php

namespace Bitrix\Landing\Site;

class Type
{
    /**
     * Scope group.
     */
    const SCOPE_CODE_GROUP = 'GROUP';
    /**
     * Scope knowledge.
     */
    const SCOPE_CODE_KNOWLEDGE = 'KNOWLEDGE';
    /**
     * Current scope class name.
     * @var Scope
     */
    protected static $currentScopeClass = null;
    /**
     * Scope already init.
     * @var bool
     */
    protected static $scopeInit = false;
    /**
     * Returns scope class, if exist.
     * @param string $scope Scope code.
     * @return string|null
     */
    protected static function getScopeClass($scope)
    {
    }
    /**
     * Set global scope.
     * @param string $scope Scope code.
     * @param array $params Additional params.
     * @return void
     */
    public static function setScope($scope, array $params = [])
    {
    }
    /**
     * Clear selected scope.
     * @return void
     */
    public static function clearScope()
    {
    }
    /**
     * Returns publication path string.
     * @return string|null
     */
    public static function getPublicationPath()
    {
    }
    /**
     * Return general key for site path (ID or CODE).
     * @return string
     */
    public static function getKeyCode()
    {
    }
    /**
     * Returns domain id for new site.
     * @return int|string
     */
    public static function getDomainId()
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
     * Returns filter value for 'TYPE' key.
     * @param bool $strict If strict, returns without default.
     * @return string|string[]
     */
    public static function getFilterType($strict = false)
    {
    }
    /**
     * Returns array of hook's codes, which excluded by scope.
     * @return array
     */
    public static function getExcludedHooks() : array
    {
    }
    /**
     * Returns true, if type is enabled in system.
     * @param string $code Type code.
     * @return bool
     */
    public static function isEnabled($code)
    {
    }
}