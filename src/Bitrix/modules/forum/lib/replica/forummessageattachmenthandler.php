<?php

namespace Bitrix\Forum\Replica;

class ForumMessageAttachmentHandler extends \Bitrix\Replica\Client\AttachmentHandler
{
    protected $moduleId = "forum";
    protected $relation = "b_forum_message.ATTACH_ID";
    protected $executeEventEntity = "ForumMessage";
    protected $parentRelation = "b_forum_message.ID";
    protected $diskConnectorString = "forum_message";
    protected $dataFields = array("POST_MESSAGE", "POST_MESSAGE_HTML");
    /**
     * Adds attachment to user field value for given entity.
     *
     * @param integer $messageId Message identifier.
     * @param integer $diskAttachId Disk attachment identifier.
     *
     * @return void
     */
    public static function updateUserField($messageId, $diskAttachId)
    {
    }
    /**
     * Returns array of attachments for given entity.
     *
     * @param integer $messageId Message identifier.
     *
     * @return array[]\Bitrix\Disk\AttachedObject
     */
    public static function getUserField($messageId)
    {
    }
    /**
     * Remote event handler.
     *
     * @param \Bitrix\Main\Event $event Contains two parameters: 0 - id, 1 - data.
     *
     * @return void
     * @see \Bitrix\Replica\Client\AttachmentHandler::onAfterAdd
     * @see \Bitrix\Replica\Client\AttachmentHandler::onAfterUpdate
     */
    public function onExecuteDescriptionFix(\Bitrix\Main\Event $event)
    {
    }
}