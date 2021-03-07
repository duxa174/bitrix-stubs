<?php

namespace Bitrix\UI\EntitySelector;

class Entity implements \JsonSerializable
{
    protected $id;
    protected $options = [];
    protected $searchable = true;
    protected $dynamicLoad = false;
    protected $dynamicSearch = false;
    protected $provider;
    public function __construct(array $options)
    {
    }
    public static function create(array $entityOptions) : ?\Bitrix\UI\EntitySelector\Entity
    {
    }
    public function getId()
    {
    }
    public function getOptions()
    {
    }
    public function getProvider() : \Bitrix\UI\EntitySelector\BaseProvider
    {
    }
    public function setProvider(\Bitrix\UI\EntitySelector\BaseProvider $provider)
    {
    }
    public function isSearchable()
    {
    }
    public function setSearchable(bool $flag = true)
    {
    }
    public function hasDynamicSearch()
    {
    }
    public function setDynamicSearch(bool $flag = true)
    {
    }
    public function hasDynamicLoad()
    {
    }
    public function setDynamicLoad(bool $flag = true)
    {
    }
    public function jsonSerialize()
    {
    }
}