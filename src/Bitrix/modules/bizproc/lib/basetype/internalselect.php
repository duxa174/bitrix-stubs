<?php

namespace Bitrix\Bizproc\BaseType;

/**
 * Class InternalSelect
 * @package Bitrix\Iblock\BizprocType
 */
class InternalSelect extends \Bitrix\Bizproc\BaseType\Select
{
    /**
     * @return string
     */
    public static function getType()
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param string $callbackFunctionName Client callback function name.
     * @param mixed $value Field value.
     * @return string
     */
    public static function renderControlOptions(\Bitrix\Bizproc\FieldType $fieldType, $callbackFunctionName, $value)
    {
    }
    /**
     * @param FieldType $fieldType
     * @return array
     */
    protected static function getFieldOptions(\Bitrix\Bizproc\FieldType $fieldType)
    {
    }
    /**
     * @param FieldType $fieldType
     * @param bool $ignoreAliases
     * @return array
     */
    private static function getDocumentSelectFields(\Bitrix\Bizproc\FieldType $fieldType, $ignoreAliases = false)
    {
    }
}