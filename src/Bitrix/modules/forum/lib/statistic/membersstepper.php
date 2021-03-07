<?php

namespace Bitrix\Forum\Statistic;

class MembersStepper extends \Bitrix\Main\Update\Stepper
{
    protected static $moduleId = "forum";
    private static $offset = 50;
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