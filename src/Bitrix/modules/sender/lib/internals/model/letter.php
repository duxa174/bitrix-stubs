<?php

namespace Bitrix\Sender\Internals\Model;

class LetterTable extends \Bitrix\Main\Entity\DataManager
{
    const STATUS_NEW = 'N';
    const STATUS_READY = 'R';
    const STATUS_SEND = 'S';
    const STATUS_PAUSE = 'P';
    const STATUS_WAIT = 'W';
    const STATUS_HALT = 'H';
    const STATUS_PLAN = 'T';
    const STATUS_END = 'Y';
    const STATUS_CANCEL = 'C';
    /**
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
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
     * On after update event handler.
     *
     * @param Entity\Event $event Event.
     * @return Entity\EventResult
     */
    public static function onBeforeUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * On after update event handler.
     *
     * @param Entity\Event $event Event.
     * @return Entity\EventResult
     */
    public static function onAfterUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * On delete event handler.
     *
     * @param Entity\Event $event Event.
     * @return Entity\EventResult
     */
    public static function onDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * @param Entity\Event $event
     * @return void
     */
    public static function onAfterDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
}