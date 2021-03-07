<?php

namespace Bitrix\Sender\Internals\Model;

/**
 * Class PostingTable
 *
 * @package Bitrix\Sender\Internals\Model
 */
class PostingTable extends \Bitrix\Main\Entity\DataManager
{
    const STATUS_NEW = 'N';
    const STATUS_PART = 'P';
    const STATUS_SENT = 'S';
    const STATUS_SENT_WITH_ERRORS = 'E';
    const STATUS_ABORT = 'A';
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
     * Handler of event `onDelete`.
     *
     * @param Main\Entity\Event $event Event.
     * @return Main\Entity\EventResult
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function onDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
}