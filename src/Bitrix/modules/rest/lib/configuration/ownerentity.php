<?php

namespace Bitrix\Rest\Configuration;

/**
 * Class OwnerEntityTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> OWNER_TYPE string(1) mandatory
 * <li> OWNER string(11) mandatory
 * <li> ENTITY_TYPE string(32) mandatory
 * <li> ENTITY string(32) mandatory
 * </ul>
 *
 * @package Bitrix\Rest\Configuration
 **/
class OwnerEntityTable extends \Bitrix\Main\ORM\Data\DataManager
{
    const ENTITY_TYPE_APPLICATION = 'A';
    const ENTITY_TYPE_EXTERNAL = 'E';
    const ENTITY_EMPTY = 0;
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
    /**
     * Returns validators for OWNER_TYPE field.
     *
     * @return array
     */
    public static function validateOwnerType()
    {
    }
    /**
     * Returns validators for OWNER field.
     *
     * @return array
     */
    public static function validateOwner()
    {
    }
    /**
     * Returns validators for ENTITY_TYPE field.
     *
     * @return array
     */
    public static function validateEntityType()
    {
    }
    /**
     * Returns validators for ENTITY field.
     *
     * @return array
     */
    public static function validateEntity()
    {
    }
    /**
     * @param $owner string(11)
     * @param $ownerType string(1)
     * @param $itemList array
     */
    public static function saveMulti($owner, $ownerType, $itemList)
    {
    }
    /**
     * @param $itemList array
     */
    public static function deleteMulti($itemList)
    {
    }
    public static function checkApp($entityType, $entityId)
    {
    }
}