<?php

namespace Bitrix\Im\Model;

/**
 * Class MessageParamTable
 * 
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> MESSAGE_ID int mandatory
 * <li> PARAM_NAME string(100) mandatory
 * <li> PARAM_VALUE string(100) mandatory
 * </ul>
 *
 * @package Bitrix\Im
 **/
class MessageParamTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for PARAM_NAME field.
     *
     * @return array
     */
    public static function validateParamName()
    {
    }
    /**
     * Returns validators for PARAM_VALUE field.
     *
     * @return array
     */
    public static function validateParamValue()
    {
    }
}