<?php

namespace Bitrix\Main\EventLog;

/**
 * @method int getId()
 * @method boolean getActive()
 * @method string getName()
 * @method string getAuditTypeId()
 * @method string getItemId()
 * @method int getUserId()
 * @method string getRemoteAddr()
 * @method string getUserAgent()
 * @method string getRequestUri()
 * @method int getCheckInterval()
 * @method int getAlertCount()
 * @method Main\Type\DateTime getDateChecked()
 * @method $this setActive($arg)
 * @method $this setName($arg)
 * @method $this setAuditTypeId($arg)
 * @method $this setItemId($arg)
 * @method $this setUserId($arg)
 * @method $this setRemoteAddr($arg)
 * @method $this setUserAgent($arg)
 * @method $this setRequestUri($arg)
 * @method $this setCheckInterval($arg)
 * @method $this setAlertCount($arg)
 * @method $this setDateChecked($arg)
 */
class Notification
{
    protected $data;
    protected $eventCount = 0;
    /**
     * Creates (wake-ups) a notification object.
     * @param int $id
     */
    public function __construct($id = 0)
    {
    }
    /**
     * Fills data from DB.
     */
    public function fill()
    {
    }
    /**
     * Fills the actions collection from DB.
     */
    public function fillActions()
    {
    }
    /**
     * Saves data to DB.
     * @return Main\ORM\Data\Result
     */
    public function save()
    {
    }
    /**
     * Deletes data from DB.
     * @return Main\ORM\Data\Result
     */
    public function delete()
    {
    }
    /**
     * Sets values from an array.
     * @param array $values
     */
    public function setFromArray(array $values)
    {
    }
    /**
     * Sets actions from an array.
     * @param array $values
     */
    public function setActionsFromArray(array $values)
    {
    }
    /**
     * Returns an array of actions.
     * @return Action[]
     */
    public function getActions()
    {
    }
    /**
     * It's magic...
     * @param string $name
     * @param array $arguments
     * @return mixed
     * @throws Main\SystemException
     */
    public function __call($name, $arguments)
    {
    }
    /**
     * @param int $n
     * @return $this
     */
    public function setEventCount($n)
    {
    }
    /**
     * @return int
     */
    public function getEventCount()
    {
    }
    /**
     * Agent function.
     * @param int $id Notification ID
     * @return string
     */
    public static function checkConditions($id)
    {
    }
    /**
     * Sends the notification via its actions.
     */
    public function send()
    {
    }
    /**
     * @param int $id
     * @return string
     */
    protected static function getAgentName($id)
    {
    }
}