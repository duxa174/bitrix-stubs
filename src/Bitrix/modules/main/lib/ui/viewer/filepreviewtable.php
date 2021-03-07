<?php

namespace Bitrix\Main\UI\Viewer;

final class FilePreviewTable extends \Bitrix\Main\ORM\Data\DataManager
{
    /** @var array */
    protected static $alreadyDeleted = [];
    /**
     * Returns DB table name for entity
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     * To get initialized fields @see \Bitrix\Main\Entity\Base::getFields() and \Bitrix\Main\Entity\Base::getField()
     * @return array
     * @throws \Bitrix\Main\SystemException
     */
    public static function getMap()
    {
    }
    public static function deleteOld($dayToDeath = 22, $portion = 20)
    {
    }
    public static function deleteOldAgent($dayToDeath = 22, $portion = 20)
    {
    }
    public static function onBeforeDelete(\Bitrix\Main\ORM\Event $event)
    {
    }
    protected static function deleteContent(array $file, $keepImage = false)
    {
    }
    /**
     * Event handler which listen to delete entries of b_file to clean preview.
     * @param array $bfile
     *
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function onFileDelete($bfile)
    {
    }
}