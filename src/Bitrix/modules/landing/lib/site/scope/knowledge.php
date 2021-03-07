<?php

namespace Bitrix\Landing\Site\Scope;

class Knowledge extends \Bitrix\Landing\Site\Scope
{
    /**
     * Method for first time initialization scope.
     * @param array $params Additional params.
     * @return void
     */
    public static function init(array $params = [])
    {
    }
    /**
     * Returns publication path string.
     * @return string
     */
    public static function getPublicationPath()
    {
    }
    /**
     * Return general key for site path.
     * @return string
     */
    public static function getKeyCode()
    {
    }
    /**
     * Returns domain id for new site.
     * @return int
     */
    public static function getDomainId()
    {
    }
    /**
     * Returns filter value for 'TYPE' key.
     * @return string
     */
    public static function getFilterType()
    {
    }
    /**
     * Returns array of hook's codes, which excluded by scope.
     * @return array
     */
    public static function getExcludedHooks() : array
    {
    }
}