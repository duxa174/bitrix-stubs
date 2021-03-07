<?php

namespace Bitrix\Calendar\ICal\Basic;

class RecurrenceRulePropertyType extends \Bitrix\Calendar\ICal\Basic\PropertyType
{
    private $rrule;
    public static function getInstance($names, \Bitrix\Calendar\ICal\Basic\RecurrenceRuleProperty $rrule) : \Bitrix\Calendar\ICal\Basic\RecurrenceRulePropertyType
    {
    }
    public function __construct($names, \Bitrix\Calendar\ICal\Basic\RecurrenceRuleProperty $rrule)
    {
    }
    public function getValue() : string
    {
    }
    public function getOriginalValue() : \Bitrix\Calendar\ICal\Basic\RecurrenceRuleProperty
    {
    }
}