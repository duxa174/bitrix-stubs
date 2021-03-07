<?php

namespace Bitrix\Main;

class Event
{
    protected $moduleId;
    protected $type;
    protected $parameters = array();
    /** @var callable */
    protected $parametersLoader = null;
    protected $filter = null;
    protected $sender = null;
    protected $debugMode = false;
    protected $debugInfo = array();
    /** @var EventResult[] */
    protected $results = array();
    /** @var \Exception[] */
    protected $exceptions = array();
    /**
     * @param $moduleId
     * @param $type
     * @param array $parameters
     * @param null|string|string[] $filter Filter of module names, mail event names and component names of the event handlers
     */
    public function __construct($moduleId, $type, $parameters = array(), $filter = null)
    {
    }
    public function getModuleId()
    {
    }
    public function getEventType()
    {
    }
    public function setParameters($parameters)
    {
    }
    public function getParameters()
    {
    }
    public function setParameter($key, $value)
    {
    }
    public function getParameter($key)
    {
    }
    protected function loadParameters()
    {
    }
    public function setFilter($filter)
    {
    }
    public function getFilter()
    {
    }
    /**
     * @return EventResult[]
     */
    public function getResults()
    {
    }
    public function addResult(\Bitrix\Main\EventResult $result)
    {
    }
    public function getSender()
    {
    }
    public function send($sender = null)
    {
    }
    public function addException(\Exception $exception)
    {
    }
    public function getExceptions()
    {
    }
    public function turnDebugOn()
    {
    }
    public function isDebugOn()
    {
    }
    public function addDebugInfo($ar)
    {
    }
    public function getDebugInfo()
    {
    }
}