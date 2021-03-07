<?php

class LandingUtilsCmpFilterComponent extends \CBitrixComponent
{
    /**
     * Search or not by search module.
     */
    const ENABLED_SEARCH_MODULE = \true;
    /**
     * Get filter for main.ui.filter used.
     * @return array
     */
    public static function getFilterFields()
    {
    }
    /**
     * Get additional filter by query string.
     * @param string $q Query string.
     * @return array
     */
    protected static function search($q)
    {
    }
    /**
     * Base executable method.
     * @return void
     */
    public function executeComponent()
    {
    }
}