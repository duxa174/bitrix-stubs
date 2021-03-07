<?php

namespace Bitrix\Landing\Transfer\Import;

class Landing
{
    /**
     * Finds repository block and return it id.
     * @param string $appCode Application code.
     * @param string $xmlId External id application.
     * @return int|null
     */
    public static function getRepoId(string $appCode, string $xmlId) : ?int
    {
    }
    /**
     * Checks files in update data and replace files paths.
     * @param Block $block Block instance.
     * @param array $data Data for passing to updateNodes.
     * @param Configuration\Structure $structure Additional instance for unpacking files.
     * @param bool $ignoreManifest Ignore manifest for detecting files.
     * @return array
     */
    protected static function addFilesToBlock(\Bitrix\Landing\Block $block, array $data, \Bitrix\Rest\Configuration\Structure $structure, $ignoreManifest = false) : array
    {
    }
    /**
     * Save new data to the block.
     * @param Block $blockInstance Block instance.
     * @param array $block Block data.
     */
    public static function saveDataToBlock(\Bitrix\Landing\Block $blockInstance, array $block) : void
    {
    }
    /**
     * Imports block in to the landing and returns it new id.
     * @param LandingCore $landing Landing instance.
     * @param array $block Block data.
     * @param Configuration\Structure $structure Additional instance for unpacking files.
     * @param bool &$pending This block in pending mode.
     * @return int
     */
    protected static function importBlock(\Bitrix\Landing\Landing $landing, array $block, \Bitrix\Rest\Configuration\Structure $structure, &$pending = false) : int
    {
    }
    /**
     * Imports landing.
     * @param Event $event Event instance.
     * @return array|null
     */
    public static function importLanding(\Bitrix\Main\Event $event) : ?array
    {
    }
}