<?php

namespace Bitrix\Calendar\ICal\Parser;

class Line
{
    private $name;
    private $value;
    private $params = [];
    private $line;
    public static function getInstance(string $line)
    {
    }
    public function __construct(string $line)
    {
    }
    public function prepareData()
    {
    }
    public function isBegin() : bool
    {
    }
    public function isEnd() : bool
    {
    }
    public function getValue() : string
    {
    }
    public function getName() : string
    {
    }
    public function getParams() : array
    {
    }
    public function getValueAsArray() : array
    {
    }
    public function __toString()
    {
    }
    public function count()
    {
    }
    private function getValueFromString(int $valuePos) : string
    {
    }
}