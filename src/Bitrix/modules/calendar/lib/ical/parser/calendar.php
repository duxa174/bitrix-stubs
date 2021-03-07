<?php

namespace Bitrix\Calendar\ICal\Parser;

class Calendar extends \Bitrix\Calendar\ICal\Basic\BasicComponent implements \Bitrix\Calendar\ICal\Parser\ParserComponent
{
    private $events = [];
    private $timezones = [];
    private $name;
    private $description;
    private $withTimezone = false;
    private $refreshInterval;
    private $productIdentifier;
    private $method;
    private $version;
    private $calScale;
    public static function getInstance(string $name = '') : \Bitrix\Calendar\ICal\Parser\Calendar
    {
    }
    public function __construct($name)
    {
    }
    public function getType() : string
    {
    }
    public function getProperties() : array
    {
    }
    public function setMethod($method) : \Bitrix\Calendar\ICal\Parser\Calendar
    {
    }
    public function setProdId($prodId) : \Bitrix\Calendar\ICal\Parser\Calendar
    {
    }
    public function setCalScale($calscale) : \Bitrix\Calendar\ICal\Parser\Calendar
    {
    }
    public function setVersion($version) : \Bitrix\Calendar\ICal\Parser\Calendar
    {
    }
    public function setSubComponents(array $subComponents) : \Bitrix\Calendar\ICal\Parser\Calendar
    {
    }
    public function handleEvents()
    {
    }
    public function handleTimezones()
    {
    }
    public function getContent() : array
    {
    }
    public function getEvents() : array
    {
    }
    public function getProdId() : string
    {
    }
    public function getVersion() : string
    {
    }
    public function getTimezones() : array
    {
    }
    public function getMethod() : string
    {
    }
    private function getCalScale()
    {
    }
}