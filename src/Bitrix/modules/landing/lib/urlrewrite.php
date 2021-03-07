<?php

namespace Bitrix\Landing;

class UrlRewrite
{
    /**
     * Set rule for the site.
     * @param int $siteId Site id.
     * @param string $rule Rule.
     * @param int $landingId Landing id. If empty then remove.
     * @return void
     */
    public static function set($siteId, $rule, $landingId = null)
    {
    }
    /**
     * Unset rule for the site.
     * @param int $siteId Site id.
     * @param string $rule Rule.
     * @return void
     */
    public static function remove($siteId, $rule)
    {
    }
    /**
     * Matching rule for url.
     * @param int $siteId Site id.
     * @param string $url Some url.
     * @return int Landing id.
     */
    public static function matchUrl($siteId, $url)
    {
    }
    /**
     * Clear rules for one site.
     * @param int $siteId Site id.
     * @return void
     */
    public static function removeForSite($siteId)
    {
    }
    /**
     * Clear rules for one site.
     * @param int $landingId Landing id.
     * @return void
     */
    public static function removeForLanding($landingId)
    {
    }
}