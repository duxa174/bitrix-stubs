<?php

namespace Bitrix\Landing\Copy\Integration;

class Group implements \Bitrix\Socialnetwork\Copy\Integration\Feature
{
    const MODULE_ID = "landing";
    const QUEUE_OPTION = "LandingGroupQueue";
    const CHECKER_OPTION = "LandingGroupChecker_";
    const STEPPER_OPTION = "LandingGroupStepper_";
    const STEPPER_CLASS = \Bitrix\Landing\Copy\Integration\GroupStepper::class;
    const ERROR_OPTION = "LandingGroupError_";
    private $executiveUserId;
    private $features = [];
    public function __construct($executiveUserId = 0, array $features = [])
    {
    }
    /**
     * Initializes the start of copying the group’s knowledge base.
     * @param int $groupId Group id.
     * @param int $copiedGroupId Copied group id.
     * @throws ArgumentOutOfRangeException
     */
    public function copy($groupId, $copiedGroupId)
    {
    }
    private function addToQueue(int $copiedGroupId)
    {
    }
}