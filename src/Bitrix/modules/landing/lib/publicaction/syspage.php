<?php

namespace Bitrix\Landing\PublicAction;

class Syspage
{
    /**
     * Set new system page for site.
     * @param int $id Site id.
     * @param string $type System page type.
     * @param int $lid Landing id (if not set, ref was deleted).
     * @return void
     */
    public static function set($id, $type, $lid = false)
    {
    }
    /**
     * Get pages for site.
     * @param integer $id Site id.
     * @param bool $active Only active items.
     * @return PublicActionResult
     */
    public static function get($id, $active = false)
    {
    }
    /**
     * Delete all sys pages by site id.
     * @param integer $id Site id.
     * @return void
     */
    public static function deleteForSite($id)
    {
    }
    /**
     * Delete all sys pages by id.
     * @param integer $id Landing id.
     * @return void
     */
    public static function deleteForLanding($id)
    {
    }
    /**
     * Get url of special page of site.
     * @param int $siteId Site id.
     * @param string $type Type of special page.
     * @param array $additional Additional params for uri.
     * @return PublicActionResult
     */
    public static function getSpecialPage($siteId, $type, array $additional = [])
    {
    }
}