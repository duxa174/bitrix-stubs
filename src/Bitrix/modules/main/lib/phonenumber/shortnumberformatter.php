<?php

namespace Bitrix\Main\PhoneNumber;

/**
 * Formatter for invalid short numbers, like 32-12-43, just to make them look pretty.
 * @package Bitrix\Main\PhoneNumber
 */
class ShortNumberFormatter
{
    protected static $templates = [3 => 'x-xx', 4 => 'xx-xx', 5 => 'x-xx-xx', 6 => 'xx-xx-xx', 7 => 'xxx-xx-xx'];
    /**
     * Pretty prints some invalid short number.
     * @param PhoneNumber $phoneNumber Phone number.
     * @return string
     */
    public static function format(\Bitrix\Main\PhoneNumber\PhoneNumber $phoneNumber)
    {
    }
    /**
     * Return true if the phone number could be formatted using this formatter and false otherwise.
     * @param PhoneNumber $phoneNumber Phone number.
     * @return bool
     */
    public static function isApplicable(\Bitrix\Main\PhoneNumber\PhoneNumber $phoneNumber)
    {
    }
}