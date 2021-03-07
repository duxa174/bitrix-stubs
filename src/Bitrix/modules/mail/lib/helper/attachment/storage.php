<?php

namespace Bitrix\Mail\Helper\Attachment;

class Storage
{
    /**
     * Returns attachments disk storage
     *
     * @return \Bitrix\Disk\Storage|false
     */
    public static function getStorage()
    {
    }
    /**
     * Returns disk url manager
     *
     * @return \Bitrix\Disk\UrlManager|false
     */
    public static function getUrlManager()
    {
    }
    /**
     * Returns disk objects by file ID
     *
     * @param int $fileId File ID.
     * @param int $limit Limit.
     * @return array
     */
    public static function getObjectsByFileId($fileId, $limit = 0)
    {
    }
    /**
     * Returns disk object by attachment file data (creates one if not exists)
     *
     * @param array $attachment Attachment file data.
     * @param boolean $create Create object if not exists.
     * @return \Bitrix\Disk\File|false|null
     */
    public static function getObjectByAttachment(array $attachment, $create = false)
    {
    }
    /**
     * Creates disk object for attachment file
     *
     * @param array $attachment Attachment file data.
     * @return \Bitrix\Disk\File|false|null
     */
    public static function registerAttachment(array $attachment)
    {
    }
    /**
     * Deletes disk objects by file ID
     *
     * @param int $fileId File ID.
     * @return void
     */
    public static function unregisterAttachment($fileId)
    {
    }
}