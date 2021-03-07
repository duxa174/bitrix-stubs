<?php

class CAllCurrencyLang
{
    /** @deprecated */
    public const SEP_EMPTY = \Bitrix\Currency\CurrencyClassifier::SEPARATOR_EMPTY;
    /** @deprecated */
    public const SEP_DOT = \Bitrix\Currency\CurrencyClassifier::SEPARATOR_DOT;
    /** @deprecated */
    public const SEP_COMMA = \Bitrix\Currency\CurrencyClassifier::SEPARATOR_COMMA;
    /** @deprecated */
    public const SEP_SPACE = \Bitrix\Currency\CurrencyClassifier::SEPARATOR_SPACE;
    /** @deprecated */
    public const SEP_NBSPACE = \Bitrix\Currency\CurrencyClassifier::SEPARATOR_NBSPACE;
    protected static $arSeparators = array(\Bitrix\Currency\CurrencyClassifier::SEPARATOR_EMPTY => '', \Bitrix\Currency\CurrencyClassifier::SEPARATOR_DOT => '.', \Bitrix\Currency\CurrencyClassifier::SEPARATOR_COMMA => ',', \Bitrix\Currency\CurrencyClassifier::SEPARATOR_SPACE => ' ', \Bitrix\Currency\CurrencyClassifier::SEPARATOR_NBSPACE => '&nbsp;');
    protected static $arDefaultValues = array('FORMAT_STRING' => '#', 'DEC_POINT' => \Bitrix\Currency\CurrencyClassifier::DECIMAL_POINT_DOT, 'THOUSANDS_SEP' => ' ', 'DECIMALS' => 2, 'THOUSANDS_VARIANT' => \Bitrix\Currency\CurrencyClassifier::SEPARATOR_SPACE, 'HIDE_ZERO' => 'N');
    protected static $arCurrencyFormat = array();
    protected static $useHideZero = 0;
    public static function enableUseHideZero()
    {
    }
    public static function disableUseHideZero()
    {
    }
    public static function isAllowUseHideZero()
    {
    }
    public static function checkFields($action, &$fields, $currency = '', $language = '', $getErrors = \false)
    {
    }
    public static function Add($arFields)
    {
    }
    public static function Update($currency, $lang, $arFields)
    {
    }
    public static function Delete($currency, $lang)
    {
    }
    public static function GetByID($currency, $lang)
    {
    }
    public static function GetCurrencyFormat($currency, $lang = \LANGUAGE_ID)
    {
    }
    public static function GetList(&$by, &$order, $currency = "")
    {
    }
    public static function GetDefaultValues()
    {
    }
    public static function GetSeparators()
    {
    }
    public static function GetSeparatorTypes($boolFull = \false)
    {
    }
    public static function GetFormatTemplates()
    {
    }
    public static function GetFormatDescription($currency)
    {
    }
    public static function CurrencyFormat($price, $currency, $useTemplate = \true)
    {
    }
    public static function formatValue($value, array $format, $useTemplate = \true)
    {
    }
    public static function applyTemplate($value, $template)
    {
    }
    public static function checkLanguage($language)
    {
    }
    public static function isExistCurrencyLanguage($currency, $language)
    {
    }
    public static function getParsedCurrencyFormat(string $currency) : ?array
    {
    }
    public static function getPriceControl(string $control, string $currency) : string
    {
    }
    protected static function clearFields($value)
    {
    }
    public static function getUnFormattedValue(string $formattedValue, string $currency, string $lang = \LANGUAGE_ID) : string
    {
    }
    protected static function unFormatValue(string $formattedValue, string $thousandsSeparator, string $decPoint) : string
    {
    }
}
class CCurrencyLang extends \CAllCurrencyLang
{
}