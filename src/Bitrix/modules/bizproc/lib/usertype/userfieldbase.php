<?php

namespace Bitrix\Bizproc\UserType;

class UserFieldBase extends \Bitrix\Bizproc\BaseType\Base
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
    /**
     * @inheritdoc
     */
    public static function extractValueSingle(\Bitrix\Bizproc\FieldType $fieldType, array $field, array $request)
    {
    }
    protected static function getUserType(\Bitrix\Bizproc\FieldType $fieldType)
    {
    }
    private static function formatCrmValuePrintable(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
    private static function prepareCrmUserTypeValueView($value, $defaultTypeName = '')
    {
    }
}