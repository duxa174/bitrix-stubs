<?php

namespace Bitrix\Iblock\Copy\Stepper;

class Section extends \Bitrix\Iblock\Copy\Stepper\Entity
{
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
}