<?php

namespace Bitrix\Vote;

/**
 * Class ChannelTable
 * Fields:
 * <ul>
 * <li> ID int mandatory,
 * <li> SYMBOLIC_NAME string(255) mandatory ,
 * <li> TITLE string(255) mandatory ,
 * <li> C_SORT int,
 * <li> ACTIVE bool mandatory default 'Y',
 * <li> HIDDEN bool mandatory default 'N',
 * <li> TIMESTAMP_X datetime,
 * <li> VOTE_SINGLE bool mandatory default 'Y',
 * <li> USE_CAPTCHA bool mandatory default 'N'
 * </ul>
 */
class ChannelTable extends \Bitrix\Main\Entity\DataManager
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
 * Class ChannelGroupTable
 * Fields:
 * <ul>
 * <li> ID int mandatory,
 * <li> CHANNEL_ID int mandatory,
 * <li> GROUP_ID int mandatory,
 * <li> PERMISSION int mandatory (1-4),
 * </ul>
 */
class ChannelGroupTable extends \Bitrix\Main\Entity\DataManager
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
 * Class ChannelSiteTable
 * Fields:
 * <ul>
 * <li> CHANNEL_ID int mandatory,
 * <li> SITE_ID string(2) mandatory
 * </ul>
 */
class ChannelSiteTable extends \Bitrix\Main\Entity\DataManager
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
class Channel extends \Bitrix\Vote\Base\BaseObject implements \ArrayAccess
{
    static $channels = array();
    private $data = array();
    /**
     * Channel constructor.
     * @param $id
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public function __construct($id)
    {
    }
    /**
     * @throws \Bitrix\Main\ObjectNotFoundException
     */
    public function init()
    {
    }
    /**
     * @param array $parameters Array of query parameters.
     * @return \Bitrix\Main\DB\Result|\CDBResult
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getList(array $parameters)
    {
    }
    /**
     * @param integer $id Channel ID.
     * @return \Bitrix\Main\DB\Result|\CDBResult
     */
    public static function getById($id)
    {
    }
    /**
     * @param integer $userId User ID.
     * @return boolean
     */
    public function canRead($userId)
    {
    }
    /**
     * @param integer $userId User ID.
     * @return boolean
     */
    public function canEdit($userId)
    {
    }
    /**
     * @param integer $userId User ID.
     * @return boolean
     */
    public function canEditVote($userId)
    {
    }
    /**
     * @param string $key Characteristic that you want to know.
     * @return mixed|null
     */
    public function get($key)
    {
    }
    /**
     * Whether a offset exists.
     * @param string $offset An offset to check for.
     * @return mixed|null
     */
    public function offsetExists($offset)
    {
    }
    /**
     * @param string $offset The offset to retrieve.
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
    }
    /**
     * @param mixed $offset The offset to assign the value to.
     * @param mixed $value The value to set.
     * @return void
     * @throws \Bitrix\Main\NotSupportedException
     */
    public function offsetSet($offset, $value)
    {
    }
    /**
     * @param mixed $offset The offset to unset.
     * @return void
     */
    public function offsetUnset($offset)
    {
    }
}