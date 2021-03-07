<?php

namespace Bitrix\Sender\Internals\Model;

/**
 * Class AbuseTable
 * @package Bitrix\Sender\Internals\Model
 **/
class AbuseTable extends \Bitrix\Main\Entity\DataManager
{
    const COUNTER_CODE_ABUSES = 'abuses';
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
     * After add event handler.
     *
     * @param Entity\Event $event Event.
     * @return Entity\EventResult
     */
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Get count of new abuses.
     *
     * @return int
     */
    public static function getCountOfNew()
    {
    }
    /**
     * Reset count of new abuses.
     *
     * @return bool
     */
    public static function resetCountOfNew()
    {
    }
}