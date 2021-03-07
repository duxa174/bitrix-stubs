<?php

namespace Bitrix\Socialnetwork;

/**
 * Class UserContentViewTable
 *
 * Fields:
 * <ul>
 * <li> USER_ID int mandatory
 * <li> USER reference to {@link \Bitrix\Main\UserTable}
 * <li> RATING_TYPE_ID varchar mandatory
 * <li> RATING_ENTITY_ID int mandatory
 * <li> DATE_VIEW datetime
 * </ul>
 *
 * @package Bitrix\Socialnetwork
 */
class UserContentViewTable extends \Bitrix\Main\Entity\DataManager
{
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
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