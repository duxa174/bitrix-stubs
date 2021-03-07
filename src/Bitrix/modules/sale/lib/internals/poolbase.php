<?php

namespace Bitrix\Sale\Internals;

class PoolBase
{
    protected static $pool = array();
    protected static $index = 0;
    public static function getPoolByCode($code)
    {
    }
    public static function get($code, $type)
    {
    }
    /**
     * @param $code
     * @param $type
     * @param int $index
     *
     * @return null|mixed
     */
    public static function getByIndex($code, $type, $index)
    {
    }
    /**
     * @param $code
     * @param $type
     * @param $value
     */
    public static function add($code, $type, $value)
    {
    }
    /**
     * @param $code
     * @param $type
     * @param $index
     */
    public static function delete($code, $type, $index)
    {
    }
    /**
     * @param $code
     * @param $type
     *
     * @return bool
     */
    public static function isTypeExists($code, $type)
    {
    }
    /**
     * @param null $code
     * @param null $type
     */
    public static function resetPool($code = null, $type = null)
    {
    }
}