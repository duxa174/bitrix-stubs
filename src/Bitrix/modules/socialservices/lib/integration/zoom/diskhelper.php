<?php

namespace Bitrix\SocialServices\Integration\Zoom;

class DiskHelper
{
    const ROOT_FOLDER_CODE = "ZOOM_RECORDS";
    public static function saveFile(array $arFile, int $userId, $siteId = SITE_ID) : \Bitrix\Main\Result
    {
    }
    public static function getRecordsFolder($folderName, $siteId = SITE_ID)
    {
    }
    public static function getRootFolder($siteId = SITE_ID)
    {
    }
    /**
     * @param string $siteId
     * @return \Bitrix\Disk\Storage || null
     */
    public static function getStorageModel($siteId = SITE_ID) : ?\Bitrix\Disk\Storage
    {
    }
    public static function getRootFolderName($siteId) : string
    {
    }
    public static function createRootFolderAccessCodes(\Bitrix\Disk\Storage $storageModel)
    {
    }
}