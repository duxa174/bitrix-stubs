<?php

namespace Bitrix\Iblock\Copy\Implement\Children;

class Field implements \Bitrix\Iblock\Copy\Implement\Children\Child
{
    const FIELD_COPY_ERROR = "FIELD_COPY_ERROR";
    private $enumRatio = [];
    private $enumTmpMap = [];
    /**
     * @var Result
     */
    protected $result;
    public function __construct()
    {
    }
    public function getEnumRatio()
    {
    }
    public function copy($iblockId, $copiedIblockId) : \Bitrix\Main\Result
    {
    }
    private function getFieldsToCopy($iblockId)
    {
    }
    private function addFields($copiedIblockId, $fields)
    {
    }
    private function getProperty($iblockId)
    {
    }
    private function addProperties($copiedIblockId, array $properties)
    {
    }
    private function addPropertyList($propertyId, $list)
    {
    }
    protected function getEnumValues($fieldId)
    {
    }
    protected function setEnumRatio($iblockId, $fieldId, $copiedFieldId)
    {
    }
}