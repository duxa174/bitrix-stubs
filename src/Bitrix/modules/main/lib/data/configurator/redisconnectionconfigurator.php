<?php

namespace Bitrix\Main\Data\Configurator;

class RedisConnectionConfigurator
{
    /** @var array */
    protected $config;
    /** @var array */
    protected $servers = [];
    public function __construct($config)
    {
    }
    protected function addServers($config)
    {
    }
    public function getConfig()
    {
    }
    /**
     * @param \Redis|\RedisCluster $connection
     */
    protected function configureConnection($connection) : void
    {
    }
    public function createConnection()
    {
    }
}