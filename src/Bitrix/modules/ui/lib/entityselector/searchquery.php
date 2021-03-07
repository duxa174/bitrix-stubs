<?php

namespace Bitrix\UI\EntitySelector;

class SearchQuery implements \JsonSerializable
{
    protected $queryWords = [];
    protected $query = '';
    protected $cacheable = true;
    protected $dynamicSearchEntities = [];
    public function __construct(array $options)
    {
    }
    public function getQueryWords()
    {
    }
    public function getQuery()
    {
    }
    protected function setQueryWords(array $queryWords)
    {
    }
    public function isCacheable()
    {
    }
    public function setDynamicSearchEntities(array $entities) : void
    {
    }
    public function hasDynamicSearchEntity(string $entityId) : bool
    {
    }
    public function setCacheable(bool $flag = true)
    {
    }
    public function jsonSerialize()
    {
    }
}