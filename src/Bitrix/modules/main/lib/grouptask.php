<?php

namespace Bitrix\Main;

/**
 * Class GroupTaskTable
 * 
 * Fields:
 * <ul>
 * <li> GROUP_ID int mandatory
 * <li> TASK_ID int mandatory
 * <li> EXTERNAL_ID string(50) optional
 * <li> GROUP reference to {@link \Bitrix\Main\GroupTable}
 * <li> TASK reference to {@link \Bitrix\Main\TaskTable}
 * </ul>
 *
 * @package Bitrix\Main
 **/
class GroupTaskTable extends \Bitrix\Main\Entity\DataManager
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