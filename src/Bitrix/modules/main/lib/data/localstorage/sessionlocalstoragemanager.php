<?php

namespace Bitrix\Main\Data\LocalStorage;

final class SessionLocalStorageManager
{
    /** @var SessionLocalStorage[]  */
    private $collection = [];
    /** @var string */
    private $uniqueId;
    /** @var Storage\StorageInterface */
    private $storage;
    /** @var int */
    private $ttl = 86400;
    public function __construct(\Bitrix\Main\Data\LocalStorage\Storage\StorageInterface $storage)
    {
    }
    public function save()
    {
    }
    public function getUniqueId() : string
    {
    }
    public function setUniqueId($uniqueId)
    {
    }
    public function getTtl() : int
    {
    }
    public function setTtl(int $ttl) : self
    {
    }
    public function get(string $name) : \Bitrix\Main\Data\LocalStorage\SessionLocalStorage
    {
    }
    public function exists(string $name) : bool
    {
    }
    public function clear(string $name) : void
    {
    }
    protected function buildUniqueKey(string $name) : string
    {
    }
}