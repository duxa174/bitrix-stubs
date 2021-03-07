<?php

namespace Bitrix\Bizproc\Automation\Engine;

class DelayInterval
{
    const TYPE_BEFORE = 'before';
    const TYPE_AFTER = 'after';
    const TYPE_IN = 'in';
    protected $type = 'after';
    //TYPE_AFTER
    protected $value;
    protected $valueType;
    protected $basis;
    protected $workTime = false;
    protected $localTime = false;
    /**
     * DelayInterval constructor.
     * @param array|null $params Initial parameters.
     */
    public function __construct(array $params = null)
    {
    }
    /**
     * @param array $properties Activity properties.
     * @return DelayInterval
     */
    public static function createFromActivityProperties(array $properties)
    {
    }
    /**
     * @return mixed
     */
    public function getType()
    {
    }
    /**
     * @param mixed $type Interval type (before, after, in time).
     * @return DelayInterval
     */
    public function setType($type)
    {
    }
    /**
     * @return mixed
     */
    public function getValue()
    {
    }
    /**
     * @param int $value Delay interval value.
     * @return DelayInterval
     */
    public function setValue($value)
    {
    }
    /**
     * @return mixed
     */
    public function getValueType()
    {
    }
    /**
     * @param string $valueType Delay interval value type.
     * @return DelayInterval
     */
    public function setValueType($valueType)
    {
    }
    /**
     * @return mixed
     */
    public function getBasis()
    {
    }
    /**
     * @param mixed $basis Delay interval basis (date/time field etc.).
     * @return DelayInterval
     */
    public function setBasis($basis)
    {
    }
    /**
     * @return mixed
     */
    public function isWorkTime()
    {
    }
    /**
     * @param bool $flag True of false.
     * @return $this
     */
    public function setWorkTime($flag)
    {
    }
    /**
     * @return mixed
     */
    public function isLocalTime()
    {
    }
    /**
     * @param bool $flag True or false.
     * @return $this
     */
    public function setLocalTime($flag)
    {
    }
    /**
     * Converts instance to array.
     * @return array
     */
    public function toArray()
    {
    }
    /**
     * Converts instance to activity properties array.
     * @param array $documentType Document type.
     * @return array
     */
    public function toActivityProperties(array $documentType = null)
    {
    }
    /**
     * Checks if interval equals to Now.
     * @return bool
     */
    public function isNow()
    {
    }
}