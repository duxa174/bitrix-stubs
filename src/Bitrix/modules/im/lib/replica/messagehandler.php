<?php

namespace Bitrix\Im\Replica;

class MessageHandler extends \Bitrix\Replica\Client\BaseHandler
{
    protected $tableName = "b_im_message";
    protected $moduleId = "im";
    protected $className = "\\Bitrix\\Im\\Model\\MessageTable";
    protected $primary = array("ID" => "auto_increment");
    protected $predicates = array("AUTHOR_ID" => "b_user.ID", "CHAT_ID" => "b_im_chat.ID");
    protected $translation = array("ID" => "b_im_message.ID", "CHAT_ID" => "b_im_chat.ID", "AUTHOR_ID" => "b_user.ID");
    protected $fields = array("DATE_CREATE" => "datetime", "MESSAGE" => "text", "MESSAGE_OUT" => "text");
    const LOADER_PLACEHOLDER = '[B][/B]';
    /**
     * Called before log write. You may return false and not log write will take place.
     *
     * @param array $record Database record.
     * @return boolean
     */
    public function beforeLogInsert(array $record)
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
     * Replaces some BB codes on receiver to display them properly.
     *
     * @param string $message A message.
     *
     * @return string
     */
    protected function fixMessage($message)
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