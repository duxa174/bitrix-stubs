<?php

namespace Bitrix\Bizproc\BaseType;

/**
 * Class Bool
 * @package Bitrix\Bizproc\BaseType
 */
class BoolType extends \Bitrix\Bizproc\BaseType\Base
{
    /**
     * @return string
     */
    public static function getType()
    {
    }
    /**
     * Normalize single value.
     *
     * @param FieldType $fieldType Document field type.
     * @param mixed $value Field value.
     * @return mixed Normalized value
     */
    public static function toSingleValue(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param mixed $value Field value.
     * @return string
     */
    protected static function formatValuePrintable(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param mixed $value Field value.
     * @param string $toTypeClass Type class name.
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
     * @param FieldType $fieldType
     * @param array $field
     * @param mixed $value
     * @param bool $allowSelection
     * @param int $renderMode
     * @return string
     */
    protected static function renderControl(\Bitrix\Bizproc\FieldType $fieldType, array $field, $value, $allowSelection, $renderMode)
    {
    }
    public static function renderControlSingle(\Bitrix\Bizproc\FieldType $fieldType, array $field, $value, $allowSelection, $renderMode)
    {
    }
    public static function renderControlMultiple(\Bitrix\Bizproc\FieldType $fieldType, array $field, $value, $allowSelection, $renderMode)
    {
    }
    /**
     * @param int $renderMode Control render mode.
     * @return bool
     */
    public static function canRenderControl($renderMode)
    {
    }
    /**
     * @param FieldType $fieldType
     * @param array $field
     * @param array $request
     * @return null|string
     */
    protected static function extractValue(\Bitrix\Bizproc\FieldType $fieldType, array $field, array $request)
    {
    }
    public static function externalizeValue(\Bitrix\Bizproc\FieldType $fieldType, $context, $value)
    {
    }
}