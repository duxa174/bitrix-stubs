<?php

namespace Bitrix\UI\EntitySelector;

class Dialog implements \JsonSerializable
{
    protected $id;
    /** @var ItemCollection */
    protected $itemCollection;
    /** @var Tab[] */
    protected $tabs = [];
    /** @var array<string, Entity> */
    protected $entities = [];
    /** @var RecentCollection */
    protected $recentItems;
    /** @var RecentCollection */
    protected $globalRecentItems;
    /** @var PreselectedCollection */
    protected $preselectedItems;
    /** @var string */
    protected $context;
    /** @var string */
    protected $footer;
    /** @var array */
    protected $footerOptions;
    /** @var boolean */
    protected $clearUnavailableItems = false;
    public function __construct(array $options)
    {
    }
    public function getId() : ?string
    {
    }
    public function getContext() : ?string
    {
    }
    public function getItemCollection() : \Bitrix\UI\EntitySelector\ItemCollection
    {
    }
    public function getCurrentUserId() : int
    {
    }
    public function addEntity(\Bitrix\UI\EntitySelector\Entity $entity)
    {
    }
    public function addItem(\Bitrix\UI\EntitySelector\Item $item)
    {
    }
    public function addItems(array $items)
    {
    }
    public function addRecentItem(\Bitrix\UI\EntitySelector\Item $item)
    {
    }
    public function addRecentItems(array $items)
    {
    }
    public function setFooter(string $footer, array $options = [])
    {
    }
    public function getFooter() : ?string
    {
    }
    public function getFooterOptions() : ?array
    {
    }
    public function handleItemAdd(\Bitrix\UI\EntitySelector\Item $item)
    {
    }
    public function getRecentItems() : \Bitrix\UI\EntitySelector\RecentCollection
    {
    }
    public function getGlobalRecentItems() : \Bitrix\UI\EntitySelector\RecentCollection
    {
    }
    public function addTab(\Bitrix\UI\EntitySelector\Tab $tab)
    {
    }
    /**
     * @return Entity[]
     */
    public function getEntities()
    {
    }
    /**
     * @param string $entityId
     *
     * @return Entity
     */
    public function getEntity(string $entityId) : ?\Bitrix\UI\EntitySelector\Entity
    {
    }
    /**
     * @return Tab[]
     */
    public function getTabs()
    {
    }
    public function load() : void
    {
    }
    public function doSearch(\Bitrix\UI\EntitySelector\SearchQuery $searchQuery)
    {
    }
    public function getChildren(\Bitrix\UI\EntitySelector\Item $parentItem)
    {
    }
    public function setPreselectedItems(array $preselectedItems)
    {
    }
    public function getPreselectedItems() : \Bitrix\UI\EntitySelector\PreselectedCollection
    {
    }
    public function loadPreselectedItems()
    {
    }
    public function shouldClearUnavailableItems() : bool
    {
    }
    public static function createHiddenItem($id, $entityId) : \Bitrix\UI\EntitySelector\Item
    {
    }
    public static function getSelectedItems(array $ids, array $options = []) : \Bitrix\UI\EntitySelector\ItemCollection
    {
    }
    public static function getItems(array $ids, array $options = [])
    {
    }
    public function saveRecentItems(array $recentItems)
    {
    }
    private function fillRecentItems(array $entities)
    {
    }
    private function fillGlobalRecentItems(array $entities)
    {
    }
    private function getContextUsages(array $entities)
    {
    }
    private function getGlobalUsages(array $entities, int $limit = 200)
    {
    }
    private function loadRecentItems()
    {
    }
    public function jsonSerialize()
    {
    }
}