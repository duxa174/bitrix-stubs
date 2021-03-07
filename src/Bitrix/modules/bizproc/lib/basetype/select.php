<?php

namespace Bitrix\Bizproc\BaseType;

/**
 * Class Select
 * @package Bitrix\Bizproc\BaseType
 */
class Select extends \Bitrix\Bizproc\BaseType\Base
{
    /**
     * @return string
     */
    public static function getType()
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
    /**
     * @param int $renderMode Control render mode.
     * @return bool
     */
    public static function canRenderControl($renderMode)
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param array $field Form field.
     * @param mixed $value Field value.
     * @param bool $allowSelection Allow selection flag.
     * @param int $renderMode Control render mode.
     * @return string
     */
    public static function renderControlSingle(\Bitrix\Bizproc\FieldType $fieldType, array $field, $value, $allowSelection, $renderMode)
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param array $field Form field.
     * @param mixed $value Field value.
     * @param bool $allowSelection Allow selection flag.
     * @param int $renderMode Control render mode.
     * @return string
     */
    public static function renderControlMultiple(\Bitrix\Bizproc\FieldType $fieldType, array $field, $value, $allowSelection, $renderMode)
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
     * @param array $field
     * @param array $request
     * @return null|mixed
     */
    protected static function extractValue(\Bitrix\Bizproc\FieldType $fieldType, array $field, array $request)
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param array $field Form field.
     * @param array $request Request data.
     * @return array
     */
    public static function extractValueMultiple(\Bitrix\Bizproc\FieldType $fieldType, array $field, array $request)
    {
    }
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
     * @return mixed|null
     */
    public static function formatValueSingle(\Bitrix\Bizproc\FieldType $fieldType, $value, $format = 'printable')
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param mixed $value Field value.
     * @param string $toTypeClass Type class name.
     * @return array
     */
    public static function convertValueMultiple(\Bitrix\Bizproc\FieldType $fieldType, $value, $toTypeClass)
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
     * Get field settings
     * @param FieldType $fieldType
     * @return array
     */
    protected static function getFieldSettings(\Bitrix\Bizproc\FieldType $fieldType)
    {
    }
    /**
     * @param mixed $options
     * @return array
     */
    protected static function normalizeOptions($options)
    {
    }
    public static function externalizeValue(\Bitrix\Bizproc\FieldType $fieldType, $context, $value)
    {
    }
}