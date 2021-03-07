<?php

namespace Bitrix\Landing;

class File
{
    /**
     * Entity type site.
     */
    const ENTITY_TYPE_SITE = 'S';
    /**
     * Entity type landing.
     */
    const ENTITY_TYPE_LANDING = 'L';
    /**
     * Entity type block.
     */
    const ENTITY_TYPE_BLOCK = 'B';
    /**
     * Entity type asset.
     */
    const ENTITY_TYPE_ASSET = 'A';
    /**
     * Returns sanitized file name.
     * @param string $fileName File name.
     * @return string
     */
    public static function sanitizeFileName(string $fileName) : string
    {
    }
    /**
     * Add new record.
     * @param int $fileId File id.
     * @param int $entityId Entity id.
     * @param int $entityType Entity type.
     * @return void
     */
    protected static function add($fileId, $entityId, $entityType)
    {
    }
    /**
     * Get all files id from entity.
     * @param int $entityId Entity id.
     * @param int $entityType Entity type.
     * @return array
     */
    protected static function getFiles($entityId, $entityType)
    {
    }
    /**
     * Mark records for delete.
     * @param int|array $fileId File id.
     * @param int $entityId Entity id.
     * @param int $entityType Entity type.
     * @return void
     */
    protected static function delete($fileId, $entityId, $entityType)
    {
    }
    /**
     * Final delete all marked files.
     * @param int $limit Records limit for one iteration.
     * @return void
     */
    public static function deleteFinal($limit = null)
    {
    }
    /**
     * Add new record for Site.
     * @param int $id Site id.
     * @param int $fileId File id.
     * @return void
     */
    public static function addToSite($id, $fileId)
    {
    }
    /**
     * Gets files id from site.
     * @param int $siteId Site id.
     * @return array
     */
    public static function getFilesFromSite($siteId)
    {
    }
    /**
     * Delete record from Site.
     * @param int $id Site id.
     * @param int|array $fileId File id (by default delete all files from landing).
     * @return void
     */
    public static function deleteFromSite($id, $fileId = array())
    {
    }
    /**
     * Add new record for Landing.
     * @param int $lid Landing id.
     * @param int $fileId File id.
     * @return void
     */
    public static function addToLanding($lid, $fileId)
    {
    }
    /**
     * Gets files id from landing.
     * @param int $landingId Landing id.
     * @return array
     */
    public static function getFilesFromLanding($landingId)
    {
    }
    /**
     * Delete record from Landing.
     * @param int $lid Landing id.
     * @param int|array $fileId File id (by default delete all files from landing).
     * @return void
     */
    public static function deleteFromLanding($lid, $fileId = array())
    {
    }
    /**
     * Add new record(s) for Block.
     * @param int $blockId Block id.
     * @param int|array $fileId File id (or file ids).
     * @return void
     */
    public static function addToBlock($blockId, $fileId)
    {
    }
    /**
     * Add new record(s) for Block (old records will be deleted).
     * @param int $blockId Block id.
     * @param int|array $fileId File id (or file ids).
     * @return void
     */
    public static function replaceInBlock($blockId, $fileId)
    {
    }
    /**
     * Delete record from Block.
     * @param int $blockId Block id.
     * @param int|array $fileId File id (by default delete all files from block).
     * @return void
     */
    public static function deleteFromBlock($blockId, $fileId = array())
    {
    }
    /**
     * Parse some content for search data-fileid for the block.
     * @param int $blockId Block id for content.
     * @param string $content Content.
     * @return array
     */
    public static function getFilesFromBlockContent($blockId, $content)
    {
    }
    /**
     * Gets files id from block.
     * @param int $blockId Block id.
     * @return array
     */
    public static function getFilesFromBlock($blockId)
    {
    }
    /**
     * Add new record for Asset.
     * @param int $assetId Id of landing to which attached asset.
     * @param int $fileId File id.
     * @return void
     */
    public static function addToAsset($assetId, $fileId)
    {
    }
    /**
     * Gets asset files for current landing.
     * @param int $assetId Id of landing to which attached asset.
     * @return array
     */
    public static function getFilesFromAsset($assetId)
    {
    }
    /**
     * Delete asset files for current landing.
     * Not remove from disk immediately, just marked for agent
     * @param int $assetId Id of landing to which attached asset.
     * @param int|int[] $fileId File id (by default delete all files from Asset).
     * @return void
     */
    public static function deleteFromAsset($assetId, $fileId = [])
    {
    }
    /**
     * Mark file as "need rebuild", but not delete them. File will be exist until not created new file.
     * @param int|int[] $assetId Id of landing to which attached asset. If not set - will marked all.
     * @return void
     */
    public static function markAssetToRebuild($assetId = [])
    {
    }
    /**
     * When file rebuilded - delete old files (marked as "need rebuild") for current asset ID (current landing)
     * @param int|int[] $assetId Id of landing to which attached asset.
     * @return void
     */
    public static function markAssetRebuilded($assetId)
    {
    }
    /**
     * Copy files from one entity to another.
     * @param int $from Entity id.
     * @param int $to Entity id.
     * @param string $entityType Entity type.
     * @return void
     */
    protected static function copyEntityFiles($from, $to, $entityType)
    {
    }
    /**
     * Copy files from one site to another.
     * @param int $from Site id.
     * @param int $to Site id.
     * @return void
     */
    public static function copySiteFiles($from, $to)
    {
    }
    /**
     * Copy files from one landing to another.
     * @param int $from Landing id.
     * @param int $to Landing id.
     * @return void
     */
    public static function copyLandingFiles($from, $to)
    {
    }
    /**
     * Copy files from one block to another.
     * @param int $from Block id.
     * @param int $to Block id.
     * @return void
     */
    public static function copyBlockFiles($from, $to)
    {
    }
    /**
     * Gets core file array.
     * @param int $fileId File id.
     * @return mixed
     */
    public static function getFileArray($fileId)
    {
    }
    /**
     * Gets core file path.
     * @param int $fileId File id.
     * @return string
     */
    public static function getFilePath($fileId)
    {
    }
    /**
     * Delete all file Id from File table.
     * @param int $fileId File id to delete.
     * @return void
     */
    public static function releaseFile(int $fileId) : void
    {
    }
    /**
     * Physical delete file.
     * @param int $fileId File id.
     * @return void
     */
    public static function deletePhysical(int $fileId) : void
    {
    }
}