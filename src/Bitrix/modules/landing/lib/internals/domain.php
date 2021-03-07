<?php

namespace Bitrix\Landing\Internals;

class DomainTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Code of https protocol.
     */
    const PROTOCOL_HTTPS = 'https';
    /**
     * Code of http protocol.
     */
    const PROTOCOL_HTTP = 'http';
    /**
     * Returns DB table name for entity.
     * @return string
     */
    public static function getTableName()
    {
    }
    /**
     * Returns entity map definition.
     * @return array
     */
    public static function getMap()
    {
    }
    /**
     * Get available protocol list.
     * @return array
     */
    public static function getProtocolList()
    {
    }
    /**
     * Valid or not protocol.
     * @param string $protocol Protocol.
     * @return boolean
     */
    protected static function isValidProtocol($protocol)
    {
    }
    /**
     * Prepare change to save.
     * @param Entity\Event $event Event instance.
     * @return Entity\EventResult
     */
    protected static function prepareChange(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Before add handler.
     * @param Entity\Event $event Event instance.
     * @return Entity\EventResult
     */
    public static function OnBeforeAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Before update handler.
     * @param Entity\Event $event Event instance.
     * @return Entity\EventResult
     */
    public static function OnBeforeUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Before delete handler.
     * @param Entity\Event $event Event instance.
     * @return Entity\EventResult
     */
    public static function OnBeforeDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
}