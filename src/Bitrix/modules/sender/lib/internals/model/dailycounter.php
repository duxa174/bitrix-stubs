<?php

namespace Bitrix\Sender\Internals\Model;

/**
 * Class DailyCounterTable
 * @package Bitrix\Sender\Internals\Model
 */
class DailyCounterTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Get map.
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
     * Increment field value.
     *
     * @param string $fieldName Field name.
     * @param int $increment Increment.
     * @return void
     */
    public static function incrementFieldValue($fieldName, $increment = 1)
    {
    }
    /**
     * Get current field value.
     *
     * @param string $fieldName Field name.
     * @return int
     */
    public static function getCurrentFieldValue($fieldName)
    {
    }
    /**
     * Get row by days left.
     *
     * @param integer $daysLeft Days left.
     * @return array|null
     */
    public static function getRowByDate($daysLeft = 0)
    {
    }
}