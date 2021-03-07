<?php

namespace Bitrix\Main\Data;

/**
 * Class description
 * @package    bitrix
 * @subpackage main
 * @property \Memcached $resource
 */
class MemcachedConnection extends \Bitrix\Main\Data\NosqlConnection
{
    protected $host = 'localhost';
    protected $port = '11211';
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