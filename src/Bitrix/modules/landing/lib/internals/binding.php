<?php

namespace Bitrix\Landing\Internals;

class BindingTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Entity type 'SITE'.
     */
    const ENTITY_TYPE_SITE = 'S';
    /**
     * Entity type 'LANDING'.
     */
    const ENTITY_TYPE_LANDING = 'L';
    /**
     * Returns DB table name for entity.
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Clear records by entity.
     * @param int $entityId Entity id.
     * @param string $entityType Entity type.
     * @return void
     */
    protected static function entityClear($entityId, $entityType)
    {
    }
    /**
     * Clear all records for site.
     * @param int $siteId Site id.
     * @return void
     */
    public static function siteClear($siteId)
    {
    }
}