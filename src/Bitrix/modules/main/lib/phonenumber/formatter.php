<?php

namespace Bitrix\Main\PhoneNumber;

class Formatter
{
    public static function format(\Bitrix\Main\PhoneNumber\PhoneNumber $number, $formatType, $forceNationalPrefix = false)
    {
    }
    /**
     * Formats number using original format. No digit or significant char should be added or removed.
     * @param PhoneNumber $number Phone number.
     * @return string
     */
    public static function formatOriginal(\Bitrix\Main\PhoneNumber\PhoneNumber $number)
    {
    }
    protected static function selectFormatForNumber(\Bitrix\Main\PhoneNumber\PhoneNumber $number, $formatType, $countryMetadata)
    {
    }
    protected static function selectOriginalFormatForNumber(\Bitrix\Main\PhoneNumber\PhoneNumber $number)
    {
    }
    /**
     * Checks that number starts with specified leading digits regex. Return array of matches if matched or false otherwise
     * @param string $phoneNumber Phone number.
     * @param string|array $leadingDigits Leading digits to check (one pattern or array of patterns).
     * @return array|false
     */
    protected static function matchLeadingDigits($phoneNumber, $leadingDigits)
    {
    }
    /**
     * @param string $nationalNumber
     * @param string $formatType
     * @param array $countryMetadata
     * @param mixed $format
     * @param bool $forceNationalPrefix
     * @return mixed
     */
    protected static function formatNationalNumber($nationalNumber, $formatType, $countryMetadata, $format, $forceNationalPrefix)
    {
    }
    protected static function formatNationalNumberWithOriginalFormat(\Bitrix\Main\PhoneNumber\PhoneNumber $number, $format)
    {
    }
    protected static function getNationalPrefix($countryMetadata, $stripNonDigits)
    {
    }
    protected static function getNationalPrefixFormattingRule($format, $countryMetadata)
    {
    }
    protected static function getNationalPrefixOptional($countryMetadata, $format)
    {
    }
    /**
     * Check if rawInput, which is assumed to be in the national format, has a national prefix. The
     * national prefix is assumed to be in digits-only form.
     * @param string $phoneNumber
     * @param string $nationalPrefix
     * @param array $countryMetadata
     * @return bool
     */
    protected static function numberContainsNationalPrefix($phoneNumber, $nationalPrefix, $countryMetadata)
    {
    }
    /**
     * Returns array of available for country phone number formats.
     * @param array $countryMetadata
     * @return array
     */
    protected static function getAvailableFormats($countryMetadata)
    {
    }
    /**
     * National prefix is supported by the format if:
     * 1.    Format and country metadata do not have nationalPrefixFormattingRule.
     * 2. OR Format or country metadata contains nationalPrefixFormattingRule and this formatting rule contains "$NP"
     * @param array $format
     * @param array $countryMetadata
     * @returns {boolean}
     * @private
     */
    protected static function _isNationalPrefixSupported($format, $countryMetadata)
    {
    }
    protected static function stripNonNumbers($string)
    {
    }
}