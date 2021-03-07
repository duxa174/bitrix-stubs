<?php

namespace Bitrix\Bizproc\BaseType;

/**
 * Class File
 * @package Bitrix\Bizproc\BaseType
 */
class File extends \Bitrix\Bizproc\BaseType\Base
{
    /**
     * @return string
     */
    public static function getType()
    {
    }
    /**
     * Get formats list.
     * @return array
     */
    public static function getFormats()
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
     * @param FieldType $fieldType
     * @param $value
     * @return string
     */
    protected static function formatValuePrintable(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
    /**
     * @param FieldType $fieldType
     * @param $value
     * @return string
     */
    protected static function formatValueSrc(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
    /**
     * @param FieldType $fieldType
     * @param $value
     * @return string
     */
    protected static function formatValuePublicLink(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
    /**
     * @param FieldType $fieldType
     * @param $value
     * @return string
     */
    protected static function formatValueShortLink(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param mixed $value Field value.
     * @param string $toTypeClass Type class name.
     * @return null
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
     * @param FieldType $fieldType
     * @param array $field
     * @param mixed $value
     * @param bool $allowSelection
     * @param int $renderMode
     * @return string
     */
    public static function renderControlSingle(\Bitrix\Bizproc\FieldType $fieldType, array $field, $value, $allowSelection, $renderMode)
    {
    }
    private static function renderPublicSelectableControlSingle(\Bitrix\Bizproc\FieldType $fieldType, array $field, $value)
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
    private static function renderPublicSelectableControlMultiple(\Bitrix\Bizproc\FieldType $fieldType, array $field, $value)
    {
    }
    /**
     * @param FieldType $fieldType
     * @param array $field
     * @param array $request
     * @return null|int
     */
    protected static function extractValue(\Bitrix\Bizproc\FieldType $fieldType, array $field, array $request)
    {
    }
    public static function externalizeValue(\Bitrix\Bizproc\FieldType $fieldType, $context, $value)
    {
    }
    public static function internalizeValue(\Bitrix\Bizproc\FieldType $fieldType, $context, $value)
    {
    }
}