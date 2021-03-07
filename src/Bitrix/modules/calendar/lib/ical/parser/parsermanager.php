<?php

namespace Bitrix\Calendar\ICal\Parser;

class ParserManager
{
    /**
     * @var array
     */
    private $data;
    /**
     * @var array
     */
    private $timezones;
    /**
     * @var array
     */
    private $events = [];
    /**
     * @var array
     */
    private $components = [];
    /**
     * @var string
     */
    private $method = '';
    public static function getInstance(string $data) : \Bitrix\Calendar\ICal\Parser\ParserManager
    {
    }
    public function __construct(string $data = '')
    {
    }
    public function parseData() : \Bitrix\Calendar\ICal\Parser\ParserManager
    {
    }
    public function handleComponents() : \Bitrix\Calendar\ICal\Parser\ParserManager
    {
    }
    public function getComponents() : array
    {
    }
    public function getEvents()
    {
    }
    public function getProcessedEvents()
    {
    }
    public function getMethod()
    {
    }
}