<?php

namespace Bitrix\Calendar\Internals;

/**
 * Class TypeTable
 *
 * Fields:
 * <ul>
 * <li> XML_ID string(255) mandatory
 * <li> NAME string(255) optional
 * <li> DESCRIPTION string optional
 * <li> EXTERNAL_ID string(100) optional
 * <li> ACTIVE bool optional default 'Y'
 * </ul>
 *
 * @package Bitrix\Calendar
 **/
class TypeTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for XML_ID field.
     *
     * @return array
     */
    public static function validateXmlId()
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
    /**
     * Returns validators for EXTERNAL_ID field.
     *
     * @return array
     */
    public static function validateExternalId()
    {
    }
}