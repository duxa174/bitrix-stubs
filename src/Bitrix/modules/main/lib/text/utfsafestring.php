<?php

namespace Bitrix\Main\Text;

class UtfSafeString
{
    public static function getLastPosition($haystack, $needle)
    {
    }
    public static function rtrimInvalidUtf($string)
    {
    }
    /**
     * Escapes 4-bytes UTF sequences.
     *
     * @param $string
     * @return string
     */
    public static function escapeInvalidUtf($string)
    {
    }
    /**
     * Pads utf string as str_pad.
     * Using parameters like native str_pad().
     *
     * @param $string
     * @param $padLength
     * @param string $padString
     * @param int $padType
     * @return string
     */
    public static function pad($string, $padLen, $padStr = ' ', $padType = STR_PAD_RIGHT)
    {
    }
    /**
     * Checks array of strings or string for invalid unicode symbols.
     * If input data does not contain invalid characters, returns TRUE; otherwise, returns FALSE.
     *
     * @param array|string $data Input data to validate.
     *
     * @return boolean
     */
    public static function checkEncoding($data)
    {
    }
}