<?php

namespace Bitrix\Sale\Internals;

/**
 * Class PoolQuantity
 * @package Bitrix\Sale\Internals
 */
class PoolQuantity
{
    const POOL_RESERVE_TYPE = 'R';
    const POOL_QUANTITY_TYPE = 'Q';
    private static $poolList = array();
    private $typeList = array();
    /**
     * @param $key
     *
     * @return PoolQuantity
     */
    public static function getInstance($key)
    {
    }
    /**
     * @param $type
     * @param $code
     *
     * @return float|null
     */
    public function get($type, $code)
    {
    }
    /**
     * @internal
     * @param $type
     *
     * @return Pool
     */
    public function getByType($type)
    {
    }
    /**
     * @param $type
     *
     * @return array
     */
    public function getQuantities($type)
    {
    }
    /**
     * @param $type
     * @param $code
     * @param $value
     */
    public function add($type, $code, $value)
    {
    }
    /**
     * @param $type
     * @param $code
     * @param $value
     */
    public function set($type, $code, $value)
    {
    }
    /**
     * @param $type
     * @param $code
     */
    public function delete($type, $code)
    {
    }
    /**
     * @param $type
     */
    public function reset($type)
    {
    }
}