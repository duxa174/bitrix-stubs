<?php

namespace Bitrix\Main\Text;

abstract class Converter
{
    const TEXT = "text";
    const HTML = "html";
    private static $htmlConverter;
    private static $xmlConverter;
    private static $emptyConverter;
    public static function getHtmlConverter()
    {
    }
    public static function getXmlConverter()
    {
    }
    public static function getEmptyConverter()
    {
    }
    public static function initTextType($textType)
    {
    }
    public abstract function encode($text, $textType = "");
    public abstract function decode($text, $textType = "");
}