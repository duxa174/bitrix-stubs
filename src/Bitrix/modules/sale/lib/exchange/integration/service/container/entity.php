<?php

namespace Bitrix\Sale\Exchange\Integration\Service\Container;

abstract class Entity
{
    protected $fields;
    public function __construct(array $values = null)
    {
    }
    public function getId()
    {
    }
    public function setId($value)
    {
    }
    public function getFieldsValues()
    {
    }
    public static abstract function createFromArray(array $fields);
}