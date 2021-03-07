<?php

namespace Bitrix\Lists\Copy\Integration;

class Group implements \Bitrix\Socialnetwork\Copy\Integration\Feature
{
    private $executiveUserId;
    private $features = [];
    const MODULE_ID = "lists";
    const QUEUE_OPTION = "ListsGroupQueue";
    const CHECKER_OPTION = "ListsGroupChecker_";
    const STEPPER_OPTION = "ListsGroupStepper_";
    const STEPPER_CLASS = \Bitrix\Lists\Copy\Integration\GroupStepper::class;
    const ERROR_OPTION = "ListsGroupError_";
    public function __construct($executiveUserId = 0, array $features = [])
    {
    }
    /**
     * Starts the copy process.
     * @param int $groupId Origin group id.
     * @param int $copiedGroupId Copied group id.
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function copy($groupId, $copiedGroupId)
    {
    }
    private function getIblockIdsToCopy($iblockTypeId, $groupId)
    {
    }
    private function addToQueue(int $copiedGroupId)
    {
    }
}