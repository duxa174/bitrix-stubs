<?php

namespace Bitrix\Landing\Copy\Implement;

/**
 * Class copies landings.
 *
 * if you want copy in another site then set $targetSiteId.
 * To put landing in folders, set the map ids of old and new folders.
 *
 * @package Bitrix\Landing\Copy\Implement
 */
class Landing extends \Bitrix\Main\Copy\CopyImplementer
{
    private $targetSiteId = 0;
    private $folderMapIds = [];
    public function __construct($folderMapIds = [])
    {
    }
    /**
     * Set $targetSiteId if you want copy in another site.
     * @param int $targetSiteId
     */
    public function setTargetSiteId(int $targetSiteId) : void
    {
    }
    /**
     * Adds landing.
     *
     * @param Container $container Container with data that is needed in the process of copying the entity.
     * @param array $fields The landing fields.
     * @return int|bool return landing id or false.
     */
    public function add(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Returns landing fields.
     *
     * @param Container $container Container with data that is needed in the process of copying the entity.
     * @param int $landingId Landing id.
     * @return array $fields
     */
    public function getFields(\Bitrix\Main\Copy\Container $container, $landingId)
    {
    }
    /**
     * Preparing data before creating a new landing.
     *
     * @param Container $container Container with data that is needed in the process of copying the entity.
     * @param array $fields List landing fields.
     * @return array $fields
     */
    public function prepareFieldsToCopy(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Starts copying children entities.
     *
     * @param Container $container
     * @param int $landingId Landing id.
     * @param int $copiedLandingId Copied landing id.
     * @return Result
     */
    public function copyChildren(\Bitrix\Main\Copy\Container $container, $landingId, $copiedLandingId)
    {
    }
    private function getSiteId(array $fields) : int
    {
    }
    private function getFolderId(int $siteId, array $fields)
    {
    }
    private function copyBlocks(int $landingId, int $copiedLandingId) : \Bitrix\Main\Result
    {
    }
}