<?php

namespace Bitrix\Bizproc\BaseType\Value;

class Date
{
    protected $timestamp;
    protected $offset;
    const SERIALIZED_PATTERN = '#(.+)\\s\\[([0-9\\-]+)\\]#i';
    public function __construct($dateFormatted = null, $offset = 0)
    {
    }
    public function getTimestamp()
    {
    }
    public function getOffset()
    {
    }
    public function __toString()
    {
    }
    public function toSystemObject()
    {
    }
    public function serialize()
    {
    }
    public static function isSerialized($dateString)
    {
    }
    public function getFormat()
    {
    }
    protected function checkYear(\Bitrix\Main\Type\Date $date)
    {
    }
}