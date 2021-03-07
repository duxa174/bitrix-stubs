<?php

namespace Bitrix\Bizproc\UserType;

class Money extends \Bitrix\Bizproc\UserType\UserFieldBase
{
    protected static function extractValue(\Bitrix\Bizproc\FieldType $fieldType, array $field, array $request)
    {
    }
    /** @inheritdoc */
    public static function compareValues($valueA, $valueB)
    {
    }
    protected static function formatValuePrintable(\Bitrix\Bizproc\FieldType $fieldType, $value)
    {
    }
    private static function getDefaultCurrencyId()
    {
    }
    private static function normalizeCurrencyID($currencyID)
    {
    }
    private static function convertMoney($sum, $srcCurrencyID, $dstCurrencyID, $srcExchRate = -1)
    {
    }
}