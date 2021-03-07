<?php

namespace Bitrix\Im\Model;

/**
 * Class AliasTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ALIAS string(255) mandatory
 * <li> ENTITY_TYPE string(255) mandatory
 * <li> ENTITY_ID string(255) mandatory
 * </ul>
 *
 * @package Bitrix\Im
 **/
class AliasTable extends \Bitrix\Main\Entity\DataManager
{
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
     * Returns validators for ALIAS field.
     *
     * @return array
     */
    public static function validateAlias()
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
     * Returns validators for ENTITY_ID field.
     *
     * @return array
     */
    public static function validateEntityId()
    {
    }
}