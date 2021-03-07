<?php

namespace Bitrix\Forum;

/**
 * Class ForumTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> FORUM_GROUP_ID int
 * <li> NAME string(255) mandatory
 * <li> DESCRIPTION text optional
 * <li> SORT int mandatory default '150'
 * <li> ACTIVE bool mandatory default 'Y'
 * <li> ALLOW_HTML bool mandatory default 'N'
 * <li> ALLOW_ANCHOR bool mandatory default 'Y'
 * <li> ALLOW_BIU bool mandatory default 'Y'
 * <li> ALLOW_IMG bool mandatory default 'Y'
 * <li> ALLOW_VIDEO bool mandatory default 'Y'
 * <li> ALLOW_LIST bool mandatory default 'Y'
 * <li> ALLOW_QUOTE bool mandatory default 'Y'
 * <li> ALLOW_CODE bool mandatory default 'Y'
 * <li> ALLOW_FONT bool mandatory default 'Y'
 * <li> ALLOW_SMILES bool mandatory default 'Y'
 * <li> ALLOW_UPLOAD bool mandatory default 'N'
 * <li> ALLOW_TABLE bool mandatory default 'N'
 * <li> ALLOW_ALIGN bool mandatory default 'Y'
 * <li> ALLOW_UPLOAD_EXT string(255) null
 * <li> ALLOW_MOVE_TOPIC bool mandatory default 'Y'
 * <li> ALLOW_TOPIC_TITLED bool mandatory default 'N'
 * <li> ALLOW_NL2BR bool mandatory default 'N'
 * <li> ALLOW_SIGNATURE bool mandatory default 'Y'
 * <li> ASK_GUEST_EMAIL bool mandatory default 'N'
 * <li> USE_CAPTCHA bool mandatory default 'N'
 * <li> INDEXATION bool mandatory default 'Y'
 * <li> DEDUPLICATION bool mandatory default 'Y'
 * <li> MODERATION bool mandatory default 'N'
 * <li> ORDER_BY enum('P', 'T', 'N', 'V', 'D', 'A', '') mandatory default 'P'
 * <li> ORDER_DIRECTION enum('DESC', 'ASC') mandatory default 'DESC'
 * <li> TOPICS int
 * <li> POSTS int
 * <li> LAST_POSTER_ID int
 * <li> LAST_POSTER_NAME string(255)
 * <li> LAST_POST_DATE datetime
 * <li> LAST_MESSAGE_ID int
 * <li> POSTS_UNAPPROVED int
 * <li> ABS_LAST_POSTER_ID int
 * <li> ABS_LAST_POSTER_NAME string(255)
 * <li> ABS_LAST_POST_DATE datetime
 * <li> ABS_LAST_MESSAGE_ID int
 * <li> EVENT1 string(255) default 'forum'
 * <li> EVENT2 string(255) default 'message'
 * <li> EVENT3 string(255)
 * <li> XML_ID varchar(255)
 * <li> HTML text
 * </ul>
 *
 * @package Bitrix\Forum
 */
class ForumTable extends \Bitrix\Main\Entity\DataManager
{
    private static $topicSort = array("P" => "LAST_POST_DATE", "T" => "TITLE", "N" => "POSTS", "V" => "VIEWS", "D" => "START_DATE", "A" => "USER_START_NAME");
    private static $cache = [];
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
    private static function getFilteredFields()
    {
    }
    /*
     * Returns main data
     * @return array|null
     */
    public static function getMainData(int $forumId)
    {
    }
    public static function onBeforeUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onAfterAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onAfterUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onAfterDelete(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function clearCache()
    {
    }
    private static function bindOldKernelEvents()
    {
    }
}
class Forum implements \ArrayAccess
{
    use \Bitrix\Forum\Internals\EntityFabric;
    use \Bitrix\Forum\Internals\EntityBaseMethods;
    /** @var int */
    protected $id = 0;
    /** @var array */
    protected $data = [];
    /** @var array */
    protected $strore = [];
    public function __construct($id)
    {
    }
    private function bindEvents()
    {
    }
    public function clearCache()
    {
    }
    public function getPermissions()
    {
    }
    private function getPermissionFromUserGroups(array $groups)
    {
    }
    public function getPermissionForUser(\Bitrix\Forum\User $user)
    {
    }
    public function getPermissionForUserGroups(array $groups)
    {
    }
    public function setPermission(array $groups)
    {
    }
    public function getSites()
    {
    }
    public function calcStat()
    {
    }
    public function incrementStatistic(array $message)
    {
    }
}