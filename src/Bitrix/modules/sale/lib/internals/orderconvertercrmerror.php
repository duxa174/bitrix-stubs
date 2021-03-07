<?php

namespace Bitrix\Sale\Internals;

/**
 * Class OrderConverterCrmErrorTable
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ORDER_ID int mandatory
 * <li> ERROR string(255) optional
 * </ul>
 *
 * @package Bitrix\Sale\Internals
 */
class OrderConverterCrmErrorTable extends \Bitrix\Main\Entity\DataManager
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
}