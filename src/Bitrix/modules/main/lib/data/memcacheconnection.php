<?php

namespace Bitrix\Main\Data;

/**
 * Class MemcacheConnection
 * @package Bitrix\Main\Data
 * @property \Memcache $resource
 * @method getResource(): \Memcache
 */
class MemcacheConnection extends \Bitrix\Main\Data\NosqlConnection
{
    /** @var Configurator\MemcacheConnectionConfigurator */
    protected $configurator;
    public function __construct(array $configuration)
    {
    }
    protected function connectInternal()
    {
    }
    protected function disconnectInternal()
    {
    }
    public function get($key)
    {
    }
    public function set($key, $value)
    {
    }
}