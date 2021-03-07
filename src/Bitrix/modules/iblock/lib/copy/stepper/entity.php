<?php

namespace Bitrix\Iblock\Copy\Stepper;

abstract class Entity extends \Bitrix\Main\Update\Stepper
{
    protected static $moduleId = "iblock";
    protected function getContainerCollection($elementIds, array $sectionsRatio, array $enumRatio, $targetIblockId = 0)
    {
    }
    protected function getElementCopier()
    {
    }
    protected function onAfterCopy(array $queueOption)
    {
    }
    protected function getErrorOffset(\Bitrix\Main\Copy\EntityCopier $elementCopier) : int
    {
    }
    private function saveErrorOption(array $queueOption)
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