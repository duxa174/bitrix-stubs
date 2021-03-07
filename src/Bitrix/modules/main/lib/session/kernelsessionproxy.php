<?php

namespace Bitrix\Main\Session;

final class KernelSessionProxy extends \Bitrix\Main\Session\KernelSession
{
    /** @var Session */
    protected $session;
    public function __construct(\Bitrix\Main\Session\Session $session)
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
    public function has($name)
    {
    }
    public function &get($name)
    {
    }
    public function set($name, $value)
    {
    }
    public function remove($name)
    {
    }
    public function delete($name)
    {
    }
    public function clear()
    {
    }
    public function isStarted()
    {
    }
    public function offsetExists($offset)
    {
    }
    public function offsetSet($offset, $value)
    {
    }
}