<?php

namespace Bitrix\Sale\TradingPlatform;

/**
 * Class MapTable
 * Maps external and internal things.
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ENTITY_ID int mandatory
 * <li> VALUE_EXTERNAL string(255) mandatory
 * <li> VALUE_INTERNAL string(255) mandatory
 * </ul>
 *
 * @package Bitrix\Sale\TradingPlatform
 **/
class MapTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public static function validateValueExternal()
    {
    }
    public static function validateValueInternal()
    {
    }
    /**
     * Deletes all records with mapEntityId.
     * @param string $mapEntityId Map entity id.
     */
    public static function deleteByMapEntityId($mapEntityId)
    {
    }
}