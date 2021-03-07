<?php

namespace Bitrix\Im\Replica;

class MessageParamHandler extends \Bitrix\Replica\Client\BaseHandler
{
    protected $tableName = "b_im_message_param";
    protected $moduleId = "im";
    protected $className = "\\Bitrix\\Im\\Model\\MessageParamTable";
    protected $primary = array("ID" => "auto_increment");
    protected $predicates = array("MESSAGE_ID" => "b_im_message.ID");
    public function __construct()
    {
    }
    /**
     * Called before log write. You may return false and not log write will take place.
     *
     * @param array $record Database record.
     *
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
     * Returns relation depending on record values.
     *
     * @param array $record Database record.
     * @return string|false
     */
    public static function paramValueTranslation($record)
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
     * Method will be invoked after new database record inserted.
     *
     * @param array $newRecord All fields of inserted record.
     *
     * @return void
     */
    public function afterInsertTrigger(array $newRecord)
    {
    }
    public function afterDeleteTrigger(array $oldRecord)
    {
    }
}