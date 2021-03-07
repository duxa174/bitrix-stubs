<?php

namespace Bitrix\Sender;

class ListTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for CODE field.
     *
     * @return array
     */
    public static function validateCode()
    {
    }
    /**
     * On after delete.
     *
     * @param Entity\Event $event Event.
     * @return Entity\EventResult
     */
    public static function onAfterDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Add if not exist.
     *
     * @param string $code Code.
     * @param string $name Name.
     * @return bool|int
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function addIfNotExist($code, $name)
    {
    }
}