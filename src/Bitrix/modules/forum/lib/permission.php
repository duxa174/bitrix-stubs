<?php

namespace Bitrix\Forum;

/**
 * Class PermissionTable
 *
 * Fields:
 * <ul>
 * <li> ID int not null auto_increment,
 * <li> FORUM_ID int null,
 * <li> GROUP_ID int null,
 * <li> PERMISSION char(1)
 * </ul>
 *
 * @package Bitrix\Forum
 */
class PermissionTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity
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
}
// A < E < I < M < Q < U < Y
class Permission
{
    public const ACCESS_DENIED = "A";
    public const CAN_READ = "E";
    public const CAN_ADD_MESSAGE = "I";
    public const CAN_ADD_TOPIC = "M";
    public const CAN_MODERATE = "Q";
    public const CAN_EDIT = "U";
    public const FULL_ACCESS = "Y";
    /**
     * Gets types list
     * @return array
     */
    public static function getList()
    {
    }
    /**
     * Gets types list
     * @return array
     */
    public static function getTitledList()
    {
    }
}