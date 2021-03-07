<?php

namespace Bitrix\Translate\Text;

/**
 * @see \Bitrix\Main\Text
 */
class StringHelper
{
    // utf8 https://www.w3.org/International/questions/qa-forms-utf-8.en
    public const UTF8_REGEXP = '/(?:
		      [\\x09\\x0A\\x0D\\x20-\\x7E]            # ASCII
		    | [\\xC2-\\xDF][\\x80-\\xBF]             # non-overlong 2-byte
		    | \\xE0[\\xA0-\\xBF][\\x80-\\xBF]         # excluding overlongs
		    | [\\xE1-\\xEC\\xEE\\xEF][\\x80-\\xBF]{2}  # straight 3-byte
		    | \\xED[\\x80-\\x9F][\\x80-\\xBF]         # excluding surrogates
		    | \\xF0[\\x90-\\xBF][\\x80-\\xBF]{2}      # planes 1-3
		    | [\\xF1-\\xF3][\\x80-\\xBF]{3}          # planes 4-15
		    | \\xF4[\\x80-\\x8F][\\x80-\\xBF]{2}      # plane 16
		)+/xs';
    /**
     * Special version of strlen.
     * @param string $str String to measure.
     * @param string $encoding Defines encoding used in conversion.
     * @return int
     */
    public static function getLength($str, $encoding = null)
    {
    }
    /**
     * Special version of substr.
     * @param string $str String to convert.
     * @param int $start Starting position.
     * @param int $length Count characters to extract.
     * @param string $encoding Defines encoding used in conversion.
     * @return string
     */
    public static function getSubstring($str, $start, $length, $encoding = null)
    {
    }
    /**
     * Special version of strpos.
     * @param string $haystack String to analyze.
     * @param string $needle String to find.
     * @param int $offset The search offset.
     * @param string $encoding Defines encoding used in conversion.
     * @return bool|int
     */
    public static function getPosition($haystack, $needle, $offset = 0, $encoding = null)
    {
    }
    /**
     * Special version of strtolower.
     * @param string $str String to convert.
     * @param string $encoding Defines encoding used in conversion.
     * @return string
     */
    public static function changeCaseToLower($str, $encoding = null)
    {
    }
    /**
     * Special version of strtoupper.
     * @param string $str String to convert.
     * @param string $encoding Defines encoding used in conversion.
     * @return string
     */
    public static function changeCaseToUpper($str, $encoding = null)
    {
    }
    /**
     * Convert special characters to HTML entities.
     * @param string $string The string  being converted.
     * @param int $flags A bitmask mask which specify how to handle quotes.
     * @param string $encoding Defines encoding used in conversion.
     * @return string
     */
    public static function htmlSpecialChars($string, $flags = ENT_COMPAT, $encoding = null)
    {
    }
    /**
     * Validates UTF-8 octet sequences:
     * 0xxxxxxx
     * 110xxxxx 10xxxxxx
     * 1110xxxx 10xxxxxx 10xxxxxx
     * 11110xxx 10xxxxxx 10xxxxxx 10xxxxxx
     *
     * @param string $string
     * @return bool
     */
    public static function validateUtf8OctetSequences($string)
    {
    }
}