<?php

namespace Bitrix\Forum;

/**
 * Class UserTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> USER_ID int
 * <li> DESCRIPTION string(255) null,
 * <li> AVATAR int(10),
 * <li> POINTS int not null default 0,
 * <li> RANK_ID int null,
 * <li> NUM_POSTS int(10) default '0',
 * <li> INTERESTS text,
 * <li> LAST_POST int(10),
 * <li> SIGNATURE varchar(255) null,
 * <li> IP_ADDRESS string(128) null
 * <li> REAL_IP_ADDRESS varchar(128) null,
 * <li> DATE_REG date not null,
 * <li> LAST_VISIT datetime not null,
 * <li> ALLOW_POST char(1) not null default 'Y',
 * <li> SHOW_NAME char(1) not null default 'Y',
 * <li> HIDE_FROM_ONLINE char(1) not null default 'N',
 * <li> SUBSC_GROUP_MESSAGE char(1) NOT NULL default 'N',
 * <li> SUBSC_GET_MY_MESSAGE char(1) NOT NULL default 'Y',
 * </ul>
 *
 * @package Bitrix\Forum
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
    public static function onBeforeAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onBeforeUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    private static function modifyData(\Bitrix\Main\ORM\Event $event, \Bitrix\Main\ORM\EventResult $result)
    {
    }
    public static function onBeforeDelete(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onAfterDelete(\Bitrix\Main\ORM\Event $event)
    {
    }
}
class User
{
    use \Bitrix\Forum\Internals\EntityFabric;
    use \Bitrix\Forum\Internals\EntityBaseMethods;
    /** @var int */
    protected $id = 0;
    /** @var array */
    protected $data = [];
    /** @var int */
    protected $forumUserId = null;
    /** @var bool */
    protected $locked = false;
    /** @var array */
    protected $groups;
    /** @var array  */
    protected $permissions = [];
    /** @var bool */
    private $editOwn = false;
    protected function __construct($id)
    {
    }
    /**
     * @return string
     */
    public function getName()
    {
    }
    public function setLastVisit()
    {
    }
    public function isLocked()
    {
    }
    public function isAdmin()
    {
    }
    public function isGuest()
    {
    }
    public function edit(array $fields)
    {
    }
    public function calcStatistic()
    {
    }
    public function incrementStatistic(array $message)
    {
    }
    public function decrementStatistic($message = null)
    {
    }
    private function save(array $fields)
    {
    }
    public function getGroups()
    {
    }
    public function setPermissionOnForum($forum, $permission)
    {
    }
    public function getPermissionOnForum($forum)
    {
    }
    public function canModerate(\Bitrix\Forum\Forum $forum)
    {
    }
    public function canAddTopic(\Bitrix\Forum\Forum $forum)
    {
    }
    public function canAddMessage(\Bitrix\Forum\Topic $topic)
    {
    }
    public function canEditTopic(\Bitrix\Forum\Topic $topic)
    {
    }
    public function canEditMessage(\Bitrix\Forum\Message $message)
    {
    }
    public function canDeleteMessage(\Bitrix\Forum\Message $message)
    {
    }
    public function canEditForum(\Bitrix\Forum\Forum $forum)
    {
    }
    public function canDeleteForum(\Bitrix\Forum\Forum $forum)
    {
    }
    public static function isUserAdmin(array $groups)
    {
    }
    public static function add(array &$data)
    {
    }
    public static function update(int $id, array &$data)
    {
    }
}