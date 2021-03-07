<?php

namespace Bitrix\Iblock\Copy\Implement\Children;

class Element implements \Bitrix\Iblock\Copy\Implement\Children\Child
{
    const IBLOCK_COPY_MODE = "iblock";
    const SECTION_COPY_MODE = "section";
    protected $moduleId = "iblock";
    private $copyMode;
    protected $sectionsRatio = [];
    protected $enumRatio = [];
    /**
     * @var Result
     */
    protected $result;
    public function __construct($copyMode)
    {
    }
    public function setSectionsRatio(array $sectionsRatio)
    {
    }
    public function setEnumRatio(array $enumRatio)
    {
    }
    /**
     * @param int $entityId
     * @param int $copiedEntityId
     * @return Result
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function copy($entityId, $copiedEntityId) : \Bitrix\Main\Result
    {
    }
    /**
     * @param int $sectionId
     * @param int $copiedSectionId
     * @return Result
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    protected function copySectionElements(int $sectionId, int $copiedSectionId)
    {
    }
    /**
     * @param int $iblockId
     * @param int $copiedIblockId
     * @return Result
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    private function copyIblockElements(int $iblockId, int $copiedIblockId)
    {
    }
    protected function addToQueue(int $copiedSectionId, $queueName)
    {
    }
}