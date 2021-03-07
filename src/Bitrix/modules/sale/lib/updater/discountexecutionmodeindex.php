<?php

namespace Bitrix\Sale\Updater;

final class DiscountExecutionModeIndex extends \Bitrix\Main\Update\Stepper
{
    const CONTINUE_EXECUTING = true;
    const STOP_EXECUTING = false;
    const PORTION = 30;
    const TMP_EXECUTE_MODE = 22;
    protected static $moduleId = 'sale';
    public function execute(array &$result)
    {
    }
    /**
     * @return array
     */
    protected function loadCurrentStatus()
    {
    }
}