<?php

namespace Bitrix\Sale\Exchange\Integration\Service\Internal\Entity;

abstract class Base
{
    protected $fields;
    protected $relation;
    protected $client;
    public function __construct(array $values = null)
    {
    }
    abstract function getType();
    public function setOwnerTypeId($value)
    {
    }
    public function getOwnerTypeId()
    {
    }
    public function setOwnerId($value)
    {
    }
    public function getOwnerId()
    {
    }
    public function setOriginatorId($value)
    {
    }
    public function setOriginId($value)
    {
    }
    public function getFieldsValues()
    {
    }
    public function setRelation(\Bitrix\Sale\Exchange\Integration\Relation\Relation $relation)
    {
    }
    /**
     * @return Integration\Relation\Relation
     */
    public function getRelation()
    {
    }
    public function hasRelation()
    {
    }
}