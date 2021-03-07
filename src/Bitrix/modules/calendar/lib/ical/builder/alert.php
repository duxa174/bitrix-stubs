<?php

namespace Bitrix\Calendar\ICal\Builder;

class Alert
{
    private const TRIGGER_START = 'trigger_start';
    private const TRIGGER_END = 'trigger_end';
    private const TRIGGER_DATE = 'trigger_date';
    private $triggerDate;
    private $triggerInterval;
    private $triggerMode = self::TRIGGER_DATE;
    private $message;
    public static function date(\Bitrix\Main\Type\Date $date, string $description = null) : \Bitrix\Calendar\ICal\Builder\Alert
    {
    }
    public static function minutesBeforeStart(int $minutes, string $description = null) : \Bitrix\Calendar\ICal\Builder\Alert
    {
    }
    public static function minutesAfterStart(int $min, string $description = null) : \Bitrix\Calendar\ICal\Builder\Alert
    {
    }
    public static function minutesBeforeEnd(int $min, string $description = null) : \Bitrix\Calendar\ICal\Builder\Alert
    {
    }
    public static function minutesAfterEnd(int $min, string $description = null) : \Bitrix\Calendar\ICal\Builder\Alert
    {
    }
    private static function getInstance(array $reminds = [], $description = '') : \Bitrix\Calendar\ICal\Builder\Alert
    {
    }
    public function __construct(array $reminds = [], $description = '')
    {
    }
    public function getType() : string
    {
    }
    public function getRequiredProperties() : array
    {
    }
    public function message(string $message) : \Bitrix\Calendar\ICal\Builder\Alert
    {
    }
    public function triggerDate(\Bitrix\Main\Type\Date $triggerAt) : \Bitrix\Calendar\ICal\Builder\Alert
    {
    }
    public function triggerAtStart(\DateInterval $interval) : \Bitrix\Calendar\ICal\Builder\Alert
    {
    }
    public function triggerAtEnd(\DateInterval $interval) : \Bitrix\Calendar\ICal\Builder\Alert
    {
    }
    protected function setContent() : \Bitrix\Calendar\ICal\Builder\Content
    {
    }
    private function resolveTriggerProperty()
    {
    }
}