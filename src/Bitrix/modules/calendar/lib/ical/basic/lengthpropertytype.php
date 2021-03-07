<?php

namespace Bitrix\Calendar\ICal\Basic;

class LengthPropertyType extends \Bitrix\Calendar\ICal\Basic\PropertyType
{
    private $interval;
    public static function getInstance($names, \DateInterval $interval) : \Bitrix\Calendar\ICal\Basic\LengthPropertyType
    {
    }
    public function invert() : \Bitrix\Calendar\ICal\Basic\LengthPropertyType
    {
    }
    /**
     * DurationPropertyType constructor.
     *
     * @param array|string $names
     * @param \DateInterval $interval
     */
    public function __construct($names, \DateInterval $interval)
    {
    }
    public function getValue() : string
    {
    }
    public function getOriginalValue() : \DateInterval
    {
    }
}