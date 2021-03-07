<?php

namespace Bitrix\Main\Session\Handlers;

class DatabaseSessionHandler extends \Bitrix\Main\Session\Handlers\AbstractSessionHandler
{
    public function __construct(array $options)
    {
    }
    public function open($savePath, $sessionName)
    {
    }
    public function processRead($sessionId) : string
    {
    }
    public function processWrite($sessionId, $sessionData) : bool
    {
    }
    protected function lock($sessionId) : bool
    {
    }
    protected function unlock($sessionId) : bool
    {
    }
    protected function processDestroy($sessionId) : bool
    {
    }
    /**
     * @param int $maxLifeTime
     * @return bool
     */
    public function gc($maxLifeTime)
    {
    }
    public function updateTimestamp($sessionId, $sessionData)
    {
    }
}