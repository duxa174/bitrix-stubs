<?php

namespace Bitrix\Calendar\ICal\Basic;

abstract class BasicComponent
{
    private $attachProperties = [];
    private $attachSubComponent = [];
    public abstract function getType() : string;
    public abstract function getProperties() : array;
    public function accessContent() : \Bitrix\Calendar\ICal\Basic\Content
    {
    }
    public function toString() : string
    {
    }
    public function appendProperty(\Bitrix\Calendar\ICal\Basic\PropertyType $property) : \Bitrix\Calendar\ICal\Basic\BasicComponent
    {
    }
    public function appendSubComponent(\Bitrix\Calendar\ICal\Basic\BasicComponent $component) : \Bitrix\Calendar\ICal\Basic\BasicComponent
    {
    }
    protected function hasRequiredProperties(\Bitrix\Calendar\ICal\Basic\Content $componentLoad)
    {
    }
}