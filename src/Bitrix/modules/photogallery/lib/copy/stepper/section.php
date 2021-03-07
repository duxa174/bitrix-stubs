<?php

namespace Bitrix\Photogallery\Copy\Stepper;

class Section extends \Bitrix\Main\Update\Stepper
{
    protected static $moduleId = "photogallery";
    protected $queueName = "SectionGroupQueue";
    protected $checkerName = "SectionGroupChecker_";
    protected $baseName = "SectionGroupStepper_";
    protected $errorName = "SectionGroupError_";
    /**
     * Executes some action, and if return value is false, agent will be deleted.
     * @param array $option Array with main data to show if it is necessary like {steps : 35, count : 7},
     * where steps is an amount of iterations, count - current position.
     * @return boolean
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\LoaderException
     */
    public function execute(array &$option)
    {
    }
    private function getElementIds(int $sectionId, int $limit, int $offset) : array
    {
    }
    private function getOffset(int $copiedSectionId) : int
    {
    }
    private function getErrorOffset(\Bitrix\Main\Copy\EntityCopier $elementCopier) : int
    {
    }
    private function getContainerCollection($elementIds, array $sectionsRatio, array $enumRatio, $targetIblockId = 0)
    {
    }
    private function getElementCopier()
    {
    }
    private function onAfterQueueCopy(array $queueOption) : void
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