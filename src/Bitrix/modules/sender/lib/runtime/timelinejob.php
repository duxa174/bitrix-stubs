<?php

namespace Bitrix\Sender\Runtime;

/**
 * Class TimeLine
 * @package Bitrix\Sender\Runtime
 */
class TimeLineJob extends \Bitrix\Sender\Runtime\Job
{
    /** @var  int $letterId Letter ID. */
    protected $letterId;
    /** @var  int $campaignId Campaign ID. */
    protected $campaignId;
    /**
     * Add agent to handle time line tasks
     * @return void
     */
    public static function addEventAgent($letterId)
    {
    }
    /**
     * get timeline agent name
     * @return string
     */
    public static function getAgentName($letterId)
    {
    }
}