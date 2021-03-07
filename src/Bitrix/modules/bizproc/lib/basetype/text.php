<?php

namespace Bitrix\Bizproc\BaseType;

/**
 * Class Text
 * @package Bitrix\Bizproc\BaseType
 */
class Text extends \Bitrix\Bizproc\BaseType\StringType
{
    /**
     * @return string
     */
    public static function getType()
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
}