<?php

namespace Bitrix\UI\EntitySelector;

class RecentCollection implements \IteratorAggregate, \JsonSerializable
{
    private $items = [];
    private $itemsByEntity = [];
    public function __construct()
    {
    }
    public function add(\Bitrix\UI\EntitySelector\RecentItem $recentItem)
    {
    }
    public function get(string $entityId, $itemId) : ?\Bitrix\UI\EntitySelector\RecentItem
    {
    }
    public function has(\Bitrix\UI\EntitySelector\RecentItem $recentItem) : bool
    {
    }
    public function getByItem(\Bitrix\UI\EntitySelector\Item $item) : ?\Bitrix\UI\EntitySelector\RecentItem
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
    public function jsonSerialize()
    {
    }
    public function getIterator()
    {
    }
}