<?php

namespace Bitrix\Landing\Internals;

class LandingTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * For save callbacks.
     */
    const ACTION_TYPE_ADD = 'add';
    /**
     * For save callbacks.
     */
    const ACTION_TYPE_UPDATE = 'update';
    /**
     * Stored fields for save separate.
     * @var array
     */
    protected static $additionalFields = array();
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
     * Set additional access filter.
     * @param mixed $params ORM params.
     * @return mixed
     */
    public static function setAccessFilter($params)
    {
    }
    /**
     * Prepare change to save.
     * @param Entity\Event $event Event instance.
     * @param string $actionType Action type: add / update.
     * @return Entity\EventResult
     */
    protected static function prepareChange(\Bitrix\Main\Entity\Event $event, $actionType)
    {
    }
    /**
     * Get entity rows.
     * @param array $params Params array.
     * @return \Bitrix\Main\ORM\Query\Result
     */
    public static function getList(array $params = array())
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
    /**
     * Save additional fields after add / update.
     * @param Entity\Event $event Event instance.
     * @return Entity\EventResult
     */
    protected static function saveAdditionalFields(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * After add handler.
     * @param Entity\Event $event Event instance.
     * @return Entity\EventResult
     */
    public static function OnAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * After update handler.
     * @param Entity\Event $event Event instance.
     * @return Entity\EventResult
     */
    public static function OnAfterUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * After delete handler.
     * @param Entity\Event $event Event instance.
     * @return void
     */
    public static function OnAfterDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
}