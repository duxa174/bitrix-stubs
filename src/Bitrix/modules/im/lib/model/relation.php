<?php

namespace Bitrix\Im\Model;

/**
 * Class RelationTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> CHAT_ID int mandatory
 * <li> MESSAGE_TYPE string(1) optional default 'P'
 * <li> USER_ID int mandatory
 * <li> START_ID int optional
 * <li> LAST_ID int optional
 * <li> LAST_SEND_ID int optional
 * <li> LAST_FILE_ID int optional
 * <li> LAST_READ datetime optional
 * <li> STATUS int optional
 * <li> CALL_STATUS int optional
 * <li> NOTIFY_BLOCK bool optional default 'N'
 * <li> CHAT reference to {@link \Bitrix\Im\Model\MessageTable}
 * <li> START reference to {@link \Bitrix\Im\Model\MessageTable}
 * <li> LAST_SEND reference to {@link \Bitrix\Im\Model\MessageTable}
 * <li> LAST reference to {@link \Bitrix\Im\Model\MessageTable}
 * <li> USER reference to {@link \Bitrix\Main\UserTable}
 * </ul>
 *
 * @package Bitrix\Im
 **/
class RelationTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for MESSAGE_TYPE field.
     *
     * @return array
     */
    public static function validateMessageType()
    {
    }
    /**
     * Returns validators for MESSAGE_STATUS field.
     *
     * @return array
     */
    public static function validateMessageStatus()
    {
    }
    /**
     * @param array $fields Record as returned by getList
     * @return string
     */
    public static function generateSearchContent(array $fields)
    {
    }
}