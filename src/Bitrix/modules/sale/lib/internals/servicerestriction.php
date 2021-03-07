<?php

namespace Bitrix\Sale\Internals;

/**
 * Class Table
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> DELIVERY_ID int mandatory
 * <li> SORT int sorting
 * <li> CLASS_NAME string(255) mandatory
 * <li> PARAMS string optional
 * </ul>
 *
 * @package Bitrix\Sale\Delivery\Restrictions
 **/
class ServiceRestrictionTable extends \Bitrix\Main\Entity\DataManager
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
    public static function validateClassName()
    {
    }
}