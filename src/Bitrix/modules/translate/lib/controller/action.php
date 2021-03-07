<?php

namespace Bitrix\Translate\Controller;

/**
 * Extending of the Main\Engine\Action class.
 */
abstract class Action extends \Bitrix\Main\Engine\Action
{
    /**
     * Checks if error occurred.
     *
     * @return boolean
     */
    public function hasErrors()
    {
    }
}