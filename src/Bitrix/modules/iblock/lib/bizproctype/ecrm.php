<?php

namespace Bitrix\Iblock\BizprocType;

class ECrm extends \Bitrix\Iblock\BizprocType\UserTypeProperty
{
    protected static $formatSeparator = ', ';
    /**
     * @param FieldType $fieldType Document field type.
     * @param mixed $value Field value.
     * @param string $format Format name.
     * @return string
     */
    public static function formatValueMultiple(\Bitrix\Bizproc\FieldType $fieldType, $value, $format = 'printable')
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param mixed $value Field value.
     * @param string $format Format name.
     * @return string
     */
    public static function formatValueSingle(\Bitrix\Bizproc\FieldType $fieldType, $value, $format = 'printable')
    {
    }
    protected static function formatValuePrintable(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param string $callbackFunctionName Callback name.
     * @param mixed $value Field value.
     * @return string
     */
    public static function renderControlOptions(\Bitrix\Bizproc\FieldType $fieldType, $callbackFunctionName, $value)
    {
    }
    /**
     * @param FieldType $fieldType Document field object.
     * @param array $field Form field information.
     * @param mixed $value Field value.
     * @param bool $allowSelection Allow selection flag.
     * @param int $renderMode Control render mode.
     * @return string
     */
    public static function renderControlSingle(\Bitrix\Bizproc\FieldType $fieldType, array $field, $value, $allowSelection, $renderMode)
    {
    }
    /**
     * @param FieldType $fieldType Document field object.
     * @param array $field Form field information.
     * @param mixed $value Field value.
     * @param bool $allowSelection Allow selection flag.
     * @param int $renderMode Control render mode.
     * @return string
     */
    public static function renderControlMultiple(\Bitrix\Bizproc\FieldType $fieldType, array $field, $value, $allowSelection, $renderMode)
    {
    }
    public static function extractValueSingle(\Bitrix\Bizproc\FieldType $fieldType, array $field, array $request)
    {
    }
    private static function getIblockId(\Bitrix\Bizproc\FieldType $fieldType)
    {
    }
    public static function toSingleValue(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
}