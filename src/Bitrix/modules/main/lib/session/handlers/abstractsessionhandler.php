<?php

namespace Bitrix\Main\Session\Handlers;

abstract class AbstractSessionHandler implements \SessionHandlerInterface, \SessionUpdateTimestampHandlerInterface, \SessionIdInterface
{
    /** @var bool */
    protected $readOnly = false;
    /** @var string */
    protected $sessionId;
    /** @var string */
    private $prefetchId;
    /** @var string */
    private $prefetchData;
    /** @var string */
    private $lastCreatedId;
    /** @var array */
    private $listValidatedIds = [];
    /**
     * @return string
     */
    public function read($sessionId)
    {
    }
    protected abstract function processRead($sessionId) : string;
    protected function triggerLockFatalError(string $text) : void
    {
    }
    public function write($sessionId, $sessionData)
    {
    }
    protected abstract function processWrite($sessionId, $sessionData) : bool;
    protected abstract function lock($sessionId) : bool;
    protected abstract function unlock($sessionId) : bool;
    private function releaseLocksAfterValidate() : void
    {
    }
    public function close()
    {
    }
    public function destroy($sessionId)
    {
    }
    protected abstract function processDestroy($sessionId) : bool;
    public function validateId($sessionId)
    {
    }
    public function create_sid()
    {
    }
    protected function validateSessionId(string $sessionId) : bool
    {
    }
}