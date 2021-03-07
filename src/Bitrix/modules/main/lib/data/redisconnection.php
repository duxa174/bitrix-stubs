<?php

namespace Bitrix\Main\Data;

/**
 * Class RedisConnection
 * @package Bitrix\Main\Data
 * @property \Redis|\RedisCluster $resource
 * @method getResource(): \Redis|\RedisCluster
 */
class RedisConnection extends \Bitrix\Main\Data\NosqlConnection
{
    /** @var Configurator\RedisConnectionConfigurator */
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