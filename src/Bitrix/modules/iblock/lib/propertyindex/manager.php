<?php

namespace Bitrix\Iblock\PropertyIndex;

class Manager
{
    private static $catalog = null;
    private static $deferredIndexing = -1;
    private static $elementQueue = array();
    private static $indexerInstances = array();
    /**
     * For offers iblock identifier returns it's products iblock.
     * Otherwise $iblockId returned.
     *
     * @param integer $iblockId Information block identifier.
     *
     * @return integer
     */
    public static function resolveIblock($iblockId)
    {
    }
    /**
     * If elementId is an offer, then it's product identifier returned
     * Otherwise $elementId returned.
     *
     * @param integer $iblockId Information block identifier.
     * @param integer $elementId Element identifier.
     *
     * @return integer
     */
    public static function resolveElement($iblockId, $elementId)
    {
    }
    /**
     * Drops all related to index database structures.
     *
     * @param integer $iblockId Information block identifier.
     *
     * @return void
     */
    public static function dropIfExists($iblockId)
    {
    }
    /**
     * Creates and initializes new indexer instance.
     *
     * @param integer $iblockId Information block identifier.
     *
     * @return Iblock\PropertyIndex\Indexer
     */
    public static function createIndexer($iblockId)
    {
    }
    /**
     * Marks iblock as one who needs index rebuild.
     *
     * @param integer $iblockId Information block identifier.
     *
     * @return void
     */
    public static function markAsInvalid($iblockId)
    {
    }
    /**
     * Marks iblock as one who needs index rebuild when it is needed.
     *
     * @param integer $iblockId Information block identifier.
     * @param array $propertyOld Previos property fields.
     * @param array $propertyNew New property fields.
     *
     * @return void
     */
    public static function onPropertyUpdate($iblockId, $propertyOld, $propertyNew)
    {
    }
    /**
     * Adds admin users notification about index rebuild.
     *
     * @param boolean $force Whenever skip iblock check.
     *
     * @return void
     */
    public static function checkAdminNotification($force = false)
    {
    }
    /**
     * Deletes index and mark iblock as having none.
     *
     * @param integer $iblockId Information block identifier.
     *
     * @return void
     */
    public static function deleteIndex($iblockId)
    {
    }
    /**
     * Deletes all related to element information if index exists.
     *
     * @param integer $iblockId Information block identifier.
     * @param integer $elementId Identifier of the element.
     *
     * @return void
     */
    public static function deleteElementIndex($iblockId, $elementId)
    {
    }
    /**
     * Updates all related to element information if index exists.
     *
     * @param integer $iblockId Information block identifier.
     * @param integer $elementId Identifier of the element.
     *
     * @return void
     */
    public static function updateElementIndex($iblockId, $elementId)
    {
    }
    /**
     * Enable deferred indexing.
     *
     * @return void
     */
    public static function enableDeferredIndexing()
    {
    }
    /**
     * Disable deferred indexing.
     *
     * @return void
     */
    public static function disableDeferredIndexing()
    {
    }
    /**
     * Return true if allowed deferred indexing.
     *
     * @return bool
     */
    public static function usedDeferredIndexing()
    {
    }
    /**
     * Update iblock index if defered data exists.
     *
     * @param int $iblockId		Iblock.
     * @return void
     */
    public static function runDeferredIndexing($iblockId)
    {
    }
    private static function pushToQueue($iblockId, $elementId)
    {
    }
    private static function elementIndexing(\Bitrix\Iblock\PropertyIndex\Indexer $indexer, $elementId)
    {
    }
}