<?php

namespace Bitrix\Landing\Landing;

class View
{
    /**
     * Key for session array for storing viewed landings.
     */
    const SESSION_VIEWS_KEY = 'LANDING_VIEWS';
    /**
     * Inc views for page.
     * @param int $lid Landing id.
     * @return void
     */
    protected static function incViewsPage($lid)
    {
    }
    /**
     * Inc views of page.
     * @param int $lid Landing id.
     * @param int $uid User id (current by default).
     * @return void
     */
    public static function inc($lid, $uid = null)
    {
    }
}