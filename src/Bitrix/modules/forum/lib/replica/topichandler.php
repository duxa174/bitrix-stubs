<?php

namespace Bitrix\Forum\Replica;

class TopicHandler extends \Bitrix\Replica\Client\BaseHandler
{
    protected $tasksForumId = 0;
    protected $tableName = "b_forum_topic";
    protected $moduleId = "forum";
    protected $primary = array("ID" => "auto_increment");
    protected $predicates = array();
    protected $translation = array(
        "ID" => "b_forum_topic.ID",
        "USER_START_ID" => "b_user.ID",
        "LAST_POSTER_ID" => "b_user.ID",
        //"LAST_MESSAGE_ID" => "b_forum_message.ID", //TODO
        "ABS_LAST_POSTER_ID" => "b_user.ID",
        //"ABS_LAST_MESSAGE_ID" => "b_forum_message.ID", //TODO
        "RESPONSIBLE_ID" => "b_user.ID",
        "OWNER_ID" => "b_user.ID",
    );
    protected $children = array("ID" => "b_forum_message.TOPIC_ID");
    /**
     * TopicHandler constructor.
     *
     */
    public function __construct()
    {
    }
    /**
     * Forum event onAfterTopicAdd handler.
     *
     * @param integer $id Forum topic identifier.
     * @param array &$data Topic record.
     *
     * @return void
     * @see \CForumTopic::Add()
     */
    public function onAfterTopicAdd($id, &$data)
    {
    }
    /**
     * Forum event onAfterTopicUpdate handler.
     *
     * @param integer $id Forum topic identifier.
     * @param array $newTopic Topic record after update.
     * @param array $oldTopic Topic record before update.
     *
     * @return void
     * @see \CForumTopic::Update()
     */
    public function onAfterTopicUpdate($id, $newTopic, $oldTopic)
    {
    }
    /**
     * Forum event onAfterTopicDelete handler.
     *
     * @param integer &$id Forum topic identifier.
     * @param array $topic Topic record before delete.
     *
     * @return void
     * @see \CForumTopic::Delete()
     */
    public function onAfterTopicDelete(&$id, $topic)
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
}