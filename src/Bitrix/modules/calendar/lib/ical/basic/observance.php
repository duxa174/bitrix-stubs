<?php

namespace Bitrix\Calendar\ICal\Basic;

abstract class Observance extends \Bitrix\Calendar\ICal\Basic\BasicComponent
{
    protected $start;
    protected $offsetFrom;
    protected $offsetTo;
    protected $timezone;
    public static function getInstance() : \Bitrix\Calendar\ICal\Basic\Observance
    {
    }
    public function getProperties() : array
    {
    }
    public function setDTStart($start = null) : \Bitrix\Calendar\ICal\Basic\Observance
    {
    }
    public function setOffsetFrom($tz) : \Bitrix\Calendar\ICal\Basic\Observance
    {
    }
    public function setOffsetFromValue(string $value) : \Bitrix\Calendar\ICal\Basic\Observance
    {
    }
    public function setOffsetTo($tz) : \Bitrix\Calendar\ICal\Basic\Observance
    {
    }
    public function setOffsetToValue(string $value) : \Bitrix\Calendar\ICal\Basic\Observance
    {
    }
    public function setAbbrTimezone($tz) : \Bitrix\Calendar\ICal\Basic\Observance
    {
    }
    public function setTimezoneFromAbbr(?string $abbr) : \Bitrix\Calendar\ICal\Basic\Observance
    {
    }
    public function setContent() : \Bitrix\Calendar\ICal\Basic\Content
    {
    }
}