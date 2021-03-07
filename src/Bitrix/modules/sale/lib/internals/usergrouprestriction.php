<?php

namespace Bitrix\Sale\Internals;

/**
 * Class UserGroupRestrictionTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ENTITY_ID int mandatory
 * <li> ENTITY_TYPE_ID int mandatory
 * <li> GROUP_ID int mandatory
 * </ul>
 *
 * @package Bitrix\Sale\Internals
 **/
class UserGroupRestrictionTable extends \Bitrix\Main\ORM\Data\DataManager
{
    const ENTITY_TYPE_SHIPMENT = 1;
    const ENTITY_TYPE_PAYMENT = 2;
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
    public static function deleteByEntity($entityType, $entityId)
    {
    }
}