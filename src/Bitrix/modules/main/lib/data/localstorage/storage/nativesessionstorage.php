<?php

namespace Bitrix\Main\Data\LocalStorage\Storage;

class NativeSessionStorage implements \Bitrix\Main\Data\LocalStorage\Storage\StorageInterface
{
    /** @var SessionInterface */
    private $session;
    public function __construct(\Bitrix\Main\Session\SessionInterface $session)
    {
    }
    public function read(string $key, int $ttl)
    {
    }
    public function write(string $key, $value, int $ttl)
    {
    }
}