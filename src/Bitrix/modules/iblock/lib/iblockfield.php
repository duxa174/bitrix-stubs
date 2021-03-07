<?php

namespace Bitrix\Iblock;

/**
 * Class IblockFieldTable
 *
 * Fields:
 * <ul>
 * <li> IBLOCK_ID int mandatory
 * <li> FIELD_ID string(50) mandatory
 * <li> IS_REQUIRED bool optional default 'N'
 * <li> DEFAULT_VALUE string optional
 * <li> IBLOCK reference to {@link \Bitrix\Iblock\IblockTable}
 * </ul>
 *
 * @package Bitrix\Iblock
 */
class IblockFieldTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for FIELD_ID field.
     *
     * @return array
     */
    public static function validateFieldId()
    {
    }
}