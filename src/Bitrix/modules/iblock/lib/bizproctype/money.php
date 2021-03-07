<?php

namespace Bitrix\Iblock\BizprocType;

class Money extends \Bitrix\Iblock\BizprocType\UserTypeProperty
{
    protected static function formatValuePrintable(\Bitrix\Bizproc\FieldType $fieldType, $value)
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
    private static function getIblockId(\Bitrix\Bizproc\FieldType $fieldType)
    {
    }
    /** @inheritdoc */
    public static function compareValues($valueA, $valueB)
    {
    }
    private static function convertMoney($sum, $srcCurrencyId, $dstCurrencyId)
    {
    }
}