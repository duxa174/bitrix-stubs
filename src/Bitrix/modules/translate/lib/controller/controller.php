<?php

namespace Bitrix\Translate\Controller;

/**
 * @const SETTING_ID
 */
abstract class Controller extends \Bitrix\Main\Engine\Controller
{
    /**
     * Common operations before process action.
     * @param Main\Engine\Action $action Action.
     * @return bool If method will return false, then action will not execute.
     */
    protected function processBeforeAction(\Bitrix\Main\Engine\Action $action)
    {
    }
    /**
     * Checks if error occurred.
     *
     * @return boolean
     */
    public function hasErrors()
    {
    }
}