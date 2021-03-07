<?php

namespace Bitrix\Main;

/**
 * @internal
 * Class UserProfileHistoryTable
 * @package Bitrix\Main
 */
class UserProfileHistoryTable extends \Bitrix\Main\Entity\DataManager
{
    const TYPE_ADD = 1;
    const TYPE_UPDATE = 2;
    const TYPE_DELETE = 3;
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    /**
     * @param int $userId User profile ID.
     * @param int $type See TYPE_* constants.
     * @param array|null $before Fields before update.
     * @param array|null $after Fields after update.
     * @return Entity\AddResult
     */
    public static function addHistory($userId, $type, array $before = null, array $after = null)
    {
    }
    public static function deleteByUser($userId)
    {
    }
    /**
     * @param array $filter
     */
    public static function deleteByFilter(array $filter)
    {
    }
}