<?php

namespace Bitrix\Sender\Internals\Model;

/**
 * Class CounterTable
 * @package Bitrix\Sender\Internals\Model
 **/
class CounterTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Merge data.
     *
     * @param array $insert Insert data.
     * @param array $update Update data.
     * @return void
     */
    public static function mergeData(array $insert, array $update)
    {
    }
    /**
     * Increment value.
     *
     * @param string $code Code.
     * @param int $increment Increment.
     * @return void
     */
    public static function incrementByCode($code, $increment = 1)
    {
    }
    /**
     * Get value by code.
     *
     * @param string $code Code.
     * @return int
     */
    public static function getValueByCode($code)
    {
    }
    /**
     * Get value by code.
     *
     * @param string $code Code.
     * @return bool
     */
    public static function resetValueByCode($code)
    {
    }
}