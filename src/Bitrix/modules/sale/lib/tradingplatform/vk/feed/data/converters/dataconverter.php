<?php

namespace Bitrix\Sale\TradingPlatform\Vk\Feed\Data\Converters;

abstract class DataConverter
{
    const PAD_STRING = '_';
    const END_STRING = ' ...';
    protected $exportId;
    public abstract function convert($data);
    /**
     * VK don't understand specialchars-quotes. Change them to the yolochki
     *
     * @param $str
     * @return mixed
     */
    protected static function convertQuotes($str)
    {
    }
    private static $specialCharsLength = [
        //		commented chars has no effect on the length
        //		'"' => [
        //			'count' => 5,
        //			'regexp' => '"',
        //		],
        '&' => ['count' => 5, 'regexp' => '&'],
        '\\' => ['count' => 6, 'regexp' => '\\\\'],
        //		'\'' => [
        //			'count' => 5,
        //			'regexp' => '\\\'',
        //		],
        '>' => ['count' => 4, 'regexp' => '>'],
        '<' => ['count' => 4, 'regexp' => '<'],
        //		',' => [
        //			'count' => 5,
        //			'regexp' => ',',
        //		],
        '!' => ['count' => 5, 'regexp' => '!'],
        '$' => ['count' => 6, 'regexp' => '$'],
    ];
    protected static function matchLength($string)
    {
    }
    /**
     * Add placeholders to the string
     *
     * @param $string
     * @param $currLength
     * @param $needLength
     * @return string
     */
    protected static function extendString($string, $currLength, $needLength)
    {
    }
    protected static function mb_str_pad($string, $padLength, $padString = " ", $padType = STR_PAD_RIGHT)
    {
    }
    /**
     * Crop string by special chars length
     *
     * @param $string
     * @param $currLength
     * @param $needLength
     * @return string
     */
    protected static function reduceString($string, $currLength, $needLength)
    {
    }
}