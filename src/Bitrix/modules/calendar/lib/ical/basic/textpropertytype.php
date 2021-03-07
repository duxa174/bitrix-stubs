<?php

namespace Bitrix\Calendar\ICal\Basic;

class TextPropertyType extends \Bitrix\Calendar\ICal\Basic\PropertyType
{
    private $text;
    private $disableEscaping;
    public static function getInstance($names, string $text, $disableEscaping = false) : \Bitrix\Calendar\ICal\Basic\TextPropertyType
    {
    }
    public function __construct($names, string $text, $disableEscaping = false)
    {
    }
    public function getValue() : string
    {
    }
    public function getOriginalValue() : string
    {
    }
}