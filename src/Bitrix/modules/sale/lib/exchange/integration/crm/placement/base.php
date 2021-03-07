<?php

namespace Bitrix\Sale\Exchange\Integration\CRM\Placement;

abstract class Base
{
    protected $fields;
    public function __construct($fields)
    {
    }
    public abstract function getType();
    public abstract function getEntityId();
    public abstract function getEntityTypeId();
    public function getModeType()
    {
    }
}