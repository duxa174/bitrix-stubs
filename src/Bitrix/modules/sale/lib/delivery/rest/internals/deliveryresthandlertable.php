<?php

namespace Bitrix\Sale\Delivery\Rest\Internals;

/**
 * Class DeliveryRestHandlerTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> NAME string(255) mandatory
 * <li> CODE string(50) mandatory
 * <li> SORT int optional default 100
 * <li> DESCRIPTION text optional
 * <li> SETTINGS text mandatory
 * <li> PROFILES text mandatory
 * </ul>
 *
 * @package Bitrix\Sale
 **/
class DeliveryRestHandlerTable extends \Bitrix\Main\ORM\Data\DataManager
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
     * @throws \Bitrix\Main\SystemException
     */
    public static function getMap()
    {
    }
    /**
     * Returns validators for NAME field.
     *
     * @return array
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public static function validateName()
    {
    }
    /**
     * Returns validators for CODE field.
     *
     * @return array
     * @throws \Bitrix\Main\ArgumentTypeException
     */
    public static function validateCode()
    {
    }
}