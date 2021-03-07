<?php

namespace Bitrix\Main\Session;

class KernelSession implements \Bitrix\Main\Session\SessionInterface, \ArrayAccess
{
    use \Bitrix\Main\Session\ArrayAccessWithReferences;
    private const COOKIE_NAME = 'kernel';
    /** @var bool */
    protected $started;
    /** @var \SessionHandlerInterface */
    protected $sessionHandler;
    /** @var int */
    private $lifetime = 0;
    /** @var string */
    private $id;
    /** @var string */
    private $hash;
    public function __construct(int $lifetime = 0)
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
    /**
     * @return \SessionHandlerInterface|CookieSessionHandler
     */
    public function getSessionHandler() : \SessionHandlerInterface
    {
    }
    protected final function hashData(string $data) : string
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
    public function clear()
    {
    }
    public function isStarted()
    {
    }
}