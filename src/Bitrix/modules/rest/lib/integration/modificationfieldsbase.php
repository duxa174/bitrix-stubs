<?php

namespace Bitrix\Rest\Integration;

class ModificationFieldsBase
{
    const TO_WHITE_LIST = 0x10;
    const TO_CAMEL = 0x20;
    const TO_SNAKE = 0x30;
    const SORTING_KEYS = 0x40;
    const CHECK_REQUIRED = 0x50;
    protected $data;
    protected $name;
    protected $format;
    protected $manager;
    protected $arguments;
    protected $controller;
    public function __construct(\Bitrix\Rest\Integration\ViewManager $manager, $data = [])
    {
    }
    /**
     * @return ViewManager
     */
    public function getManager()
    {
    }
    public function getName()
    {
    }
    public function getArguments()
    {
    }
    public function setArguments($arguments)
    {
    }
    public function getController()
    {
    }
    public function getData()
    {
    }
    protected function getView(\Bitrix\Main\Engine\Controller $controller)
    {
    }
}