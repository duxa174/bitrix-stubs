<?php

namespace Bitrix\Lists\Copy\Integration;

class GroupStepper extends \Bitrix\Main\Update\Stepper
{
    protected static $moduleId = "lists";
    protected $queueName = "ListsGroupQueue";
    protected $checkerName = "ListsGroupChecker_";
    protected $baseName = "ListsGroupStepper_";
    protected $errorName = "ListsGroupError_";
    /**
     * Executes some action, and if return value is false, agent will be deleted.
     * @param array $option Array with main data to show if it is necessary like {steps : 35, count : 7},
     * where steps is an amount of iterations, count - current position.
     * @return boolean
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\LoaderException
     * @throws \Bitrix\Main\SystemException
     */
    public function execute(array &$option)
    {
    }
    private function getIblockIdsToCopy($iblockTypeId, $groupId)
    {
    }
    private function getOffset(string $iblockTypeId, int $copiedGroupId) : int
    {
    }
    private function getErrorOffset(\Bitrix\Iblock\Copy\Manager $copyManager) : int
    {
    }
    protected function getQueue() : array
    {
    }
    protected function setQueue(array $queue) : void
    {
    }
    protected function getQueueOption()
    {
    }
    protected function saveQueueOption(array $data)
    {
    }
    protected function deleteQueueOption()
    {
    }
    protected function deleteCurrentQueue(array $queue) : void
    {
    }
    protected function isQueueEmpty()
    {
    }
    protected function getOptionData($optionName)
    {
    }
    protected function deleteOption($optionName)
    {
    }
}