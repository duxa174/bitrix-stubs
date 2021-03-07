<?php

namespace Bitrix\Sale\Internals;

/**
 * Class PersonTypeTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> LID string(2) mandatory
 * <li> NAME string(255) mandatory
 * <li> SORT int optional default 150
 * <li> ACTIVE bool optional default 'Y'
 * </ul>
 *
 * @package Bitrix\Sale
 **/
class PersonTypeTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns path to the file which contains definition of the class.
     *
     * @return string
     */
    public static function getFilePath()
    {
    }
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
     * Returns validators for LID field.
     *
     * @return array
     */
    public static function validateLid()
    {
    }
    /**
     * Returns validators for NAME field.
     *
     * @return array
     */
    public static function validateName()
    {
    }
}