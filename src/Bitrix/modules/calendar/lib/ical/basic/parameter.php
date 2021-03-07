<?php

namespace Bitrix\Calendar\ICal\Basic;

class Parameter
{
    private $name;
    private $value;
    private $disableEscaping;
    public static function getInstance(string $name, string $value, $disableEscaping = false) : \Bitrix\Calendar\ICal\Basic\Parameter
    {
    }
    public function __construct(string $name, string $value, $disableEscaping = false)
    {
    }
    public function getName() : string
    {
    }
    public function getValue() : string
    {
    }
}