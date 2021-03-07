<?php

namespace Bitrix\Sale\Delivery\Requests;

/**
 * Class RequestTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> DATE datetime mandatory
 * <li> DELIVERY_ID int mandatory
 * <li> STATUS int optional
 * <li> EXTERNAL_ID string(100) optional
 * </ul>
 *
 * @package Bitrix\Sale\Delivery\Requests
 **/
class RequestTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for EXTERNAL_ID field.
     *
     * @return array
     */
    public static function validateExternalId()
    {
    }
}