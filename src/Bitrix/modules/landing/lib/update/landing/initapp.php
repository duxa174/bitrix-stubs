<?php

namespace Bitrix\Landing\Update\Landing;

/**
 * Class InitApp
 * Set to all pages field 'INITIATOR_APP_CODE'.
 * @package Bitrix\Landing\Update\Landing
 */
class InitApp extends \Bitrix\Main\Update\Stepper
{
    protected static $moduleId = 'landing';
    /**
     * One step of converter.
     * @param array &$result Result array.
     * @return bool
     */
    public function execute(array &$result)
    {
    }
}