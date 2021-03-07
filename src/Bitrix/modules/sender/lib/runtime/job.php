<?php

namespace Bitrix\Sender\Runtime;

/**
 * Class Job
 * @package Bitrix\Sender\Runtime
 */
abstract class Job
{
    /**
     * Actualize jobs by campaign ID.
     * @return void
     */
    public static function actualizeByCampaignId($campaignId)
    {
    }
    /**
     * Actualize jobs by letter ID.
     * @return void
     */
    public static function actualizeByLetterId($letterId)
    {
    }
    /**
     * Actualize all jobs.
     * @return void
     */
    public static function actualizeAll()
    {
    }
    protected function addAgent($agentName, $interval = 60, $nextDateExec = '')
    {
    }
    protected function removeAgent($agentName)
    {
    }
}