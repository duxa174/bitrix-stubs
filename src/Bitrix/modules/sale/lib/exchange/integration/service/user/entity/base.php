<?php

namespace Bitrix\Sale\Exchange\Integration\Service\User\Entity;

abstract class Base
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
    public abstract function getType();
    protected static abstract function resolveFields(array $list);
    public static abstract function createFromArray(array $fields);
    public function load(\Bitrix\Sale\Order $order)
    {
    }
    public static function resolveNamePersonDomain($personTypeId)
    {
    }
    protected static function businessValuePersonDomainList()
    {
    }
}