<?php

namespace Bitrix\Im\Model;

/**
 * Class MessageTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> CHAT_ID int mandatory
 * <li> AUTHOR_ID int mandatory
 * <li> MESSAGE string optional
 * <li> MESSAGE_OUT string optional
 * <li> DATE_CREATE datetime mandatory
 * <li> EMAIL_TEMPLATE string(255) optional
 * <li> NOTIFY_TYPE int optional
 * <li> NOTIFY_MODULE string(255) optional
 * <li> NOTIFY_EVENT string(255) optional
 * <li> NOTIFY_TAG string(255) optional
 * <li> NOTIFY_SUB_TAG string(255) optional
 * <li> NOTIFY_TITLE string(255) optional
 * <li> NOTIFY_BUTTONS string optional
 * <li> NOTIFY_READ bool optional default 'N'
 * <li> IMPORT_ID int optional
 * <li> CHAT reference to {@link \Bitrix\Im\ImRelationTable}
 * <li> NOTIFY_MODULE reference to {@link \Bitrix\Module\ModuleTable}
 * <li> AUTHOR reference to {@link \Bitrix\User\UserTable}
 * </ul>
 *
 * @package Bitrix\Im
 **/
class MessageTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for EMAIL_TEMPLATE field.
     *
     * @return array
     */
    public static function validateEmailTemplate()
    {
    }
    /**
     * Returns validators for NOTIFY_MODULE field.
     *
     * @return array
     */
    public static function validateNotifyModule()
    {
    }
    /**
     * Returns validators for NOTIFY_EVENT field.
     *
     * @return array
     */
    public static function validateNotifyEvent()
    {
    }
    /**
     * Returns validators for NOTIFY_TAG field.
     *
     * @return array
     */
    public static function validateNotifyTag()
    {
    }
    /**
     * Returns validators for NOTIFY_SUB_TAG field.
     *
     * @return array
     */
    public static function validateNotifySubTag()
    {
    }
    /**
     * Returns validators for NOTIFY_TITLE field.
     *
     * @return array
     */
    public static function validateNotifyTitle()
    {
    }
    /**
     * Return current date for DATE_CREATE field.
     *
     * @return \Bitrix\Main\Type\DateTime
     */
    public static function getCurrentDate()
    {
    }
    /**
     * Add message data to MessageIndex table
     * @param $id
     *
     * @return bool|void
     * @throws Main\ArgumentException
     * @throws Main\ObjectPropertyException
     * @throws Main\SystemException
     */
    public static function indexRecord($id)
    {
    }
    /**
     * Generate text with all the info about message for searching purposes
     * @param array $message
     *
     * @return string
     * @throws Main\NotImplementedException
     */
    private static function generateSearchContent(array $message) : string
    {
    }
}