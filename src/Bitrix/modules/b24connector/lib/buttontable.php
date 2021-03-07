<?php

namespace Bitrix\B24connector;

/**
 * Class ButtonsTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ADD_DATE datetime optional
 * <li> ADD_BY int mandatory
 * <li> NAME string(255) optional
 * <li> SCRIPT string optional
 * </ul>
 *
 * @package Bitrix\B24connector
 **/
class ButtonTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for NAME field.
     *
     * @return array
     */
    public static function validateName()
    {
    }
}