<?php

namespace Bitrix\Bizproc\BaseType;

/**
 * Class Base
 * @package Bitrix\Bizproc\BaseType
 */
class Base
{
    /**
     * @return string
     */
    public static function getType()
    {
    }
    /** @var array $formats	 */
    protected static $formats = array('printable' => array('callable' => 'formatValuePrintable', 'separator' => ', '));
    /**
     * @param string $format
     * @return callable|null
     */
    protected static function getFormatCallable($format)
    {
    }
    /**
     * @param string $format
     * @return string
     */
    protected static function getFormatSeparator($format)
    {
    }
    /**
     * @param string $name Format name.
     * @param array $options Format options.
     * @throws Main\ArgumentException
     * @return void
     */
    public static function addFormat($name, array $options)
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
     * @return array
     */
    public static function convertValueMultiple(\Bitrix\Bizproc\FieldType $fieldType, $value, $toTypeClass)
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param mixed $value Field value.
     * @param string $toTypeClass Type class name.
     * @return bool|int|float|string
     * @throws Main\ArgumentException
     */
    public static function convertValueSingle(\Bitrix\Bizproc\FieldType $fieldType, $value, $toTypeClass)
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
     * @param FieldType $fieldType Document field type.
     * @param mixed $value Field value.
     * @param string $fromTypeClass Type class name.
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
     * @param FieldType $fieldType Document field type.
     * @param array $baseValue Base value.
     * @param mixed $appendValue Value to append.
     * @return mixed Merge result.
     */
    public static function mergeValue(\Bitrix\Bizproc\FieldType $fieldType, array $baseValue, $appendValue) : array
    {
    }
    /**
     * @var array
     */
    protected static $errors = array();
    /**
     * @param mixed $error Error description.
     */
    public static function addError($error)
    {
    }
    /**
     * @param array $errors Errors description.
     * @return void
     */
    public static function addErrors(array $errors)
    {
    }
    /**
     * @return array
     */
    public static function getErrors()
    {
    }
    /**
     * Clean errors
     */
    protected static function cleanErrors()
    {
    }
    /**
     * @param array $field
     * @return string
     */
    protected static function generateControlId(array $field)
    {
    }
    /**
     * @param array $field
     * @return string
     */
    protected static function generateControlName(array $field)
    {
    }
    protected static function generateControlClassName(\Bitrix\Bizproc\FieldType $fieldType, array $field)
    {
    }
    /**
     * @param array $controls
     * @param string $wrapperId
     * @return string
     */
    protected static function wrapCloneableControls(array $controls, $wrapperId)
    {
    }
    /**
     * @param FieldType $fieldType
     * @param array $field
     * @param array $controls
     * @return string
     */
    protected static function renderPublicMultipleWrapper(\Bitrix\Bizproc\FieldType $fieldType, array $field, array $controls)
    {
    }
    /**
     * Low-level control rendering method
     * @param FieldType $fieldType
     * @param array $field
     * @param mixed $value
     * @param bool $allowSelection
     * @param int $renderMode
     * @return string - HTML rendering
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
     * @param array $field
     * @param null|string $value
     * @param bool $showInput
     * @param string $selectorMode
     * @param FieldType $fieldType
     * @return string
     */
    protected static function renderControlSelector(array $field, $value = null, $showInput = false, $selectorMode = '', \Bitrix\Bizproc\FieldType $fieldType = null)
    {
    }
    protected static function renderControlSelectorButton($controlId, \Bitrix\Bizproc\FieldType $fieldType, $selectorMode = '')
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
     * @return mixed|null
     */
    public static function extractValueSingle(\Bitrix\Bizproc\FieldType $fieldType, array $field, array $request)
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
     * @return void
     */
    public static function clearValueSingle(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param mixed $value Field value.
     * @return void
     */
    public static function clearValueMultiple(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param string $context Context identification (Document, Variable etc.)
     * @param mixed $value Field value.
     * @return mixed
     */
    public static function internalizeValue(\Bitrix\Bizproc\FieldType $fieldType, $context, $value)
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param string $context Context identification (Document, Variable etc.)
     * @param mixed $value Field value.
     * @return mixed
     */
    public static function internalizeValueSingle(\Bitrix\Bizproc\FieldType $fieldType, $context, $value)
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param string $context Context identification (Document, Variable etc.)
     * @param mixed $value Field value.
     * @return mixed
     */
    public static function internalizeValueMultiple(\Bitrix\Bizproc\FieldType $fieldType, $context, $value)
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param string $context Context identification (Document, Variable etc.)
     * @param mixed $value Field value.
     * @return mixed
     */
    public static function externalizeValue(\Bitrix\Bizproc\FieldType $fieldType, $context, $value)
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param string $context Context identification (Document, Variable etc.)
     * @param mixed $value Field value.
     * @return mixed
     */
    public static function externalizeValueSingle(\Bitrix\Bizproc\FieldType $fieldType, $context, $value)
    {
    }
    /**
     * @param FieldType $fieldType Document field type.
     * @param string $context Context identification (Document, Variable etc.)
     * @param mixed $value Field value.
     * @return mixed
     */
    public static function externalizeValueMultiple(\Bitrix\Bizproc\FieldType $fieldType, $context, $value)
    {
    }
    /**
     * @param mixed $valueA First value.
     * @param mixed $valueB Second value.
     * @return int Returns 1, -1 or 0
     */
    public static function compareValues($valueA, $valueB)
    {
    }
}