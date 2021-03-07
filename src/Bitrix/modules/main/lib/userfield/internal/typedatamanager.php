<?php

namespace Bitrix\Main\UserField\Internal;

/**
 * @deprecated
 */
abstract class TypeDataManager extends \Bitrix\Main\ORM\Data\DataManager
{
    protected static $temporaryStorage;
    public static function getMap() : array
    {
    }
    public static function getFactory() : \Bitrix\Main\UserField\Internal\TypeFactory
    {
    }
    protected static function getTemporaryStorage() : \Bitrix\Main\UserField\Internal\TemporaryStorage
    {
    }
    /**
     * @param Event $event
     * @return EventResult
     * @throws SystemException
     */
    public static function onAfterAdd(\Bitrix\Main\ORM\Event $event) : \Bitrix\Main\ORM\EventResult
    {
    }
    /**
     * @param Event $event
     * @return EventResult
     */
    public static function onBeforeUpdate(\Bitrix\Main\ORM\Event $event) : \Bitrix\Main\ORM\EventResult
    {
    }
    /**
     * @param Event $event
     * @return EventResult
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public static function onAfterUpdate(\Bitrix\Main\ORM\Event $event) : \Bitrix\Main\ORM\EventResult
    {
    }
    /**
     * @param Event $event
     * @return EventResult
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     */
    public static function onBeforeDelete(\Bitrix\Main\ORM\Event $event) : \Bitrix\Main\ORM\EventResult
    {
    }
    /**
     * @param Event $event
     * @return EventResult
     * @throws SystemException
     * @throws \Bitrix\Main\Db\SqlQueryException
     */
    public static function onAfterDelete(\Bitrix\Main\ORM\Event $event) : \Bitrix\Main\ORM\EventResult
    {
    }
    /**
     * @param array|int|string|Type $type Could be an object, an array, ID or NAME of block.
     * @return array|null
     */
    public static function resolveType($type) : ?array
    {
    }
    /**
     * @param $type
     * @return Entity
     * @throws SystemException
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function compileEntity($type) : \Bitrix\Main\ORM\Entity
    {
    }
    /**
     * @param Entity $typeEntity
     * @param $userField
     * @return mixed
     */
    protected static function compileUtmEntity(\Bitrix\Main\ORM\Entity $typeEntity, $userField) : \Bitrix\Main\ORM\Entity
    {
    }
    /**
     * @param Entity $typeEntity
     * @param $userField
     * @return string
     */
    public static function getUtmEntityClassName(\Bitrix\Main\ORM\Entity $typeEntity, array $userField) : string
    {
    }
    /**
     * @param $type
     * @param $userField
     * @return string
     */
    public static function getMultipleValueTableName(array $type, array $userField) : string
    {
    }
    public static function validateTableExisting($value, $primary, array $row, \Bitrix\Main\ORM\Fields\Field $field)
    {
    }
    public static function getObjectParentClass() : string
    {
    }
}