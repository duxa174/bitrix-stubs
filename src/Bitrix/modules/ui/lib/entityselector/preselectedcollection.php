<?php

namespace Bitrix\UI\EntitySelector;

class PreselectedCollection implements \IteratorAggregate, \JsonSerializable
{
    private $items = [];
    private $itemsByEntity = [];
    public function __construct()
    {
    }
    public function add(\Bitrix\UI\EntitySelector\PreselectedItem $preselectedItem)
    {
    }
    public function load(array $ids)
    {
    }
    public function get(string $entityId, $itemId) : ?\Bitrix\UI\EntitySelector\PreselectedItem
    {
    }
    public function has(\Bitrix\UI\EntitySelector\PreselectedItem $preselectedItem) : bool
    {
    }
    public function getByItem(\Bitrix\UI\EntitySelector\Item $item) : ?\Bitrix\UI\EntitySelector\PreselectedItem
    {
    }
    public function getAll()
    {
    }
    public function getItems()
    {
    }
    public function count() : int
    {
    }
    /**
     * @param string $entityId
     *
     * @return PreselectedItem[]
     *
     */
    public function getEntityItems(string $entityId) : array
    {
    }
    /**
     * @return string[]
     */
    public function getEntities()
    {
    }
    public function jsonSerialize()
    {
    }
    public function getIterator()
    {
    }
}