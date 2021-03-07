<?php

namespace Bitrix\Iblock;

/**
 * Class IblockRssTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> IBLOCK_ID int mandatory
 * <li> NODE string(50) mandatory
 * <li> NODE_VALUE string(250) optional
 * <li> IBLOCK reference to {@link \Bitrix\Iblock\IblockTable}
 * </ul>
 *
 * @package Bitrix\Iblock
 **/
class IblockRssTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for NODE field.
     *
     * @return array
     */
    public static function validateNode()
    {
    }
    /**
     * Returns validators for NODE_VALUE field.
     *
     * @return array
     */
    public static function validateNodeValue()
    {
    }
}