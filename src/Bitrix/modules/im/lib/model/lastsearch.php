<?php

namespace Bitrix\Im\Model;

/**
 * Class LastSearchTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> USER_ID int mandatory
 * <li> DIALOG_ID string(50) mandatory
 * </ul>
 *
 * @package Bitrix\Im
 **/
class LastSearchTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for DIALOG_ID field.
     *
     * @return array
     */
    public static function validateDialogId()
    {
    }
}