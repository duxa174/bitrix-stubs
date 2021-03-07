<?php

namespace Bitrix\UI\EntitySelector;

class ItemCollection implements \IteratorAggregate, \JsonSerializable
{
    private $items = [];
    private $itemsByEntity = [];
    public function __construct()
    {
    }
    public function add(\Bitrix\UI\EntitySelector\Item $item)
    {
    }
    public function get(string $entityId, $itemId) : ?\Bitrix\UI\EntitySelector\Item
    {
    }
    public function has(\Bitrix\UI\EntitySelector\Item $item) : bool
    {
    }
    public function getAll()
    {
    }
    public function count() : int
    {
    }
    public function getEntityItems(string $entityId) : array
    {
    }
    public function toJsObject()
    {
    }
    public function jsonSerialize()
    {
    }
    public function getIterator()
    {
    }
}