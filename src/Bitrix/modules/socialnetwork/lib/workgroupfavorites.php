<?php

namespace Bitrix\Socialnetwork;

/**
 * Class WorkgroupFavoritesTable
 *
 * Fields:
 * <ul>
 * <li> GROUP_ID int mandatory
 * <li> GROUP reference to {@link \Bitrix\Socialnetwork\WorkgroupTable}
 * <li> USER_ID int mandatory
 * <li> USER reference to {@link \Bitrix\Main\UserTable}
 * <li> DATE_ADD datetime
 * </ul>
 *
 * @package Bitrix\Socialnetwork
 */
class WorkgroupFavoritesTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Adds a workgroup GROUP_ID to a favorites list of a user USER_ID
     * @param array $params.
     * @return bool
     * @throws \Bitrix\Main\SystemException
     */
    public static function set($params = array())
    {
    }
    public static function add(array $data)
    {
    }
    public static function update($primary, array $data)
    {
    }
}