<?php

namespace Bitrix\Landing\Transfer\Import;

class Site
{
    /**
     * Returns export url for the site.
     * @param string $type Site type.
     * @return string
     */
    public static function getUrl(string $type) : string
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
     * Import site data.
     * @param array $data Site data.
     * @param Configuration\Structure $structure Instance for getting files.
     * @return AddResult
     */
    protected static function importSite(array $data, \Bitrix\Rest\Configuration\Structure $structure) : \Bitrix\Main\ORM\Data\AddResult
    {
    }
    /**
     * Process one export step.
     * @param Event $event Event instance.
     * @return array|null
     */
    public static function nextStep(\Bitrix\Main\Event $event) : ?array
    {
    }
    /**
     * Sets replace array to the pending blocks.
     * @param array $pendingIds Pending block ids.
     * @param array $replace Array for future linking.
     * @return void
     */
    protected static function linkingPendingBlocks(array $pendingIds, array $replace) : void
    {
    }
    /**
     * Final step.
     * @param Event $event
     * @return array
     */
    public static function onFinish(\Bitrix\Main\Event $event) : array
    {
    }
}