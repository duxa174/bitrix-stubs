<?php

namespace Bitrix\Rest;

/**
 * Class StatMethodTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> NAME string(255) mandatory
 * <li> METHOD_TYPE enum optional default 'M'
 * </ul>
 *
 * @package Bitrix\Rest
 **/
class StatMethodTable extends \Bitrix\Main\Entity\DataManager
{
    const METHOD_TYPE_METHOD = 'M';
    const METHOD_TYPE_EVENT = 'E';
    const METHOD_TYPE_PLACEMENT = 'P';
    const METHOD_TYPE_ROBOT = 'R';
    const METHOD_TYPE_ACTIVITY = 'A';
    protected static $methodCache = null;
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
    public static function getId($methodName)
    {
    }
    public static function checkList($methodList, $methodType = self::METHOD_TYPE_METHOD)
    {
    }
    protected static function addMethod($methodName, $methodType)
    {
    }
    protected static function loadFromCache($force = false)
    {
    }
}