<?php

namespace Bitrix\UI\EntitySelector;

abstract class BaseProvider
{
    protected $options = [];
    protected function __construct()
    {
    }
    public abstract function isAvailable() : bool;
    /**
     * @param array $ids
     *
     * @return Item[]
     */
    public abstract function getItems(array $ids) : array;
    /**
     * @param array $ids
     *
     * @return Item[]
     */
    public abstract function getSelectedItems(array $ids) : array;
    public function getOptions() : array
    {
    }
    public function fillDialog(\Bitrix\UI\EntitySelector\Dialog $dialog) : void
    {
    }
    public function getChildren(\Bitrix\UI\EntitySelector\Item $parentItem, \Bitrix\UI\EntitySelector\Dialog $dialog) : void
    {
    }
    public function doSearch(\Bitrix\UI\EntitySelector\SearchQuery $searchQuery, \Bitrix\UI\EntitySelector\Dialog $dialog) : void
    {
    }
    public function handleBeforeItemSave(\Bitrix\UI\EntitySelector\Item $item) : void
    {
    }
}