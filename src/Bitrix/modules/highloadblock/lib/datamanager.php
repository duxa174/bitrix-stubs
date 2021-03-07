<?php

namespace Bitrix\Highloadblock;

abstract class DataManager extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Being redefined in HL classes
     * @return null
     */
    public static function getHighloadBlock()
    {
    }
    public static function checkFields(\Bitrix\Main\Entity\Result $result, $primary, array $data)
    {
    }
    /**
     * @param array $data
     *
     * @return Entity\AddResult
     * @throws Main\ArgumentException
     * @throws Main\Db\SqlQueryException
     * @throws Main\SystemException
     */
    public static function add(array $data)
    {
    }
    /**
     * @param mixed $primary
     * @param array $data
     *
     * @return Entity\UpdateResult
     * @throws Main\ArgumentException
     * @throws Main\Db\SqlQueryException
     * @throws Main\SystemException
     */
    public static function update($primary, array $data)
    {
    }
    /**
     * @param mixed $primary
     *
     * @return Entity\DeleteResult
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function delete($primary)
    {
    }
    protected static function callOnBeforeUpdateEvent($object, $fields, $result)
    {
    }
    protected static function callOnUpdateEvent($object, $fields, $ufdata)
    {
    }
    protected static function callOnAfterUpdateEvent($object, $fields)
    {
    }
    protected static function callOnBeforeDeleteEvent($primary, $entity, $result, $oldData = null)
    {
    }
    protected static function callOnDeleteEvent($primary, $entity, $oldData = null)
    {
    }
    protected static function callOnAfterDeleteEvent($primary, $entity, $oldData = null)
    {
    }
    protected static function convertValuesBeforeSave($data, $userfields)
    {
    }
    /**
     * Modify value before save.
     * @param mixed $value Value for converting.
     * @param array $userfield Field array.
     * @return boolean|null
     */
    protected static function convertSingleValueBeforeSave($value, $userfield)
    {
    }
    protected static function isNotNull($value)
    {
    }
}