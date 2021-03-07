<?php

namespace Bitrix\Main\PhoneNumber;

class Parser
{
    const MAX_LENGTH_COUNTRY_CODE = 3;
    // The maximum length of the country calling code.
    const MIN_LENGTH_FOR_NSN = 2;
    // The minimum length of the national significant number.
    const MAX_LENGTH_FOR_NSN = 17;
    // The ITU says the maximum length should be 15, but one can find longer numbers in Germany.
    /* We don't allow input strings for parsing to be longer than 250 chars. This prevents malicious input from consuming CPU.*/
    const MAX_INPUT_STRING_LENGTH = 250;
    protected $plusChar = '+';
    /* Digits accepted in phone numbers (ascii, fullwidth, arabic-indic, and eastern arabic digits). */
    protected $validDigits = '0-9';
    protected $dashes = '-';
    protected $slashes = '\\/';
    protected $dot = '.';
    protected $whitespace = '\\s';
    protected $brackets = '()\\[\\]';
    protected $tildes = '~';
    protected $extensionSeparators = ';#';
    protected $extensionSymbols = ',';
    protected $phoneNumberStartPattern;
    protected $afterPhoneNumberEndPattern;
    protected $minLengthPhoneNumberPattern;
    protected $validPunctuation;
    protected $validPhoneNumber;
    protected $validPhoneNumberPattern;
    const DEFAULT_COUNTRY_OPTION = 'phone_number_default_country';
    /** @var static */
    protected static $instance = null;
    /**
     * This class is a singleton and should not be constructed directly.
     * @see HtmlParser::getInstance
     */
    protected function __construct()
    {
    }
    /**
     * Returns instance of Parser.
     * @return Parser
     */
    public static function getInstance()
    {
    }
    /**
     * Returns two-letter default country code, used for phone number parsing.
     * @return string
     */
    public static function getDefaultCountry()
    {
    }
    public static function getUserDefaultCountry()
    {
    }
    /**
     * Tries to detect default country for parsing,
     * @return string
     */
    public static function detectCountry()
    {
    }
    /**
     * Return pattern string suitable to detect phone number in some string.
     * @return string
     */
    public function getValidNumberPattern()
    {
    }
    /**
     * Parses provided phone number.
     * @param string $phoneNumber Phone number to be parsed.
     * @param string $defaultCountry 2-symbol country code.
     * @return PhoneNumber
     */
    public function parse($phoneNumber, $defaultCountry = '')
    {
    }
    /**
     * Strips and returns extension and extension separator from the specified phone number.
     * @param string $phoneNumber Phone number to be stripped.
     * @return [$extenstionSeparator, $extension]
     */
    public function stripExtension(&$phoneNumber)
    {
    }
    /**
     * Extracts phone number from the input string.
     * @param string $phoneNumber Phone number.
     * @return string
     */
    protected function extractFormattedPhoneNumber($phoneNumber)
    {
    }
    /**
     * Returns true if the specified string matches general phone number pattern.
     * @param string $phoneNumber Phone number.
     * @return bool
     */
    protected function isViablePhoneNumber($phoneNumber)
    {
    }
    /**
     * Returns country code and local number for the provided international phone number.
     * @param string $phoneNumber Phone number in international format.
     * @return array|false
     */
    protected function parsePhoneNumberAndCountryPhoneCode($phoneNumber)
    {
    }
    /**
     * Strips letters from the phone number, except for the leading plus character.
     * @param string $phoneNumber Phone number.
     * @return string
     */
    protected function normalizePhoneNumber($phoneNumber)
    {
    }
    /**
     * Returns metadata for the first country with specified $countryCode.
     * @param string $countryCode Phone code of the country
     * @return array | false
     */
    protected function getMetadataByCountryCode($countryCode)
    {
    }
    /**
     * Returns 2-symbol country code by localNumber.
     * @param string $countryCode Phone code of the country.
     * @param string $localNumber Local phone number.
     * @return string|false
     */
    protected function findCountry($countryCode, $localNumber)
    {
    }
    /**
     * Returns type of the specified number.
     * @param string $localNumber Local phone number.
     * @param string $country 2-symbol country code.
     * @return string|false
     */
    protected function getNumberType($localNumber, $country)
    {
    }
    /**
     * Strips national prefix from the specified phone number. Returns true if national prefix
     * was stripped and false otherwise.
     * @param string $phoneNumber Local phone number.
     * @param array $countryMetadata Country metadata.
     * @return string
     */
    protected static function stripNationalPrefix(&$phoneNumber, $countryMetadata)
    {
    }
    /**
     * Strips country code from the number. Returns true if country code was stripped or false otherwise.
     * @param string $phoneNumber Phone number.
     * @param array $countryMetadata Country metadata.
     * @return bool
     */
    protected static function stripCountryCode(&$phoneNumber, $countryMetadata)
    {
    }
    protected function getCountriesByCode($countryCode)
    {
    }
    protected function getCountryMetadata($country)
    {
    }
    /**
     * Strips all letters from the string.
     * @param string $str Input string.
     * @return string
     */
    protected static function stripLetters($str)
    {
    }
}