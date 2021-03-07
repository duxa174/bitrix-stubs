<?php

namespace Bitrix\Landing\Transfer\Export;

class Site
{
    /**
     * Maximum sites for export.
     */
    const MAX_SITE_FOR_EXPORT = 10;
    /**
     * File name for step when called site meta data.
     */
    const FILENAME_EXPORT_STEP_META = 'page_#site_id#_00';
    /**
     * File name for step when called ste page.
     */
    const FILENAME_EXPORT_STEP_PAGE = 'page_#site_id#_10_#landing_id#';
    /**
     * Returns export url for the site.
     * @param string $type Site type.
     * @param int $siteId Site id.
     * @return string
     */
    public static function getUrl(string $type, int $siteId) : string
    {
    }
    /**
     * Returns applications id by it codes.
     * @param array $appCodes Applications codes.
     * @return array
     */
    protected static function getRestAppIds(array $appCodes) : array
    {
    }
    /**
     * Returns prepare manifest settings for export.
     * @param Event $event Event instance.
     * @return array|null
     */
    public static function getInitManifest(\Bitrix\Main\Event $event) : ?array
    {
    }
    /**
     * Exports site meta information.
     * @param int $siteId Site id.
     * @return array|null
     */
    protected static function exportSiteMeta(int $siteId) : ?array
    {
    }
    /**
     * Process one export step.
     * @param Event $event Event instance.
     * @return array
     */
    public static function nextStep(\Bitrix\Main\Event $event) : array
    {
    }
    /**
     * Final step.
     * @param Event $event Event instance.
     * @return array
     */
    public static function onFinish(\Bitrix\Main\Event $event) : array
    {
    }
}