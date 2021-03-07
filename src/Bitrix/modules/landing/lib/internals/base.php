<?php

namespace Bitrix\Landing\Internals;

class BaseTable
{
    public static $internalClass = null;
    /**
     * Get internal class (must declarated in external class).
     * @return string
     */
    private static function getCallingClass()
    {
    }
    /**
     * Get Map of table.
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Create new record and return it new id.
     * @param array $fields Fields array.
     * @return \Bitrix\Main\ORM\Data\AddResult
     */
    public static function add($fields)
    {
    }
    /**
     * Update record.
     * @param int $id Record key.
     * @param array $fields Fields array.
     * @return \Bitrix\Main\Result
     */
    public static function update($id, $fields = array())
    {
    }
    /**
     * Delete record.
     * @param int $id Record key.
     * @return \Bitrix\Main\Result
     */
    public static function delete($id)
    {
    }
    /**
     * Get records of table.
     * @param array $params Params array like ORM style.
     * @return \Bitrix\Main\DB\Result
     */
    public static function getList($params = array())
    {
    }
    /**
     * Register calllback for internal table.
     * @param string $code Type of callback.
     * @param callable $callback Callback.
     * @return void
     */
    public static function callback($code, $callback)
    {
    }
}