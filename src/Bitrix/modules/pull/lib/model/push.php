<?php

namespace Bitrix\Pull\Model;

/**
 * Class PushTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> USER_ID int mandatory
 * <li> DEVICE_TYPE string(50) optional
 * <li> APP_ID string(50) optional
 * <li> UNIQUE_HASH string(50) optional
 * <li> DEVICE_ID string(255) optional
 * <li> DEVICE_NAME string(50) optional
 * <li> DEVICE_TOKEN string(255) mandatory
 * <li> DATE_CREATE datetime mandatory
 * <li> DATE_AUTH datetime optional
 * <li> USER reference to {@link \Bitrix\User\UserTable}
 * </ul>
 *
 * @package Bitrix\Pull
 **/
class PushTable extends \Bitrix\Main\Entity\DataManager
{
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
     * Returns validators for DEVICE_TYPE field.
     *
     * @return array
     */
    public static function validateDeviceType()
    {
    }
    /**
     * Returns validators for APP_ID field.
     *
     * @return array
     */
    public static function validateAppId()
    {
    }
    /**
     * Returns validators for UNIQUE_HASH field.
     *
     * @return array
     */
    public static function validateUniqueHash()
    {
    }
    /**
     * Checks the data fields before saving to DB. Result stores in the $result object
     *
     * @param Result $result
     * @param mixed $primary
     * @param array $data
     * @throws Main\ArgumentException
     */
    public static function checkFields(\Bitrix\Main\Entity\Result $result, $primary, array $data)
    {
    }
    public static function onBeforeAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onBeforeUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Returns validators for DEVICE_ID field.
     *
     * @return array
     */
    public static function validateDeviceId()
    {
    }
    /**
     * Returns validators for DEVICE_NAME field.
     *
     * @return array
     */
    public static function validateDeviceName()
    {
    }
    /**
     * Returns validators for DEVICE_TOKEN field.
     *
     * @return array
     */
    public static function validateDeviceToken()
    {
    }
}