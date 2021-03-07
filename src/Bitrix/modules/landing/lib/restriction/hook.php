<?php

namespace Bitrix\Landing\Restriction;

class Hook
{
    /**
     * Codes under limits.
     */
    const MAP = ['gtm' => 'limit_sites_google_analytics', 'gacounter' => 'limit_sites_google_analytics', 'yacounter' => 'limit_sites_google_analytics', 'copyright' => 'limit_sites_powered_by', 'headblock' => 'limit_sites_html_js'];
    /**
     * Returns restriction code by hook code.
     * @param string $hookCode Hook code.
     * @return string|null
     */
    public static function getRestrictionCodeByHookCode(string $hookCode) : ?string
    {
    }
    /**
     * Checks hook restriction by hook code.
     * @param string $hookCode Hook code.
     * @return bool
     */
    public static function isHookAllowed(string $hookCode) : bool
    {
    }
    /**
     * Checks hook restriction existing by code.
     * @param string $code Restriction code.
     * @return bool
     */
    public static function isAllowed(string $code) : bool
    {
    }
}