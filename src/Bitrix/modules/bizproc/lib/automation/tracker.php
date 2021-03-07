<?php

namespace Bitrix\Bizproc\Automation;

class Tracker
{
    const STATUS_WAITING = 0;
    const STATUS_RUNNING = 1;
    const STATUS_COMPLETED = 2;
    const STATUS_AUTOCOMPLETED = 3;
    /** @var BaseTarget */
    protected $target;
    public function __construct(\Bitrix\Bizproc\Automation\Target\BaseTarget $target)
    {
    }
    public function getLog(array $statuses)
    {
    }
    private function convertBizprocTrackingToLog($entries, $isCurrentStatus)
    {
    }
    private function getBizprocTrackingEntries($statuses)
    {
    }
    private function getStatusesStates($statuses)
    {
    }
    private function getBizprocTemplateIds($statuses)
    {
    }
}