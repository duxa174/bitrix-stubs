<?php

namespace Bitrix\Pull;

class Common
{
    public static function jsonEncode($params)
    {
    }
    /**
     * Checks if input array contains a string with invalid unicode symbol(s). If array contains invalid symbols, returns
     * path to the key with invalid string. If array is valid, returns FALSE.
     *
     * @param array $input Input array to validate.
     * @param string $currentPath Current validation path (for recursion).
     * @return string|false
     */
    public static function findInvalidUnicodeSymbols(array $input, $currentPath = "")
    {
    }
}