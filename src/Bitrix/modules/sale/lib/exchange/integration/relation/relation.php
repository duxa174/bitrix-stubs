<?php

namespace Bitrix\Sale\Exchange\Integration\Relation;

class Relation
{
    protected $sourceEntityTypeId = 0;
    protected $sourceEntityId = 0;
    protected $destinationEntityTypeId = 0;
    protected $destinationEntityId = 0;
    public function __construct($sourceEntityTypeId, $sourceEntityId, $destinationEntityTypeId, $destinationEntityId)
    {
    }
    public function save()
    {
    }
    public static function getBySourceEntity($entityTypeId, $entityId)
    {
    }
    public static function getByEntity($sourceEntityTypeId, $sourceEntityId, $destinationEntityTypeId, $destinationEntityId = '')
    {
    }
    public static function createFromArray(array $data)
    {
    }
    public function getSourceEntityTypeId()
    {
    }
    public function getSourceEntityId()
    {
    }
    public function getDestinationEntityTypeId()
    {
    }
    public function getDestinationEntityId()
    {
    }
    public function setDestinationEntityId($entityId)
    {
    }
}