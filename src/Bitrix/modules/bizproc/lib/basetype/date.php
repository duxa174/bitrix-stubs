<?php

namespace Bitrix\Bizproc\BaseType;

/**
 * Class Date
 * @package Bitrix\Bizproc\BaseType
 */
class Date extends \Bitrix\Bizproc\BaseType\Base
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
     * @return null|string|Type\Date
     */
    protected static function extractValue(\Bitrix\Bizproc\FieldType $fieldType, array $field, array $request)
    {
    }
    private static function extractOffset(array $field, array $request)
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
     * @param FieldType $fieldType
     * @param $value
     * @return string
     */
    protected static function formatValueServer(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
    /**
     * @param FieldType $fieldType
     * @param $value
     * @return string
     */
    protected static function formatValueAuthor(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
    public static function internalizeValue(\Bitrix\Bizproc\FieldType $fieldType, $context, $value)
    {
    }
    public static function externalizeValue(\Bitrix\Bizproc\FieldType $fieldType, $context, $value)
    {
    }
    private static function getZones()
    {
    }
}