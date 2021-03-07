<?php

namespace Bitrix\Main\Text;

class Encoding
{
    /**
     * Converts data from a source encoding to a target encoding.
     *
     * @param string|array|\SplFixedArray $data The data to convert. From main 16.0.10 data can be an array.
     * @param string $charsetFrom The source encoding.
     * @param string $charsetTo The target encoding.
     * @return string|array|\SplFixedArray|bool Returns converted data or false on error.
     */
    public static function convertEncoding($data, $charsetFrom, $charsetTo)
    {
    }
    protected static function resolveAlias($alias)
    {
    }
    protected static function convert(&$data, $charsetFrom, $charsetTo)
    {
    }
    /**
     * @deprecated Deprecated in main 16.0.10. Use Encoding::convertEncoding().
     * @param $data
     * @param $charsetFrom
     * @param $charsetTo
     * @return mixed
     */
    public static function convertEncodingArray($data, $charsetFrom, $charsetTo)
    {
    }
    /**
     * @param string $string
     * @return bool|string
     */
    public static function convertEncodingToCurrent($string)
    {
    }
    /**
     * @param string $string
     * @return bool
     */
    public static function detectUtf8($string)
    {
    }
    protected static function convertByMbstring($data, $charsetFrom, $charsetTo)
    {
    }
}