<?php

namespace Bitrix\Landing\Update\Domain;

class Check extends \Bitrix\Main\Update\Stepper
{
    /**
     * Target module for stepper.
     * @var string
     */
    protected static $moduleId = 'landing';
    /**
     * Items count for one step.
     */
    const STEPPER_COUNT = 1;
    /**
     * One step of converter.
     * @param array &$result Result array.
     * @return bool
     */
    public function execute(array &$result)
    {
    }
}