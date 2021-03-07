<?php

namespace Bitrix\Sender;

/**
 * Class ContactTable
 *
 * @package Bitrix\Sender
 */
class ContactTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for EMAIL_FROM field.
     *
     * @return array
     */
    public static function validateEmail()
    {
    }
    /**
     * Check email.
     *
     * @return bool|string
     */
    public static function checkEmail($value)
    {
    }
    /**
     * Handler of before add event.
     *
     * @param Entity\Event $event Event object.
     * @return Entity\EventResult
     */
    public static function onBeforeAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Handler of before update event.
     *
     * @param Entity\Event $event Event object.
     * @return Entity\EventResult
     */
    public static function onBeforeUpdate(\Bitrix\Main\Entity\Event $event)
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
     * @param array $ar Data.
     * @return bool|int
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function addIfNotExist($ar)
    {
    }
    /**
     * Check connectors.
     *
     * @return void
     */
    public static function checkConnectors()
    {
    }
    /**
     * Add from connector.
     *
     * @param Connector\Base $connector Connector instance.
     * @param null|integer $pageNumber Page number.
     * @param int $timeout Timeout.
     * @return array
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function addFromConnector(\Bitrix\Sender\Connector\Base $connector, $pageNumber = null, $timeout = 0)
    {
    }
    /**
     * Upload contacts.
     *
     * @param array $list List of contacts.
     * @param bool $isBlacklist Is blacklist.
     * @param int $listId List ID.
     * @return bool|int
     */
    public static function upload(array $list, $isBlacklist = false, $listId = null)
    {
    }
}