<?php

namespace Bitrix\Forum;

/**
 * Class MessageTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> FORUM_ID int mandatory
 * <li> TOPIC_ID int mandatory
 * <li> USE_SMILES bool optional default 'Y'
 * <li> NEW_TOPIC bool optional default 'N'
 * <li> APPROVED bool optional default 'Y'
 * <li> SOURCE_ID string(255) mandatory default 'WEB'
 * <li> POST_DATE datetime mandatory
 * <li> POST_MESSAGE string optional
 * <li> POST_MESSAGE_HTML string optional
 * <li> POST_MESSAGE_FILTER string optional
 * <li> POST_MESSAGE_CHECK string(32) optional
 * <li> ATTACH_IMG int optional
 * <li> PARAM1 string(2) optional
 * <li> PARAM2 int optional
 * <li> AUTHOR_ID int optional
 * <li> AUTHOR_NAME string(255) optional
 * <li> AUTHOR_EMAIL string(255) optional
 * <li> AUTHOR_IP string(255) optional
 * <li> AUTHOR_REAL_IP string(128) optional
 * <li> GUEST_ID int optional
 * <li> EDITOR_ID int optional
 * <li> EDITOR_NAME string(255) optional
 * <li> EDITOR_EMAIL string(255) optional
 * <li> EDIT_REASON string optional
 * <li> EDIT_DATE datetime optional
 * <li> XML_ID string(255) optional
 * <li> HTML string optional
 * <li> MAIL_HEADER string optional
 * </ul>
 *
 * @package Bitrix\Forum
 **/
class MessageTable extends \Bitrix\Main\Entity\DataManager
{
    const SOURCE_ID_EMAIL = "EMAIL";
    const SOURCE_ID_WEB = "WEB";
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    public static function getUfId()
    {
    }
    private static $post_message_hash = [];
    private static $messageById = [];
    private static $customStorage = [];
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
    private static function modifyMessageFields(array &$data)
    {
    }
    public static function onBeforeAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * @param \Bitrix\Main\ORM\Event $event
     * @return \Bitrix\Main\ORM\EventResult
     */
    public static function onAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * @param \Bitrix\Main\ORM\Event $event
     * @return void
     */
    public static function onAfterAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function getDataById($id, $ttl = 84600)
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
     * @return \Bitrix\Main\ORM\EventResult|void
     */
    public static function onUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
    	-	 * @param \Bitrix\Main\ORM\Event $event
    	-	 * @return void
    	-	 */
    public static function onAfterUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * @param Result $result
     * @param mixed $primary
     * @param array $data
     * @throws ArgumentException
     * @throws \Bitrix\Main\SystemException
     */
    public static function checkFields(\Bitrix\Main\ORM\Data\Result $result, $primary, array $data)
    {
    }
}
class Message extends \Bitrix\Forum\Internals\Entity
{
    use \Bitrix\Forum\Internals\EntityFabric;
    public const APPROVED_APPROVED = "Y";
    public const APPROVED_DISAPPROVED = "N";
    protected function init()
    {
    }
    public function edit(array $fields)
    {
    }
    /**
     * @param Topic $parentObject
     * @param array $fields
     */
    public static function create($parentObject, array $fields)
    {
    }
    public static function update($id, array $fields)
    {
    }
    /**
     * @param Topic $topic
     * @param array $fields
     */
    public static function add(\Bitrix\Forum\Topic $topic, array $fields)
    {
    }
}