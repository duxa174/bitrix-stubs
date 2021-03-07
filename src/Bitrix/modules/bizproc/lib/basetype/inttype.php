<?php

namespace Bitrix\Bizproc\BaseType;

/**
 * Class Int
 * @package Bitrix\Bizproc\BaseType
 */
class IntType extends \Bitrix\Bizproc\BaseType\Double
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
     * @param FieldType $fieldType
     * @param array $field
     * @param array $request
     * @return null|int
     */
    protected static function extractValue(\Bitrix\Bizproc\FieldType $fieldType, array $field, array $request)
    {
    }
}