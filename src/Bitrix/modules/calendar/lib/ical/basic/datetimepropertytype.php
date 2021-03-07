<?php

namespace Bitrix\Calendar\ICal\Basic;

class DatetimePropertyType extends \Bitrix\Calendar\ICal\Basic\PropertyType
{
    private $dateTime;
    private $withTime;
    private $withTimezone;
    private $isUTC;
    public static function getInstance($names, \Bitrix\Main\Type\Date $dateTime, bool $withTime = false, bool $withTimezone = false, bool $isUTC = false) : \Bitrix\Calendar\ICal\Basic\DateTimePropertyType
    {
    }
    public function __construct($names, \Bitrix\Main\Type\Date $dateTime, bool $withTime = false, bool $withTimezone = false, bool $isUTC = false)
    {
    }
    public function getValue() : string
    {
    }
    public function getOriginalValue() : \Bitrix\Main\Type\Date
    {
    }
}