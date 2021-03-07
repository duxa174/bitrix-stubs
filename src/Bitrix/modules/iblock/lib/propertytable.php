<?php

namespace Bitrix\Iblock;

/**
 * Class PropertyTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TIMESTAMP_X datetime mandatory default 'CURRENT_TIMESTAMP'
 * <li> IBLOCK_ID int mandatory
 * <li> NAME string(255) mandatory
 * <li> ACTIVE bool optional default 'Y'
 * <li> SORT int optional default 500
 * <li> CODE string(50) optional
 * <li> DEFAULT_VALUE text optional
 * <li> PROPERTY_TYPE enum ('S', 'N', 'L', 'F', 'E' or 'G') optional default 'S'
 * <li> ROW_COUNT int optional default 1
 * <li> COL_COUNT int optional default 30
 * <li> LIST_TYPE enum ('C' or 'L') optional default 'L'
 * <li> MULTIPLE bool optional default 'N'
 * <li> XML_ID string(100) optional
 * <li> FILE_TYPE string(200) optional
 * <li> MULTIPLE_CNT int optional
 * <li> TMP_ID string(40) optional
 * <li> LINK_IBLOCK_ID int optional
 * <li> WITH_DESCRIPTION bool optional default 'N'
 * <li> SEARCHABLE bool optional default 'N'
 * <li> FILTRABLE bool optional default 'N'
 * <li> IS_REQUIRED bool optional default 'N'
 * <li> VERSION enum (1 or 2) optional default 1
 * <li> USER_TYPE string(255) optional
 * <li> USER_TYPE_SETTINGS string optional
 * <li> HINT string(255) optional
 * <li> LINK_IBLOCK reference to {@link \Bitrix\Iblock\IblockTable}
 * <li> IBLOCK reference to {@link \Bitrix\Iblock\IblockTable}
 * </ul>
 *
 * @package Bitrix\Iblock
 **/
class PropertyTable extends \Bitrix\Main\ORM\Data\DataManager
{
    const CHECKBOX = 'C';
    const LISTBOX = 'L';
    const TYPE_STRING = 'S';
    const TYPE_NUMBER = 'N';
    const TYPE_FILE = 'F';
    const TYPE_ELEMENT = 'E';
    const TYPE_SECTION = 'G';
    const TYPE_LIST = 'L';
    const DEFAULT_MULTIPLE_CNT = 5;
    /**
     * Returns DB table name for entity
     *
     * @return string
     */
    public static function getTableName()
    {
    }
    public static function getObjectClass()
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
     * Returns validators for NAME field.
     *
     * @return array
     */
    public static function validateName()
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
     * Returns validators for XML_ID field.
     *
     * @return array
     */
    public static function validateXmlId()
    {
    }
    /**
     * Returns validators for FILE_TYPE field.
     *
     * @return array
     */
    public static function validateFileType()
    {
    }
    /**
     * Returns validators for TMP_ID field.
     *
     * @return array
     */
    public static function validateTmpId()
    {
    }
    /**
     * Returns validators for USER_TYPE field.
     *
     * @return array
     */
    public static function validateUserType()
    {
    }
    /**
     * Returns validators for HINT field.
     *
     * @return array
     */
    public static function validateHint()
    {
    }
    /**
     * Default onBeforeAdd handler. Absolutely necessary.
     *
     * @param ORM\Event $event		Event object.
     * @return ORM\EventResult
     */
    public static function onBeforeAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * Default onBeforeUpdate handler. Absolutely necessary.
     *
     * @param ORM\Event $event		Event object.
     * @return ORM\EventResult
     */
    public static function onBeforeUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * Remove values from old fields (for compatibility with old api).
     *
     * @param array &$result			Modified data for add/update property.
     * @param array $data				Current data for add/update property.
     * @return void
     */
    private static function copyOldFields(&$result, $data)
    {
    }
}