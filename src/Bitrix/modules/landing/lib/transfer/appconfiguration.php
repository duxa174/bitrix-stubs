<?php

namespace Bitrix\Landing\Transfer;

/**
 * Class AppConfiguration
 * @see rest/dev/configuration/readme.php
 */
class AppConfiguration
{
    /**
     * Block and component for replace unknown rest blocks.
     */
    const SYSTEM_BLOCK_REST_PENDING = 'system.rest.pending';
    const SYSTEM_COMPONENT_REST_PENDING = 'bitrix:landing.rest.pending';
    /**
     * Prefix code.
     */
    const PREFIX_CODE = 'landing_';
    /**
     * If transfer are processing.
     * @var bool
     */
    protected static $processing = false;
    /**
     * With which entities we can work.
     * @var array
     */
    private static $entityList = ['LANDING' => 500];
    /**
     * Additional magic manifest.
     * @var array
     */
    private static $accessManifest = ['total', 'landing_page', 'landing_store', 'landing_knowledge'];
    /**
     * Returns true if transfer are processing.
     * @return bool
     */
    public static function inProcess() : bool
    {
    }
    /**
     * Returns known entities.
     * @return array
     */
    public static function getEntityList() : array
    {
    }
    /**
     * Builds manifests for each placement.
     * @param Event $event Event instance.
     * @return array
     */
    public static function getManifestList(\Bitrix\Main\Event $event) : array
    {
    }
    /**
     * Preparing steps before export start.
     * @param Event $event Event instance.
     * @return array|null
     */
    public static function onInitManifest(\Bitrix\Main\Event $event) : ?array
    {
    }
    /**
     * Export step.
     * @param Event $event Event instance.
     * @return array|null
     */
    public static function onEventExportController(\Bitrix\Main\Event $event) : ?array
    {
    }
    /**
     * Import step.
     * @param Event $event Event instance.
     * @return array|null
     */
    public static function onEventImportController(\Bitrix\Main\Event $event) : ?array
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
    /**
     * Saves file to DB and returns id ID.
     * @param array $file File data from getUnpackFile.
     * @return int|null
     */
    public static function saveFile(array $file) : ?int
    {
    }
}