<?php

namespace Bitrix\Calendar\ICal\Basic;

abstract class PropertyType
{
    protected $names;
    protected $parameters = [];
    public abstract function getValue() : string;
    public abstract function getOriginalValue();
    public function __construct($names)
    {
    }
    public function getNames() : array
    {
    }
    public function getParameters() : array
    {
    }
    public function getParameter(string $name) : \Bitrix\Calendar\ICal\Basic\Parameter
    {
    }
    public function addParameters(array $parameters) : \Bitrix\Calendar\ICal\Basic\PropertyType
    {
    }
    public function addParameter(\Bitrix\Calendar\ICal\Basic\Parameter $parameter) : \Bitrix\Calendar\ICal\Basic\PropertyType
    {
    }
}