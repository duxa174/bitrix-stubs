<?php

namespace Bitrix\Sender\Trigger;

class Settings
{
    protected $endpoint = array('MODULE_ID' => '', 'CODE' => '');
    protected $fields = array();
    protected $eventOccur = true;
    protected $preventEmail = false;
    protected $intervalValue = 0;
    protected $intervalType = 'M';
    protected $typeStart = true;
    protected $isClosedTrigger = false;
    protected $runForOldData = false;
    protected $wasRunForOldData = false;
    protected $closedTriggerTime = '';
    protected $closedTriggerInterval = 0;
    protected $eventModuleId = '';
    protected $eventType = '';
    /*
    		array(
    			'MODULE_ID' => '',
    			'CODE' => 'order_cancel',
    			'FIELDS' => array(
    				'BASKET_PRODUCT_ID' => 99
    			),
    			'IS_TYPE_START' => true,
    			'IS_PREVENT_EMAIL' => true,
    			'IS_EVENT_OCCUR' => true,
    			'SEND_INTERVAL_UNIT' => 'M',
    			'SEND_INTERVAL' => 0,
    			'IS_CLOSED_TRIGGER' => false,
    			'CLOSED_TRIGGER_INTERVAL' => 0,
    			'CLOSED_TRIGGER_TIME' => '',
    			'RUN_FOR_OLD_DATA' => '',
    			'WAS_RUN_FOR_OLD_DATA' => '',
    		)
    */
    public function __construct(array $settings = null)
    {
    }
    public static function getArrayFromTrigger(\Bitrix\Sender\Trigger\Base $trigger)
    {
    }
    public function getArray()
    {
    }
    /**
     * @return string
     */
    public function getTriggerId()
    {
    }
    /**
     * @param mixed $key
     * @return mixed
     */
    public function getEndpoint($key = null)
    {
    }
    /**
     * @param string $code
     * @param string $moduleId
     */
    public function setEndpoint($code, $moduleId)
    {
    }
    /**
     * @return array
     */
    public function getFields()
    {
    }
    /**
     * @param array $fields
     */
    public function setFields($fields)
    {
    }
    /**
     * @param bool $state
     * @return void
     */
    public function setTypeStart($state)
    {
    }
    /**
     * @return bool
     */
    public function isTypeStart()
    {
    }
    /**
     * @param bool $state
     * @return void
     */
    public function setEventOccur($state)
    {
    }
    /**
     * @return bool
     */
    public function isEventOccur()
    {
    }
    /**
     * @return bool
     */
    public function isPreventEmail()
    {
    }
    /**
     * @param boolean $state
     * @return void
     */
    public function setPreventEmail($state)
    {
    }
    /**
     * @return bool
     */
    public function isClosedTrigger()
    {
    }
    /**
     * @param boolean $state
     * @return void
     */
    public function setClosedTrigger($state)
    {
    }
    /**
     * @return bool
     */
    public function getClosedTriggerTime()
    {
    }
    /**
     * @param string $time
     */
    public function setClosedTriggerTime($time)
    {
    }
    /**
     * @return bool
     */
    public function getClosedTriggerInterval()
    {
    }
    /**
     * @param int $interval Interval.
     */
    public function setClosedTriggerInterval($interval)
    {
    }
    /**
     * @param bool $state
     * @return void
     */
    public function setRunForOldData($state)
    {
    }
    /**
     * @return bool
     */
    public function canRunForOldData()
    {
    }
    /**
     * @param bool $state
     * @return void
     */
    public function setWasRunForOldData($state)
    {
    }
    /**
     * @return bool
     */
    public function wasRunForOldData()
    {
    }
    /**
     * @param string $moduleId Module ID.
     * @return void
     */
    public function setEventModuleId($moduleId)
    {
    }
    /**
     * @return string
     */
    public function getEventModuleId()
    {
    }
    /**
     * @param string $eventType Event type.
     * @return void
     */
    public function setEventType($eventType)
    {
    }
    /**
     * @return string
     */
    public function getEventType()
    {
    }
    /**
     * @return string
     */
    public function getFullEventType()
    {
    }
    /**
     * @param int $value
     * @param string $type
     */
    public function setInterval($value = 0, $type = 'H')
    {
    }
    /**
     * @return int
     */
    public function getInterval()
    {
    }
    /**
     * @return mixed
     */
    public function getIntervalValue()
    {
    }
    /**
     * @return mixed
     */
    public function getIntervalType()
    {
    }
    /**
     * @param int $intervalValue
     */
    public function setIntervalValue($intervalValue)
    {
    }
    /**
     * @param string $intervalType
     */
    public function setIntervalType($intervalType)
    {
    }
}