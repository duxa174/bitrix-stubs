<?php

namespace Bitrix\Main\Service\GeoIp;

/**
 * Class HandlerTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> SORT int optional default 100
 * <li> ACTIVE bool optional default 'Y'
 * <li> CLASS_NAME string(255) mandatory
 * <li> CONFIG string optional
 * </ul>
 *
 * @package Bitrix\Main\Service\GeoIp
 **/
class HandlerTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for CLASS_NAME field.
     *
     * @return array
     */
    public static function validateClassName()
    {
    }
}