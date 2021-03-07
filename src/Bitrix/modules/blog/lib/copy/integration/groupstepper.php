<?php

namespace Bitrix\Blog\Copy\Integration;

class GroupStepper extends \Bitrix\Main\Update\Stepper
{
    protected static $moduleId = "blog";
    protected $queueName = "BlogGroupQueue";
    protected $checkerName = "BlogGroupChecker_";
    protected $baseName = "BlogGroupStepper_";
    protected $errorName = "BlogGroupError_";
    /**
     * @param array $option
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\LoaderException
     */
    public function execute(array &$option)
    {
    }
    private function getBlogPostIdsByGroupId($groupId)
    {
    }
    private function getOffset(int $copiedGroupId) : int
    {
    }
    private function getErrorOffset(\Bitrix\Blog\Copy\BlogPostManager $copyManager) : int
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