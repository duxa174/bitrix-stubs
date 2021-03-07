<?php

namespace Bitrix\Im\Replica;

class StatusHandler extends \Bitrix\Replica\Client\BaseHandler
{
    public $insertIgnore = true;
    protected $tableName = "b_im_status";
    protected $moduleId = "im";
    protected $className = "\\Bitrix\\Im\\Model\\StatusTable";
    protected $primary = array("USER_ID" => "integer");
    protected $predicates = array("USER_ID" => "b_im_status.USER_ID");
    protected $translation = array("USER_ID" => "b_im_status.USER_ID");
    protected $fields = array("IDLE" => "datetime", "DESKTOP_LAST_DATE" => "datetime", "MOBILE_LAST_DATE" => "datetime", "EVENT_UNTIL_DATE" => "datetime");
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
     * OnUserSetLastActivityDate event handler.
     * Checks all users if they are marked for replication hence he is "remote".
     * Then sends im_status_update operation to the database where this user is "local".
     *
     * @param \Bitrix\Main\Event $event Event object.
     *
     * @return void
     * @see \Bitrix\Im\Replica\StatusHandler::handleStatusUpdateOperation
     */
    public function onUserSetLastActivityDate(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Updates user last activity date.
     *
     * @param array $event Event made by onUserSetLastActivityDate method.
     * @param string $nodeFrom Source database.
     * @param string $nodeTo Target database.
     *
     * @return void
     * @see \Bitrix\Im\Replica\StatusHandler::onUserSetLastActivityDate
     */
    public function handleStatusUpdateOperation($event, $nodeFrom, $nodeTo)
    {
    }
    /**
     * OnAfterRegisterUserByNetwork event handler.
     * Checks if user is marked for replication hence he is "remote".
     * Then sends im_status_bind operation to the database where this user is "local".
     *
     * @param \Bitrix\Main\Event $event Event object.
     *
     * @return void
     * @see \Bitrix\Im\Replica\StatusHandler::handleStatusBindOperation
     */
    public function onStartUserReplication(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Registers b_im_status record in the replication map
     * and sends the record back as an insert operation.
     *
     * @param array $event Event made by onStartUserReplication method.
     * @param string $nodeFrom Source database.
     * @param string $nodeTo Target database.
     *
     * @return void
     * @see \Bitrix\Im\Replica\StatusHandler::onStartUserReplication
     */
    public function handleStatusBindOperation($event, $nodeFrom, $nodeTo)
    {
    }
    /**
     * OnAfterRecentDelete event handler.
     * Sends "unsubscribe" message from b_im_message changes to peer database.
     *
     * @param \Bitrix\Main\Event $event Event object.
     *
     * @return void
     * @see \Bitrix\Im\Replica\StatusHandler::handleStatusUnbindOperation
     */
    public function OnAfterRecentDelete(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Deletes b_im_status record from the replication map
     *
     * @param array $event Event made by OnAfterRecentDelete method.
     * @param string $nodeFrom Source database.
     * @param string $nodeTo Target database.
     *
     * @return void
     * @see \Bitrix\Im\Replica\StatusHandler::OnAfterRecentDelete
     */
    public function handleStatusUnbindOperation($event, $nodeFrom, $nodeTo)
    {
    }
    /**
     * OnAfterRecentAdd event handler.
     * Sends "subscribe" message for b_im_message changes to peer database.
     *
     * @param \Bitrix\Main\Event $event Event object.
     *
     * @return void
     * @see \Bitrix\Im\Replica\StatusHandler::handleStatusRebindOperation
     */
    public function OnAfterRecentAdd(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Registers b_im_status record in the replication map
     * and sends the record back as an update operation.
     *
     * @param array $event Event made by OnAfterRecentAdd method.
     * @param string $nodeFrom Source database.
     * @param string $nodeTo Target database.
     *
     * @return void
     * @see \Bitrix\Im\Replica\StatusHandler::OnAfterRecentAdd
     */
    public function handleStatusRebindOperation($event, $nodeFrom, $nodeTo)
    {
    }
}