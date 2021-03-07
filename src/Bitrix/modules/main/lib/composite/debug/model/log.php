<?php

namespace Bitrix\Main\Composite\Debug\Model;

/**
 * Class LogTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> URI string(2000) mandatory
 * <li> TITLE string(250) optional
 * <li> CREATED datetime mandatory
 * <li> TYPE string(50) mandatory
 * <li> MESSAGE string optional
 * <li> AJAX bool optional default "N"
 * <li> USER_ID int mandatory default 0
 * <li> PAGE_ID int mandatory default 0
 * </ul>
 *
 * @package Bitrix\Composite
 **/
class LogTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for URI field.
     *
     * @return array
     */
    public static function validateHost()
    {
    }
    /**
     * Returns validators for URI field.
     *
     * @return array
     */
    public static function validateUri()
    {
    }
    /**
     * Returns validators for TITLE field.
     *
     * @return array
     */
    public static function validateTitle()
    {
    }
    /**
     * Clears all logging data
     */
    public static function deleteAll()
    {
    }
}