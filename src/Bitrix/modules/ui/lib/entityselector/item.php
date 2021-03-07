<?php

namespace Bitrix\UI\EntitySelector;

class Item implements \JsonSerializable
{
    protected $id = '';
    protected $entityId = '';
    protected $entityType;
    protected $tabs = [];
    protected $title = '';
    protected $subtitle;
    protected $supertitle;
    protected $caption;
    protected $avatar;
    protected $link;
    protected $linkTitle;
    protected $badges;
    protected $searchable = true;
    protected $saveable = true;
    protected $deselectable = true;
    protected $hidden = false;
    protected $children;
    protected $nodeOptions;
    protected $tagOptions;
    protected $customData;
    protected $sort;
    protected $contextSort;
    protected $globalSort;
    protected $dialog;
    protected $availableInRecentTab = true;
    public function __construct(array $options)
    {
    }
    public function getId()
    {
    }
    public function getEntityId() : string
    {
    }
    public function getEntityType() : ?string
    {
    }
    public function setEntityType(string $type) : self
    {
    }
    public function getTitle() : string
    {
    }
    public function setTitle(string $title) : self
    {
    }
    public function getSubtitle() : ?string
    {
    }
    public function setSubtitle(?string $subtitle) : self
    {
    }
    public function getSupertitle() : ?string
    {
    }
    public function setSupertitle(?string $supertitle) : self
    {
    }
    public function getCaption() : ?string
    {
    }
    public function setCaption(?string $caption) : self
    {
    }
    public function getAvatar() : ?string
    {
    }
    public function setAvatar(?string $avatar) : self
    {
    }
    public function getLink() : ?string
    {
    }
    public function setLink(?string $link) : self
    {
    }
    public function getLinkTitle() : ?string
    {
    }
    public function setLinkTitle(?string $linkTitle) : self
    {
    }
    public function getBadges() : ?array
    {
    }
    public function addBadges(array $badges) : self
    {
    }
    public function setBadges(array $badges) : self
    {
    }
    public function getTabs() : array
    {
    }
    public function addTab($tabId) : self
    {
    }
    public function getChildren() : \Bitrix\UI\EntitySelector\ItemCollection
    {
    }
    public function addChildren(array $children)
    {
    }
    public function addChild(\Bitrix\UI\EntitySelector\Item $item)
    {
    }
    public function setNodeOptions(array $nodeOptions)
    {
    }
    public function getNodeOptions()
    {
    }
    public function setTagOptions(array $nodeOptions)
    {
    }
    public function getTagOptions()
    {
    }
    public function isSearchable() : bool
    {
    }
    public function setSearchable(bool $flag = true) : self
    {
    }
    public function isSaveable() : bool
    {
    }
    public function setSaveable(bool $flag = true) : self
    {
    }
    public function isDeselectable() : bool
    {
    }
    public function setDeselectable(bool $flag = true) : self
    {
    }
    public function isHidden() : bool
    {
    }
    public function setHidden(bool $flag = true) : self
    {
    }
    public function isAvailableInRecentTab() : bool
    {
    }
    public function setAvailableInRecentTab(bool $flag = true) : self
    {
    }
    public function setCustomData(array $customData)
    {
    }
    /**
     * @return Dictionary
     */
    public function getCustomData() : \Bitrix\Main\Type\Dictionary
    {
    }
    public function setSort(?int $sort)
    {
    }
    public function getSort() : ?int
    {
    }
    public function setContextSort(?int $sort)
    {
    }
    public function getContextSort() : ?int
    {
    }
    public function setGlobalSort(?int $sort)
    {
    }
    public function getGlobalSort() : ?int
    {
    }
    public function setDialog(\Bitrix\UI\EntitySelector\Dialog $dialog)
    {
    }
    public function getDialog() : ?\Bitrix\UI\EntitySelector\Dialog
    {
    }
    public function jsonSerialize()
    {
    }
}