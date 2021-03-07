<?php

namespace Bitrix\Main\Session;

class Session implements \Bitrix\Main\Session\SessionInterface, \ArrayAccess
{
    use \Bitrix\Main\Session\ArrayAccessWithReferences;
    /** @var bool */
    protected $started = false;
    /** @var \SessionHandlerInterface|null */
    protected $sessionHandler;
    /** @var bool */
    protected $lazyStartEnabled = false;
    /** @var bool */
    protected $debug = false;
    /** @var Debugger */
    protected $debugger;
    /**
     * Session constructor.
     */
    public function __construct(\SessionHandlerInterface $sessionHandler = null)
    {
    }
    public function enableLazyStart() : self
    {
    }
    public function disableLazyStart() : self
    {
    }
    public function enableDebug() : self
    {
    }
    public function disableDebug() : self
    {
    }
    public function isActive() : bool
    {
    }
    public function getId() : string
    {
    }
    public function setId($id)
    {
    }
    public function getName() : string
    {
    }
    public function setName($name)
    {
    }
    public function start() : bool
    {
    }
    public function regenerateId() : bool
    {
    }
    public function destroy()
    {
    }
    public function save()
    {
    }
    protected function processLazyStart()
    {
    }
    public function clear()
    {
    }
    public function isStarted()
    {
    }
    /**
     * @return Debugger
     */
    public function getDebugger() : \Bitrix\Main\Session\Debugger
    {
    }
    private function debug(string $text) : void
    {
    }
    private function detectFirstUsage() : void
    {
    }
}