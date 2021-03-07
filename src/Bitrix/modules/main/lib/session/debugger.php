<?php

namespace Bitrix\Main\Session;

final class Debugger
{
    public const TO_FILE = 0b1;
    public const TO_HEADER = 0b10;
    public const TO_ALL = self::TO_FILE | self::TO_HEADER;
    protected $mode = 0;
    /** @var array */
    private $config = [];
    public function __construct(int $mode = 0)
    {
    }
    public function setMode(int $mode) : void
    {
    }
    public function logConfiguration(array $config) : void
    {
    }
    public function detectFirstUsage() : void
    {
    }
    public function logToFile($text)
    {
    }
    protected function addHeader(string $category, $value) : void
    {
    }
    public function storeConfig(array $sessionConfig) : void
    {
    }
}