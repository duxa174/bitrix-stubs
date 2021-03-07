<?php

namespace Bitrix\Conversion;

final class Config
{
    private static $baseCurrency;
    public static function getBaseCurrency()
    {
    }
    /** @internal
     * @param string $currency - currency code
     */
    public static function setBaseCurrency($currency)
    {
    }
    /** @deprecated */
    public static function convertToBaseCurrency($value, $currency)
    {
    }
    /** @deprecated */
    public static function formatToBaseCurrency($value, $format = null)
    {
    }
    /** @deprecated */
    public static function getBaseCurrencyUnit()
    {
    }
    private static $modules = array();
    public static function getModules()
    {
    }
    /** @internal */
    public static function setModules(array $modules)
    {
    }
    public static function isModuleActive($name)
    {
    }
}