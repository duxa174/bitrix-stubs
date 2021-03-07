<?php

namespace Bitrix\Calendar\ICal\Parser;

class Timezone extends \Bitrix\Calendar\ICal\Basic\BasicComponent implements \Bitrix\Calendar\ICal\Parser\ParserComponent
{
    private $tzid;
    private $tzurl;
    /**
     * @var array
     */
    private $standard;
    /**
     * @var array
     */
    private $daylight;
    public static function getInstance() : \Bitrix\Calendar\ICal\Parser\Timezone
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
    public function setTimezoneId($value) : \Bitrix\Calendar\ICal\Parser\Timezone
    {
    }
    public function setTimezoneUrl($value)
    {
    }
    public function setSubComponents(array $subComponents)
    {
    }
    protected function setContent() : \Bitrix\Calendar\ICal\Basic\Content
    {
    }
    public function getContent()
    {
    }
}