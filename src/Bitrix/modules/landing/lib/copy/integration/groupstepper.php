<?php

namespace Bitrix\Landing\Copy\Integration;

class GroupStepper extends \Bitrix\Main\Update\Stepper
{
    protected static $moduleId = 'landing';
    protected $queueName = 'LandingGroupQueue';
    protected $checkerName = 'LandingGroupChecker_';
    protected $baseName = 'LandingGroupStepper_';
    protected $errorName = 'LandingGroupError_';
    const LIMIT = 5;
    public function execute(array &$option)
    {
    }
    private function getPageIdsBySiteId(int $siteId) : array
    {
    }
    private function getPageCopier(int $copiedSiteId) : \Bitrix\Main\Copy\EntityCopier
    {
    }
    private function saveCopiedMapIds(\Bitrix\Main\Copy\EntityCopier $pageCopier, array $queueOption, \Bitrix\Main\Result $result) : void
    {
    }
    private function onAfterCopy(array $queueOption)
    {
    }
    private function clearContextUserId()
    {
    }
    private function updateFolderIds(array $pageMapIds) : void
    {
    }
    private function updateBlockIds(array $pageMapIds, array $blockMapIds) : void
    {
    }
    private function updateCopiedSite(int $siteId, int $copiedSiteId, array $pageMapIds) : void
    {
    }
    private function getSiteData(int $siteId) : array
    {
    }
    private function getSiteDataForUpdateCopiedSite(array $siteData, array $pageMapIds) : array
    {
    }
    private function copyTemplate(int $siteId, int $copiedSiteId, array $pageMapIds) : void
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