<?php

namespace Bitrix\Iblock\BizprocType;

class UserTypePropertyElist extends \Bitrix\Iblock\BizprocType\UserTypeProperty
{
    private static $controlIsRendered = false;
    /**
     * @param FieldType $fieldType
     * @param string $callbackFunctionName
     * @param mixed $value
     * @return string
     */
    public static function renderControlOptions(\Bitrix\Bizproc\FieldType $fieldType, $callbackFunctionName, $value)
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
    private function initControlHelpers()
    {
    }
}