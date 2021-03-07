<?php

namespace Bitrix\Bizproc\Automation\Trigger;

class BaseTrigger
{
    protected $target;
    /**
     * @return string the fully qualified name of this class.
     */
    public static function className()
    {
    }
    public static function isEnabled()
    {
    }
    /**
     * @param BaseTarget $target
     * @return $this
     */
    public function setTarget(\Bitrix\Bizproc\Automation\Target\BaseTarget $target)
    {
    }
    /**
     * @return BaseTarget
     * @throws Main\InvalidOperationException
     */
    public function getTarget()
    {
    }
    /**
     * @return string Gets the alphanumeric trigger code.
     */
    public static function getCode()
    {
    }
    /**
     * @return string Gets the trigger name.
     */
    public static function getName()
    {
    }
    protected function getPotentialTriggers()
    {
    }
    public function checkApplyRules(array $trigger)
    {
    }
    public static function toArray()
    {
    }
}