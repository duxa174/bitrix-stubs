<?php

namespace Bitrix\Forum\Statistic;

class ForumsStepper extends \Bitrix\Main\Update\Stepper
{
    protected static $moduleId = "forum";
    private static $offset = 1;
    public static function getTitle()
    {
    }
    /**
     * @inheritDoc
     */
    public function execute(array &$option)
    {
    }
}