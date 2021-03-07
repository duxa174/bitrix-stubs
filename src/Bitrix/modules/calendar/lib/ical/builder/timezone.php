<?php

namespace Bitrix\Calendar\ICal\Builder;

class Timezone extends \Bitrix\Calendar\ICal\Basic\BasicComponent implements \Bitrix\Calendar\ICal\Builder\BuilderComponent
{
    private $id;
    private $observances = [];
    public static function getInstance() : \Bitrix\Calendar\ICal\Builder\Timezone
    {
    }
    public function __construct()
    {
    }
    public function getType() : string
    {
    }
    public function getProperties() : array
    {
    }
    public function setTimezoneId(string $id = null) : \Bitrix\Calendar\ICal\Builder\Timezone
    {
    }
    public function setObservance(\Bitrix\Calendar\ICal\Basic\Observance $observance)
    {
    }
    /**
     * @return Content
     */
    public function setContent() : \Bitrix\Calendar\ICal\Basic\Content
    {
    }
}