<?php

namespace Bitrix\Iblock\Copy\Implement;

class Section extends \Bitrix\Main\Copy\CopyImplementer
{
    const SECTION_COPY_ERROR = "SECTION_COPY_ERROR";
    /**
     * @var Child[]
     */
    private $child;
    private $changedFields = [];
    private $changedFieldsForChildSections = [];
    /**
     * @var SectionCopier|null
     */
    private $sectionCopier = null;
    /**
     * Writes child implementer to the copy queue.
     *
     * @param Child $child Child implementer.
     */
    public function setChild(\Bitrix\Iblock\Copy\Implement\Children\Child $child)
    {
    }
    /**
     * To copy child sections needs section copier.
     *
     * @param SectionCopier $sectionCopier Section copier.
     */
    public function setSectionCopier(\Bitrix\Iblock\Copy\Section $sectionCopier) : void
    {
    }
    public function setChangedFields($changedFields)
    {
    }
    public function setChangedFieldsForChildSections($changedFieldsForChildSections)
    {
    }
    /**
     * Adds entity.
     *
     * @param Container $container
     * @param array $fields
     * @return int|bool return entity id or false.
     */
    public function add(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Returns section fields.
     *
     * @param Container $container
     * @param int $entityId
     * @return array $fields
     */
    public function getFields(\Bitrix\Main\Copy\Container $container, $entityId)
    {
    }
    /**
     * Preparing data before creating a new entity.
     *
     * @param Container $container
     * @param array $fields List entity fields.
     * @return array $fields
     */
    public function prepareFieldsToCopy(\Bitrix\Main\Copy\Container $container, array $fields)
    {
    }
    /**
     * Starts copying children entities.
     *
     * @param Container $container
     * @param int $sectionId Section id.
     * @param int $copiedSectionId Copied section id.
     * @return Result
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function copyChildren(\Bitrix\Main\Copy\Container $container, $sectionId, $copiedSectionId)
    {
    }
    private function copyChildSections(int $sectionId, int $copiedSectionId)
    {
    }
    private function getSectionsMapIds(array $data) : array
    {
    }
    private function changeFields(array $fields)
    {
    }
    private function cleanChangedFields()
    {
    }
    private function getRights(int $iblockId, int $elementId)
    {
    }
    private function getGroupCodeIgnoreList(int $iblockId) : array
    {
    }
}