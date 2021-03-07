<?php

namespace Bitrix\Sale\Delivery\Services;

/**
 * Class ObjectPool
 * @package Bitrix\Sale\Delivery\Services
 * @internal
 */
final class ObjectPool
{
    protected $usage = array();
    /** @var Base[] $objects */
    protected $objects = array();
    protected $maxObjectsCount = 0;
    public function __construct($maxObjectsCount = 0)
    {
    }
    public function getObject(array $fields)
    {
    }
    protected function createObject($index, array $fields)
    {
    }
    protected function deleteOutdatedObject()
    {
    }
    protected function createIndex(array $fields)
    {
    }
}