<?php

namespace Bitrix\Calendar\ICal\Builder;

class Calendar extends \Bitrix\Calendar\ICal\Basic\BasicComponent implements \Bitrix\Calendar\ICal\Builder\BuilderComponent
{
    private $events = [];
    private $timezones = [];
    private $name;
    private $description;
    private $withTimezone = false;
    private $refreshInterval;
    private $productIdentifier;
    private $method;
    public static function getInstance(string $name = null) : \Bitrix\Calendar\ICal\Builder\Calendar
    {
    }
    public function __construct(string $name = null)
    {
    }
    public function getType() : string
    {
    }
    public function getProperties() : array
    {
    }
    public function setMethod($method) : \Bitrix\Calendar\ICal\Builder\Calendar
    {
    }
    public function setName(string $name) : \Bitrix\Calendar\ICal\Builder\Calendar
    {
    }
    public function setDescription(string $description) : \Bitrix\Calendar\ICal\Builder\Calendar
    {
    }
    public function setIdentifier(string $identifier) : \Bitrix\Calendar\ICal\Builder\Calendar
    {
    }
    public function setEvent($event) : \Bitrix\Calendar\ICal\Builder\Calendar
    {
    }
    public function setTimezones($timezone) : \Bitrix\Calendar\ICal\Builder\Calendar
    {
    }
    public function setWithTimezone() : \Bitrix\Calendar\ICal\Builder\Calendar
    {
    }
    public function refreshInterval(int $min) : \Bitrix\Calendar\ICal\Builder\Calendar
    {
    }
    public function get() : string
    {
    }
    public function setContent() : \Bitrix\Calendar\ICal\Basic\Content
    {
    }
}