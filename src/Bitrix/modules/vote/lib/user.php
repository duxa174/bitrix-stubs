<?php

namespace Bitrix\Vote;

/**
 * Class VoteEventTable
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> COOKIE_ID int,
 * <li> AUTH_USER_ID int,
 * <li> COUNTER int,
 * <li> DATE_FIRST datetime,
 * <li> DATE_LAST datetime,
 * <li> LAST_IP string(15),
 * <li> STAT_GUEST_ID int,
 * </ul>
 *
 */
class UserTable extends \Bitrix\Main\Entity\DataManager
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
    /**
     * @param array $id User IDs.
     * @param mixed $increment True - increment, false - decrement, integer - exact value.
     * @return void
     */
    public static function setCounter(array $id, $increment = true)
    {
    }
}
class User extends \Bitrix\Vote\Base\BaseObject
{
    const SYSTEM_USER_ID = 0;
    static $usersIds = [];
    static $instance = null;
    /**
     * @return void
     * @throws ArgumentException
     */
    public function init()
    {
    }
    /**
     * @return int
     */
    public function getCookieId()
    {
    }
    /**
     * @return int
     */
    public function getVotedUserId()
    {
    }
    /**
     * @return void
     */
    public function setCookieId($id)
    {
    }
    /**
     * @param null $incrementCount If true - increment, in false - decrement, null - no changes.
     * @return int
     */
    public function setVotedUserId($incrementCount = null)
    {
    }
    /**
     * @param integer $voteId Vote ID.
     * @return bool|int
     */
    public function isVotedFor($voteId)
    {
    }
    /**
     * @param integer $voteId Vote ID.
     * @param integer $userId User ID.
     * @return bool|int
     */
    public static function isUserVotedFor($voteId, $userId)
    {
    }
    /**
     * @return User
     */
    public static function getCurrent()
    {
    }
    public static function onUserLogin()
    {
    }
}