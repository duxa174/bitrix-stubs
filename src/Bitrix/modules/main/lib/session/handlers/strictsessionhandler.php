<?php

namespace Bitrix\Main\Session\Handlers;

class StrictSessionHandler extends \Bitrix\Main\Session\Handlers\AbstractSessionHandler
{
    /** @var NativeFileSessionHandler */
    private $handler;
    public function __construct(\Bitrix\Main\Session\Handlers\NativeFileSessionHandler $handler)
    {
    }
    public function gc($maxLifeTime)
    {
    }
    public function open($savePath, $sessionName)
    {
    }
    public function updateTimestamp($sessionId, $sessionData)
    {
    }
    protected function processRead($sessionId) : string
    {
    }
    protected function processWrite($sessionId, $sessionData) : bool
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
    public function close()
    {
    }
}