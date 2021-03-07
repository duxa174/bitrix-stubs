<?php

namespace Bitrix\Landing;

class Site extends \Bitrix\Landing\Internals\BaseTable
{
    /**
     * Internal class.
     * @var string
     */
    public static $internalClass = 'SiteTable';
    /**
     * Return true if site exists and available.
     * @param int $id Site id.
     * @param bool $deleted And from recycle bin.
     * @return bool
     */
    public static function ping($id, $deleted = false)
    {
    }
    /**
     * Get public url for site.
     * @param int[]|int $id Site id or array of ids.
     * @param boolean $full Return full site url with relative path.
     * @return string|array
     */
    public static function getPublicUrl($id, $full = true)
    {
    }
    /**
     * Get hooks of Site.
     * @param int $id Site id.
     * @return array Array of Hook.
     */
    public static function getHooks($id)
    {
    }
    /**
     * Get additional fields of Landing.
     * @param int $id Landing id.
     * @return array Array of Field.
     */
    public static function getAdditionalFields($id)
    {
    }
    /**
     * Save additional fields for Site.
     * @param int $id Site id.
     * @param array $data Data array.
     * @return void
     */
    public static function saveAdditionalFields($id, array $data)
    {
    }
    /**
     * Get existed site types.
     * @return array
     */
    public static function getTypes()
    {
    }
    /**
     * Get default site type.
     * @return string
     */
    public static function getDefaultType()
    {
    }
    /**
     * Delete site by id.
     * @param int $id Site id.
     * @param bool $pagesDelete Delete all pages before.
     * @return \Bitrix\Main\Result
     */
    public static function delete($id, $pagesDelete = false)
    {
    }
    /**
     * Mark entity as deleted.
     * @param int $id Entity id.
     * @return \Bitrix\Main\Result
     */
    public static function markDelete($id)
    {
    }
    /**
     * Mark entity as restored.
     * @param int $id Entity id.
     * @return \Bitrix\Main\Result
     */
    public static function markUnDelete($id)
    {
    }
    /**
     * Copy site without site's pages.
     * @param int $siteId Site id.
     * @return \Bitrix\Main\Result
     */
    public static function copy($siteId)
    {
    }
    /**
     * Get full data for site with pages.
     * @param int $siteForExport Site id.
     * @param array $params Some params.
     * @return array
     */
    public static function fullExport($siteForExport, $params = array())
    {
    }
    /**
     * Get md5 hash for site, using http host.
     * @param int $id Site id.
     * @param string $domain Domain name for this site.
     * @return string
     */
    public static function getPublicHash($id, $domain = null)
    {
    }
    /**
     * Switch domains between two sites. Returns true on success.
     * @param int $siteId1 First site id.
     * @param int $siteId2 Second site id.
     * @return bool
     */
    public static function switchDomain(int $siteId1, int $siteId2) : bool
    {
    }
    /**
     * Sets new random domain to site. Actual for Bitrix24 only.
     * @param int $siteId Site id.
     * @return bool
     */
    public static function randomizeDomain(int $siteId) : bool
    {
    }
    /**
     * Tries to add page to the all menu on the site.
     * Detects blocks with menu-manifests only.
     * @param int $siteId Site id.
     * @param array $data Landing data ([ID, TITLE]).
     * @return void
     */
    public static function addLandingToMenu(int $siteId, array $data) : void
    {
    }
    /**
     * Change modified user and date for the site.
     * @param int $id Site id.
     * @return void
     */
    public static function touch(int $id) : void
    {
    }
    /**
     * Event handler for check existing pages of main module's site.
     * @param string $siteId Main site id.
     * @return bool
     */
    public static function onBeforeMainSiteDelete($siteId)
    {
    }
    /**
     * Event handler for delete pages of main module's site.
     * @param string $siteId Main site id.
     * @return void
     */
    public static function onMainSiteDelete($siteId)
    {
    }
}