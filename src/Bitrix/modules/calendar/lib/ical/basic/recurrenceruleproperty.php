<?php

namespace Bitrix\Calendar\ICal\Basic;

class RecurrenceRuleProperty
{
    public $count;
    public $until;
    public $interval;
    public $freq;
    public $day;
    public $exdate;
    public $rdate;
    public function __construct($params = [])
    {
    }
}