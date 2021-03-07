<?php

namespace Bitrix\Main\Session;

trait ArrayAccessWithReferences
{
    /** @var array */
    protected $sessionData = [];
    /** @var array */
    protected $nullPointers = [];
    /** @var bool */
    protected $strictMode = false;
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
    public function offsetExists($offset)
    {
    }
    public function &offsetGet($offset)
    {
    }
    public function offsetSet($offset, $value)
    {
    }
    public function offsetUnset($offset)
    {
    }
    public function refineReferencesBeforeSave() : void
    {
    }
    protected function processLazyStart()
    {
    }
}