<?php

namespace Bitrix\Forum\Replica;

class MessageHandler extends \Bitrix\Replica\Client\BaseHandler
{
    protected $tasksForumId = 0;
    protected $messageData = [];
    protected $tableName = "b_forum_message";
    protected $moduleId = "forum";
    protected $primary = array("ID" => "auto_increment");
    protected $predicates = array("TOPIC_ID" => "b_forum_topic.ID");
    protected $translation = array(
        "ID" => "b_forum_message.ID",
        "TOPIC_ID" => "b_forum_topic.ID",
        "AUTHOR_ID" => "b_user.ID",
        //TODO GUEST_ID
        "EDITOR_ID" => "b_user.ID",
    );
    protected $children = array();
    protected $fileHandler = null;
    /**
     * MessageHandler constructor.
     *
     */
    public function __construct()
    {
    }
    /**
     * Registers event handlers for database operations like add new, update or delete.
     *
     * @return void
     */
    public function initDataManagerEvents()
    {
    }
    /**
     * Forum event onBeforeMessageAdd handler.
     *
     * @param $data
     * @param $uploadDir
     *
     * @see \CForumMessage::Add()
     * @see \Bitrix\Forum\Message::add()
     */
    public function onBeforeMessageAdd($data, $uploadDir) : void
    {
    }
    /**
     * Forum event onAfterMessageAdd handler.
     *
     * @param integer &$id Forum message identifier.
     * @param array $message Message record.
     * @param array $topicInfo Forum topic fields.
     * @param array $forumInfo Forum fields.
     * @param array $fields Message record before add.
     *
     * @return void
     * @see \CForumMessage::Add()
     * @see \Bitrix\Forum\Message::add()
     */
    public function onAfterMessageAdd(&$id, $message, $topicInfo, $forumInfo, $fields)
    {
    }
    /**
     * Forum event onBeforeMessageUpdate handler.
     *
     * @param integer &$id Forum message identifier.
     * @param array &$fields Message record.
     * @param string &$uploadDir Forum topic fields.
     *
     * @return void
     * @see \CForumMessage::Update()
     */
    public function onBeforeMessageUpdate(&$id, &$fields, &$uploadDir)
    {
    }
    /**
     * Forum event onAfterMessageUpdate handler.
     *
     * @param integer &$id Forum message identifier.
     * @param array &$newMessage Message record.
     * @param array $oldMessage Message record before update.
     *
     * @return void
     * @see \CForumMessage::Update()
     */
    public function onAfterMessageUpdate(&$id, &$newMessage, $oldMessage)
    {
    }
    /**
     * Forum event onBeforeMessageDelete handler.
     *
     * @param integer $id Forum message identifier.
     *
     * @return void
     * @see \CForumMessage::Delete()
     */
    public function onBeforeMessageDelete($id)
    {
    }
    /**
     * Forum event onAfterMessageDelete handler.
     *
     * @param integer $id Forum message identifier.
     * @param array $message Message record before delete.
     *
     * @return void
     * @see \CForumMessage::Delete()
     */
    public function onAfterMessageDelete($id, $message)
    {
    }
    /**
     * Method will be invoked after writing an missed record.
     *
     * @param array $record All fields of the record.
     *
     * @return void
     */
    public function afterWriteMissing(array $record)
    {
    }
    /**
     * Method will be invoked before new database record inserted.
     * When an array returned the insert will be cancelled and map for
     * returned record will be added.
     *
     * @param array &$newRecord All fields of inserted record.
     *
     * @return null|array
     */
    public function beforeInsertTrigger(array &$newRecord)
    {
    }
    /**
     * Method will be invoked after new database record inserted.
     *
     * @param array $newRecord All fields of inserted record.
     *
     * @return void
     */
    public function afterInsertTrigger(array $newRecord)
    {
    }
    /**
     * Method will be invoked after an database record updated.
     *
     * @param array $oldRecord All fields before update.
     * @param array $newRecord All fields after update.
     *
     * @return void
     */
    public function afterUpdateTrigger(array $oldRecord, array $newRecord)
    {
    }
    /**
     * Method will be invoked after an database record deleted.
     *
     * @param array $oldRecord All fields before delete.
     *
     * @return void
     */
    public function afterDeleteTrigger(array $oldRecord)
    {
    }
    /**
     * Method will be invoked before an database record updated.
     *
     * @param array $oldRecord All fields before update.
     * @param array &$newRecord All fields after update.
     *
     * @return void
     */
    public function beforeUpdateTrigger(array $oldRecord, array &$newRecord)
    {
    }
    /**
     * Called before insert operation log write. You may return false and not log write will take place.
     *
     * @param array $record Database record.
     *
     * @return boolean
     */
    public function beforeLogInsert(array $record)
    {
    }
    /**
     * Called before record transformed for log writing.
     *
     * @param array &$record Database record.
     *
     * @return void
     */
    public function beforeLogFormat(array &$record)
    {
    }
    /**
     * @param string $string
     * @return string
     */
    private function clearUserBbCodes(string $string) : string
    {
    }
}