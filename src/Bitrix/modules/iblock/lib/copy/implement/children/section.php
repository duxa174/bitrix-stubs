<?php

namespace Bitrix\Iblock\Copy\Implement\Children;

class Section implements \Bitrix\Iblock\Copy\Implement\Children\Child
{
    /**
     * @var Result
     */
    private $result;
    private $sectionsRatio = [];
    public function __construct()
    {
    }
    /**
     * In order for the elements to be copied to the desired sections will return
     * the identifier ratio of the copied partitions.
     * @param int $iblockId Iblock id.
     * @return array
     */
    public function getSectionsRatio($iblockId = 0) : array
    {
    }
    public function copy($iblockId, $copiedIblockId) : \Bitrix\Main\Result
    {
    }
    private function getSections($iblockId, $copiedIblockId)
    {
    }
    private function getParentRatioIds(array $sections) : array
    {
    }
    private function addSections(\CIBlockSection $sectionObject, array $sections) : array
    {
    }
    private function updateSections(\CIBlockSection $sectionObject, array $parentRatioIds, array $ratioIds)
    {
    }
    private function addSection(\CIBlockSection $sectionObject, $section)
    {
    }
    private function setRatios($iblockId, array $ratioIds)
    {
    }
}