<?php

namespace Bitrix\Forum;

/**
 * Class MessageTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> FORUM_ID int mandatory
 * <li> TOPIC_ID int
 * <li> TITLE string(255) mandatory
 * <li> TITLE_SEO string(255)
 * <li> TAGS string(255)
 * <li> DESCRIPTION string(255)
 * <li> ICON string(255)
 * <li> STATE bool optional default 'Y'
 * <li> APPROVED bool optional default 'Y'
 * <li> SORT int mandatory default '150'
 * <li> VIEWS mandatory default '0'
 * <li> USER_START_ID int
 * <li> USER_START_NAME string(255),
 * <li> START_DATE datetime mandatory
 * <li> POSTS int mandatory default '0'
 * <li> LAST_POSTER_ID int(10)
 * <li> LAST_POSTER_NAME string(255) mandatory
 * <li> LAST_POST_DATE datetime mandatory
 * <li> LAST_MESSAGE_ID int
 * <li> POSTS_UNAPPROVED int mandatory default '0'
 * <li> ABS_LAST_POSTER_ID int
 * <li> ABS_LAST_POSTER_NAME string(255)
 * <li> ABS_LAST_POST_DATE datetime
 * <li> ABS_LAST_MESSAGE_ID int
 * <li> XML_ID string(255)
 * <li> HTML text
 * <li> SOCNET_GROUP_ID int
 * <li> OWNER_ID int
 * </ul>
 *
 * @package Bitrix\Forum
 **/
class TopicTable extends \Bitrix\Main\Entity\DataManager
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
    public static function getFilteredFields()
    {
    }
    public static function onBeforeAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * @param \Bitrix\Main\ORM\Event $event
     * @return \Bitrix\Main\ORM\EventResult|void
     * @throws \Bitrix\Main\ObjectException
     */
    public static function onBeforeUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * @param \Bitrix\Main\ORM\Event $event
     * @return void
     */
    public static function onAfterUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * @param \Bitrix\Main\ORM\Event $event
     * @param \Bitrix\Main\ORM\EventResult $result
     * @return \Bitrix\Main\ORM\EventResult
     * @throws \Bitrix\Main\ObjectException
     */
    private static function modifyData(\Bitrix\Main\ORM\Event $event, \Bitrix\Main\ORM\EventResult $result)
    {
    }
}
class Topic extends \Bitrix\Forum\Internals\Entity
{
    use \Bitrix\Forum\Internals\EntityFabric;
    public const STATE_LINK = "L";
    public const STATE_CLOSED = "N";
    public const STATE_OPENED = "Y";
    public const APPROVED_APPROVED = "Y";
    public const APPROVED_DISAPPROVED = "N";
    public function __construct($id)
    {
    }
    protected function init()
    {
    }
    public function moveToForum(int $forumId)
    {
    }
    public function open()
    {
    }
    public function close()
    {
    }
    public function disapprove()
    {
    }
    public function approve()
    {
    }
    /**
     * @param Forum $parentObject
     * @param array $fields
     */
    public static function create($parentObject, array $fields)
    {
    }
    public static function add(array &$data)
    {
    }
    /**
     * @param array $fields
     */
    public function edit(array $fields)
    {
    }
    public static function update(int $id, array &$data)
    {
    }
    public function incrementStatistic(array $message)
    {
    }
}