<?php

namespace Bitrix\Main;

class EventResult
{
    const UNDEFINED = 0;
    const SUCCESS = 1;
    const ERROR = 2;
    protected $moduleId;
    protected $handler;
    protected $type;
    protected $parameters;
    public function __construct($type, $parameters = null, $moduleId = null, $handler = null)
    {
    }
    /** @deprecated Use getType() */
    public function getResultType()
    {
    }
    public function getType()
    {
    }
    public function getModuleId()
    {
    }
    public function getHandler()
    {
    }
    public function getParameters()
    {
    }
}