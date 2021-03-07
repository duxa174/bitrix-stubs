<?php

namespace Bitrix\Main\UrlPreview;

class UrlMetadataTable extends \Bitrix\Main\Entity\DataManager
{
    const TYPE_STATIC = 'S';
    const TYPE_DYNAMIC = 'D';
    const TYPE_TEMPORARY = 'T';
    const TYPE_FILE = 'F';
    /**
     * Returns DB table name for entity
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Returns first record filtered by $url value
     *
     * @param string $url Url of the page with metadata.
     * @return array|false
     * @throws Main\ArgumentException
     */
    public static function getByUrl($url)
    {
    }
}