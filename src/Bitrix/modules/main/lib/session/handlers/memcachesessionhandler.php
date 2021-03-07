<?php

namespace Bitrix\Main\Session\Handlers;

class MemcacheSessionHandler extends \Bitrix\Main\Session\Handlers\AbstractSessionHandler
{
    public const SESSION_MEMCACHE_CONNECTION = 'session.memcache';
    /** @var \Memcache $connection */
    protected $connection;
    /** @var string */
    protected $prefix;
    /** @var bool */
    protected $exclusiveLock;
    public function __construct(array $options)
    {
    }
    public function open($savePath, $sessionName)
    {
    }
    public function close()
    {
    }
    public function processRead($sessionId) : string
    {
    }
    public function processWrite($sessionId, $sessionData) : bool
    {
    }
    public function processDestroy($sessionId) : bool
    {
    }
    public function gc($maxLifeTime)
    {
    }
    protected function isConnected() : bool
    {
    }
    protected function getPrefix() : string
    {
    }
    protected function createConnection() : bool
    {
    }
    protected function closeConnection() : void
    {
    }
    public function updateTimestamp($sessionId, $sessionData)
    {
    }
    protected function lock($sessionId) : bool
    {
    }
    protected function unlock($sessionId) : bool
    {
    }
}