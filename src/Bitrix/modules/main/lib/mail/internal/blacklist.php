<?php

namespace Bitrix\Main\Mail\Internal;

/**
 * Class BlacklistTable
 *
 * @package Bitrix\Main\Mail\Internal
 */
class BlacklistTable extends \Bitrix\Main\Entity\DataManager
{
    const CategoryAuto = 0;
    const CategoryManual = 1;
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
     * Return true if table has rows.
     *
     * @return bool
     */
    public static function hasBlacklistedEmails()
    {
    }
    /**
     * Insert batch of emails.
     *
     * @param string[] $list List of emails.
     * @return void
     */
    public static function insertBatch(array $list)
    {
    }
    protected static function divideList(array $list, $limit = 300)
    {
    }
}