<?php

namespace Bitrix\Sale\Rest;

class ModificationFieldsBase
{
    const TO_WHITE_LIST = 0x10;
    const TO_CAMEL = 0x20;
    const TO_SNAKE = 0x30;
    const SORTING_KEYS = 0x40;
    const CHECK_REQUIRED = 0x50;
    protected $format;
    protected $data;
    protected $scope;
    public static function buildByAction(\Bitrix\Main\Engine\Action $action, $data = [], $scope = '')
    {
    }
    public function __construct($name, $arguments, $controller, $data = [], $scope = '')
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
    public function getScope()
    {
    }
    public function getData()
    {
    }
    /**
     * @param Controller $controller
     * @return Entity\BasketItem|Entity\Order|Entity\Payment|Entity\PersonType|Entity\Property|Entity\PropertyGroup|null
     * @throws RestException
     */
    protected function getEntity(\Bitrix\Main\Engine\Controller $controller)
    {
    }
}