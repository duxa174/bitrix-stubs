<?php

namespace Bitrix\Main\UserField\Internal;

/**
 * @deprecated
 */
abstract class PrototypeItemDataManager extends \Bitrix\Main\ORM\Data\DataManager
{
    protected static $temporaryStorage;
    public static function getType() : ?array
    {
    }
    public static function getMap() : array
    {
    }
    protected static function getTemporaryStorage() : \Bitrix\Main\UserField\Internal\TemporaryStorage
    {
    }
    public static function checkFields(\Bitrix\Main\ORM\Data\Result $result, $primary, array $data)
    {
    }
    public static function getItemUserFieldEntityId() : ?string
    {
    }
    protected static function getErrorFromException() : \Bitrix\Main\ORM\EntityError
    {
    }
    /**
     * @param $id
     * @param array $data
     * @param array $options
     * @return Main\ORM\EventResult
     */
    protected static function modifyValuesBeforeSave($id, array $data, array $options = []) : \Bitrix\Main\ORM\EventResult
    {
    }
    /**
     * @param $id
     * @param array $data
     * @param array $options
     * @return Main\ORM\EventResult
     * @throws Main\Db\SqlQueryException
     * @throws Main\SystemException
     */
    protected static function saveMultipleValues($id, array $data, array $options = []) : \Bitrix\Main\ORM\EventResult
    {
    }
    public static function onBeforeAdd(\Bitrix\Main\ORM\Event $event) : \Bitrix\Main\ORM\EventResult
    {
    }
    public static function onAfterAdd(\Bitrix\Main\ORM\Event $event) : \Bitrix\Main\ORM\EventResult
    {
    }
    public static function onBeforeUpdate(\Bitrix\Main\ORM\Event $event) : \Bitrix\Main\ORM\EventResult
    {
    }
    public static function onAfterUpdate(\Bitrix\Main\ORM\Event $event) : \Bitrix\Main\ORM\EventResult
    {
    }
    public static function onBeforeDelete(\Bitrix\Main\ORM\Event $event) : \Bitrix\Main\ORM\EventResult
    {
    }
    public static function onAfterDelete(\Bitrix\Main\ORM\Event $event) : \Bitrix\Main\ORM\EventResult
    {
    }
    /**
     * Convert values of user fields using their callback.
     *
     * @param array $data
     * @param array $userFields
     * @return array
     */
    protected static function convertValuesBeforeSave(array $data, array $userFields) : array
    {
    }
    /**
     * Modify value before save.
     * @param mixed $value Value for converting.
     * @param array $userField Field array.
     * @return mixed
     */
    protected static function convertSingleValueBeforeSave($value, array $userField)
    {
    }
    protected static function isNotNull($value) : bool
    {
    }
    public static function isOwnField(string $fieldName) : bool
    {
    }
    /**
     * Returns list of field names that are not user fields.
     *
     * @return array
     */
    public static function getOwnFieldNames() : array
    {
    }
    public static function getUserFieldValues(int $id, array $userFields) : ?array
    {
    }
    public static function updateUserFieldValues(int $id, array $fields) : \Bitrix\Main\Result
    {
    }
    public static function deleteUserFieldValues(int $id) : \Bitrix\Main\Result
    {
    }
}