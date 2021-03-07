<?php

namespace Bitrix\Iblock;

/**
 * Class IblockGroupTable
 *
 * Fields:
 * <ul>
 * <li> IBLOCK_ID int mandatory
 * <li> GROUP_ID int mandatory
 * <li> PERMISSION string(1) mandatory
 * <li> GROUP reference to {@link \Bitrix\Main\GroupTable}
 * <li> IBLOCK reference to {@link \Bitrix\Iblock\IblockTable}
 * </ul>
 *
 * @package Bitrix\Iblock
 **/
class IblockGroupTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity
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
     * Returns validators for PERMISSION field.
     *
     * @return array
     */
    public static function validatePermission()
    {
    }
}