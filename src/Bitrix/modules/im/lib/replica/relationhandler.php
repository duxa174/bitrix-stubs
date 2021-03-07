<?php

namespace Bitrix\Im\Replica;

class RelationHandler extends \Bitrix\Replica\Client\BaseHandler
{
    protected $tableName = "b_im_relation";
    protected $moduleId = "im";
    protected $className = "\\Bitrix\\Im\\Model\\RelationTable";
    protected $primary = array("ID" => "auto_increment");
    protected $predicates = array("CHAT_ID" => "b_im_chat.ID", "USER_ID" => "b_user.ID");
    protected $translation = array("ID" => "b_im_relation.ID", "CHAT_ID" => "b_im_chat.ID", "USER_ID" => "b_user.ID", "START_ID" => "b_im_message.ID", "LAST_ID" => "b_im_message.ID", "LAST_SEND_ID" => "b_im_message.ID");
    protected $fields = array("LAST_READ" => "datetime");
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
     * Called before update operation log write. You may return false and not log write will take place.
     *
     * @param array $record Database record.
     *
     * @return boolean
     */
    public function beforeLogUpdate(array $record)
    {
    }
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