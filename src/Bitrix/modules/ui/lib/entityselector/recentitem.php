<?php

namespace Bitrix\UI\EntitySelector;

class RecentItem implements \JsonSerializable
{
    protected $id;
    protected $entityId;
    protected $lastUseDate;
    protected $loaded = false;
    protected $available = true;
    public function __construct(array $options)
    {
    }
    public function getId()
    {
    }
    public function getEntityId() : string
    {
    }
    public function getLastUseDate()
    {
    }
    public function setLastUseDate(int $lastUseDate)
    {
    }
    public function isLoaded()
    {
    }
    public function setLoaded(bool $flag)
    {
    }
    public function isAvailable()
    {
    }
    public function setAvailable(bool $flag)
    {
    }
    public function jsonSerialize()
    {
    }
}