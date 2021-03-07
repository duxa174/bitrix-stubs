<?php

namespace Bitrix\UI\EntitySelector;

class PreselectedItem implements \JsonSerializable
{
    protected $id;
    protected $entityId;
    protected $item;
    public function __construct(array $options)
    {
    }
    public function getId()
    {
    }
    public function getEntityId() : string
    {
    }
    public function setItem(\Bitrix\UI\EntitySelector\Item $item)
    {
    }
    public function getItem() : ?\Bitrix\UI\EntitySelector\Item
    {
    }
    public function isLoaded()
    {
    }
    public function jsonSerialize()
    {
    }
}