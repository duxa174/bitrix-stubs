<?php

namespace Bitrix\Calendar\ICal\Basic;

class Content
{
    private $type;
    private $properties = [];
    private $subComponents = [];
    public static function getInstance(string $type) : \Bitrix\Calendar\ICal\Basic\Content
    {
    }
    public function __construct(string $type)
    {
    }
    public function property(\Bitrix\Calendar\ICal\Basic\PropertyType $property, array $parameters = null) : \Bitrix\Calendar\ICal\Basic\Content
    {
    }
    public function dateTimeProperty($names, \Bitrix\Main\Type\Date $value, bool $withTime = false, bool $withTimeZone = false, bool $isUTC = false) : \Bitrix\Calendar\ICal\Basic\Content
    {
    }
    public function textProperty($names, ?string $value, bool $disableEscaping = false) : \Bitrix\Calendar\ICal\Basic\Content
    {
    }
    public function timezoneOffsetProperty($names, \DateTimeZone $value) : \Bitrix\Calendar\ICal\Basic\Content
    {
    }
    public function subComponent(\Bitrix\Calendar\ICal\Basic\BasicComponent ...$components) : \Bitrix\Calendar\ICal\Basic\Content
    {
    }
    public function getType() : string
    {
    }
    public function getProperties() : array
    {
    }
    public function getSubComponents() : array
    {
    }
}