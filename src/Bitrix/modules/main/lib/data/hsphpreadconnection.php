<?php

namespace Bitrix\Main\Data;

/**
 * Class description
 * @package    bitrix
 * @subpackage main
 */
class HsphpReadConnection extends \Bitrix\Main\Data\NosqlConnection implements \Bitrix\Main\ORM\Query\INosqlPrimarySelector
{
    protected $host = 'localhost';
    protected $port = '9998';
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
    public function getEntityByPrimary(\Bitrix\Main\ORM\Entity $entity, $primary, $select)
    {
    }
}