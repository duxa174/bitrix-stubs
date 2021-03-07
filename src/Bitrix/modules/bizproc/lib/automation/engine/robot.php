<?php

namespace Bitrix\Bizproc\Automation\Engine;

class Robot
{
    /** @var array */
    protected $bizprocActivity;
    /** @var  DelayInterval */
    protected $delayInterval;
    protected $delayName;
    /** @var  ConditionGroup $condition */
    protected $condition;
    protected $executeAfterPrevious = false;
    public function __construct(array $bizprocActivity)
    {
    }
    /**
     * @param DelayInterval $delayInterval Robot delay interval.
     */
    public function setDelayInterval(\Bitrix\Bizproc\Automation\Engine\DelayInterval $delayInterval)
    {
    }
    /**
     * @return DelayInterval Robot delay interval.
     */
    public function getDelayInterval()
    {
    }
    /**
     * @param ConditionGroup $condition Robot condition.
     */
    public function setCondition(\Bitrix\Bizproc\Automation\Engine\ConditionGroup $condition)
    {
    }
    /**
     * @return ConditionGroup Robot condition.
     */
    public function getCondition()
    {
    }
    /**
     * @param string $delayName Robot delay name.
     */
    public function setDelayName($delayName)
    {
    }
    /**
     * @return string Robot delay name.
     */
    public function getDelayName()
    {
    }
    public function setExecuteAfterPrevious()
    {
    }
    public function isExecuteAfterPrevious()
    {
    }
    public function getProperties()
    {
    }
    public function setProperties(array $properties) : self
    {
    }
    public function getProperty(string $name)
    {
    }
    public function setProperty(string $name, $value)
    {
    }
    public function getTitle()
    {
    }
    public function getName()
    {
    }
    public function getType()
    {
    }
    public function toArray()
    {
    }
    public function getBizprocActivity()
    {
    }
    public static function generateName()
    {
    }
}