<?php

namespace Bitrix\Im\Replica;

class ChatHandler extends \Bitrix\Replica\Client\BaseHandler
{
    protected $tableName = "b_im_chat";
    protected $moduleId = "im";
    protected $className = "\\Bitrix\\Im\\Model\\ChatTable";
    protected $primary = array("ID" => "auto_increment");
    protected $predicates = array("AUTHOR_ID" => "b_user.ID");
    protected $translation = array("ID" => "b_im_chat.ID", "AUTHOR_ID" => "b_user.ID", "AVATAR" => "b_file.ID", "LAST_MESSAGE_ID" => "b_im_message.ID");
    protected $children = array("ID" => "b_im_relation.CHAT_ID");
    protected $fields = array("TITLE" => "text", "DESCRIPTION" => "text", "DATE_CREATE" => "datetime");
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
}