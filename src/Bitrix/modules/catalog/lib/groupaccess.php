<?php

namespace Bitrix\Catalog;

/**
 * Class GroupAccessTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> CATALOG_GROUP_ID int mandatory
 * <li> GROUP_ID int mandatory
 * <li> ACCESS bool mandatory
 * <li> CATALOG_GROUP reference to {@link \Bitrix\Catalog\CatalogGroupTable}
 * </ul>
 *
 * @package Bitrix\Catalog
 **/
class GroupAccessTable extends \Bitrix\Main\ORM\Data\DataManager
{
    const ACCESS_BUY = 'Y';
    const ACCESS_VIEW = 'N';
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
}