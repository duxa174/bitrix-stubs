<?php

namespace Bitrix\Iblock;

/**
 * Class IblockMessageTable
 *
 * Fields:
 * <ul>
 * <li> IBLOCK_ID int mandatory
 * <li> MESSAGE_ID string(50) mandatory
 * <li> MESSAGE_TEXT string(255) optional
 * <li> IBLOCK reference to {@link \Bitrix\Iblock\IblockTable}
 * </ul>
 *
 * @package Bitrix\Iblock
 */
class IblockMessageTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for MESSAGE_ID field.
     *
     * @return array
     */
    public static function validateMessageId()
    {
    }
    /**
     * Returns validators for MESSAGE_TEXT field.
     *
     * @return array
     */
    public static function validateMessageText()
    {
    }
}