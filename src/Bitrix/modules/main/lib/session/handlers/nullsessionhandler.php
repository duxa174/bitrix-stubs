<?php

namespace Bitrix\Main\Session\Handlers;

class NullSessionHandler extends \Bitrix\Main\Session\Handlers\AbstractSessionHandler
{
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
}