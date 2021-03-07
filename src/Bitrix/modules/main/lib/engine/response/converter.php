<?php

namespace Bitrix\Main\Engine\Response;

final class Converter
{
    const TO_SNAKE = 0x1;
    const TO_CAMEL = 0x2;
    const TO_SNAKE_DIGIT = 0x4;
    const TO_UPPER = 0x10;
    const TO_LOWER = 0x20;
    const LC_FIRST = 0x100;
    const UC_FIRST = 0x200;
    const KEYS = 0x1000;
    const VALUES = 0x2000;
    const RECURSIVE = 0x4000;
    const OUTPUT_JSON_FORMAT = self::KEYS | self::RECURSIVE | self::TO_CAMEL | self::LC_FIRST;
    private $format;
    public function __construct($format)
    {
    }
    public static function toJson()
    {
    }
    public function process($data)
    {
    }
    protected function formatArray(array $array)
    {
    }
    protected function formatString($string)
    {
    }
    public function getFormat()
    {
    }
    public function setFormat($format)
    {
    }
}