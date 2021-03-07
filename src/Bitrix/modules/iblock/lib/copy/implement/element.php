<?php

namespace Bitrix\Iblock\Copy\Implement;

class Element extends \Bitrix\Main\Copy\CopyImplementer
{
    const ELEMENT_COPY_ERROR = "ELEMENT_COPY_ERROR";
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
     * Returns element fields.
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
     * @param array $inputFields List element fields.
     * @return array $fields
     */
    public function prepareFieldsToCopy(\Bitrix\Main\Copy\Container $container, array $inputFields)
    {
    }
    /**
     * Starts copying children entities.
     *
     * @param Container $container
     * @param int $elementId Entity id.
     * @param int $copiedElementId Copied entity id.
     * @return Result
     */
    public function copyChildren(\Bitrix\Main\Copy\Container $container, $elementId, $copiedElementId)
    {
    }
    private function getFieldValue($fieldId, $fieldValue)
    {
    }
    private function getPropertyFieldValue(\Bitrix\Main\Copy\Container $container, $fieldId, $fieldValue)
    {
    }
    private function getPictureValue($fieldValue)
    {
    }
    private function getBaseValue($fieldValue)
    {
    }
    private function getFileValue(array $fieldValue)
    {
    }
    private function getListValue(\Bitrix\Main\Copy\Container $container, array $inputValue)
    {
    }
    private function getPropertyValue(array $inputValue)
    {
    }
    private function getIntegerValue(array $fieldValue)
    {
    }
    private function convertPropertyId(array $fields, $targetIblockId)
    {
    }
    private function getValueFromPropertyClass(array $fieldValue, $callback)
    {
    }
    private function getRights(int $iblockId, int $elementId)
    {
    }
    private function getGroupCodeIgnoreList(int $iblockId) : array
    {
    }
}