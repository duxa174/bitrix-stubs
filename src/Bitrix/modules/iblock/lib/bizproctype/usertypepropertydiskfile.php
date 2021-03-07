<?php

namespace Bitrix\Iblock\BizprocType;

class UserTypePropertyDiskFile extends \Bitrix\Iblock\BizprocType\UserTypeProperty
{
    /**
     * @return string
     */
    public static function getType()
    {
    }
    public static function formatValueMultiple(\Bitrix\Bizproc\FieldType $fieldType, $value, $format = 'printable')
    {
    }
    public static function formatValueSingle(\Bitrix\Bizproc\FieldType $fieldType, $value, $format = 'printable')
    {
    }
    /**
     * @param FieldType $fieldType
     * @param $value
     * @return string
     */
    protected static function formatValuePrintable(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
    /**
     * @param FieldType $fieldType Document field object.
     * @param mixed $value Field value.
     * @param string $toTypeClass Type class manager name.
     * @return null|mixed
     */
    public static function convertTo(\Bitrix\Bizproc\FieldType $fieldType, $value, $toTypeClass)
    {
    }
    /**
     * Return conversion map for current type.
     * @return array Map.
     */
    public static function getConversionMap()
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
    public static function extractValue(\Bitrix\Bizproc\FieldType $fieldType, array $field, array $request)
    {
    }
    public static function clearValueSingle(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
    public static function clearValueMultiple(\Bitrix\Bizproc\FieldType $fieldType, $values)
    {
    }
    public static function toSingleValue(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
}