<?php

namespace Bitrix\Sale\Exchange\Integration\Service\Container;

class Item
{
    protected $internalIndex;
    protected $entity;
    protected $error;
    protected $hasError;
    public function __construct(\Bitrix\Sale\Exchange\Integration\Service\Container\Entity $entity)
    {
    }
    public static function create(\Bitrix\Sale\Exchange\Integration\Service\Container\Entity $entity)
    {
    }
    public function setInternalIndex($internalIndex)
    {
    }
    public function getInternalIndex()
    {
    }
    public function getEntity()
    {
    }
    /**
     * @return Error
     */
    public function getError()
    {
    }
    public function setError(\Bitrix\Main\Error $error)
    {
    }
    public function hasError()
    {
    }
}