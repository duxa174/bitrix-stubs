<?php

namespace Bitrix\Iblock\BizprocType;

class UserTypePropertyEmployee extends \Bitrix\Iblock\BizprocType\UserTypeProperty
{
    private static $isCompatible;
    /**
     * @return string
     */
    public static function getType()
    {
    }
    public static function convertTo(\Bitrix\Bizproc\FieldType $fieldType, $value, $toTypeClass)
    {
    }
    /**
     * @param FieldType $fieldType Document field object.
     * @param mixed $value Field value.
     * @param string $fromTypeClass Type class manager name.
     * @return null
     */
    public static function convertFrom(\Bitrix\Bizproc\FieldType $fieldType, $value, $fromTypeClass)
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
    /**
     * @param FieldType $fieldType
     * @param array $field
     * @param array $request
     * @return null|mixed
     */
    protected static function extractValue(\Bitrix\Bizproc\FieldType $fieldType, array $field, array $request)
    {
    }
    public static function extractValueMultiple(\Bitrix\Bizproc\FieldType $fieldType, array $field, array $request)
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
    public static function toSingleValue(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
    private static function fixUserPrefix($value)
    {
    }
    private static function isCompatibleMode()
    {
    }
}