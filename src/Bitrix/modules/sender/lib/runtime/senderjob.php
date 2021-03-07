<?php

namespace Bitrix\Sender\Runtime;

/**
 * Class SenderJob
 * @package Bitrix\Sender\Runtime
 */
class SenderJob extends \Bitrix\Sender\Runtime\Job
{
    /** @var  int $letterId Letter ID. */
    protected $letterId;
    /** @var  int $campaignId Campaign ID. */
    protected $campaignId;
    /**
     * Set campaign ID.
     *
     * @param int $campaignId Campaign ID.
     * @return $this
     */
    public function withCampaignId($campaignId)
    {
    }
    /**
     * Set letter ID.
     *
     * @param int $letterId Letter ID.
     * @return $this
     */
    public function withLetterId($letterId)
    {
    }
    /**
     * Actualize jobs.
     * @return $this
     */
    public function actualize()
    {
    }
    /**
     * Get agent name.
     *
     * @param int $letterId Letter ID.
     * @param bool|int $threadId
     *
     * @return string
     */
    public static function getAgentName($letterId, $threadId = false)
    {
    }
}