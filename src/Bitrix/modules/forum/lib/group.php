<?php

namespace Bitrix\Forum;

/**
 * Class GroupTable
 *
 * Fields:
 * <ul>
 * <li> ID int not null auto_increment,
 * <li> SORT int not null default '150',
 * <li> PARENT_ID int null,
 * <li> LEFT_MARGIN int null,
 * <li> RIGHT_MARGIN int null,
 * <li> DEPTH_LEVEL int null,
 * <li> XML_ID varchar(255)
 * </ul>
 *
 * @package Bitrix\Forum
 */
class GroupTable extends \Bitrix\Main\Entity\DataManager
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
/**
 * Class GroupLangTable
 * <ul>
 * <li> ID int not null auto_increment,
 * <li> FORUM_GROUP_ID int not null,
 * <li> LID char(2) not null,
 * <li> NAME varchar(255) not null,
 * <li> DESCRIPTION varchar(255) null,
 * <li> primary key (ID),
 * </ul>
 *
 * @package Bitrix\Forum
 */
class GroupLangTable extends \Bitrix\Main\Entity\DataManager
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