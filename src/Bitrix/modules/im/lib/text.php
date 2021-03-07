<?php

namespace Bitrix\Im;

class Text
{
    private static $replacements = array();
    private static $parsers = array();
    public static function parse($text, $params = array())
    {
    }
    /**
     * @param $text
     * @return \Bitrix\Main\Text\DateConverterResult[]
     */
    public static function getDateConverterParams($text)
    {
    }
    public static function isOnlyEmoji($text)
    {
    }
    public static function setReplacement($match)
    {
    }
    public static function recoverReplacements($text)
    {
    }
    public static function modifyShortUserTag($matches)
    {
    }
    public static function removeBbCodes($text, $withFile = false, $withAttach = false)
    {
    }
    public static function encodeEmoji($text)
    {
    }
    public static function decodeEmoji($text)
    {
    }
}