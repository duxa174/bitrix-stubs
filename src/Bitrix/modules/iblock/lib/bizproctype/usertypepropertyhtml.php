<?php

namespace Bitrix\Iblock\BizprocType;

class UserTypePropertyHtml extends \Bitrix\Iblock\BizprocType\UserTypeProperty
{
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
     * @param FieldType $fieldType
     * @param $value
     * @return string
     */
    protected static function formatValuePrintable(\Bitrix\Bizproc\FieldType $fieldType, $value)
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
     * @param array $controls
     * @param string $wrapperId
     * @return string
     */
    protected static function wrapCloneableControls(array $controls, $wrapperId)
    {
    }
}