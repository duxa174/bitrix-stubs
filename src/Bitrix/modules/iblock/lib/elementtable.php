<?php

namespace Bitrix\Iblock;

/**
 * Class ElementTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TIMESTAMP_X datetime optional
 * <li> MODIFIED_BY int optional
 * <li> DATE_CREATE datetime optional
 * <li> CREATED_BY int optional
 * <li> IBLOCK_ID int mandatory
 * <li> IBLOCK_SECTION_ID int optional
 * <li> ACTIVE bool optional default 'Y'
 * <li> ACTIVE_FROM datetime optional
 * <li> ACTIVE_TO datetime optional
 * <li> SORT int optional default 500
 * <li> NAME string(255) mandatory
 * <li> PREVIEW_PICTURE int optional
 * <li> PREVIEW_TEXT string optional
 * <li> PREVIEW_TEXT_TYPE enum ('text', 'html') optional default 'text'
 * <li> DETAIL_PICTURE int optional
 * <li> DETAIL_TEXT string optional
 * <li> DETAIL_TEXT_TYPE enum ('text', 'html') optional default 'text'
 * <li> SEARCHABLE_CONTENT string optional
 * <li> WF_STATUS_ID int optional default 1
 * <li> WF_PARENT_ELEMENT_ID int optional
 * <li> WF_NEW enum ('N', 'Y') optional
 * <li> WF_LOCKED_BY int optional
 * <li> WF_DATE_LOCK datetime optional
 * <li> WF_COMMENTS string optional
 * <li> IN_SECTIONS bool optional default 'N'
 * <li> XML_ID string(255) optional
 * <li> CODE string(255) optional
 * <li> TAGS string(255) optional
 * <li> TMP_ID string(40) optional
 * <li> WF_LAST_HISTORY_ID int optional
 * <li> SHOW_COUNTER int optional
 * <li> SHOW_COUNTER_START datetime optional
 * <li> PREVIEW_PICTURE_FILE reference to {@link \Bitrix\Main\FileTable}
 * <li> DETAIL_PICTURE_FILE reference to {@link \Bitrix\Main\FileTable}
 * <li> IBLOCK reference to {@link \Bitrix\Iblock\IblockTable}
 * <li> WF_PARENT_ELEMENT reference to {@link \Bitrix\Iblock\IblockElementTable}
 * <li> IBLOCK_SECTION reference to {@link \Bitrix\Iblock\IblockSectionTable}
 * <li> MODIFIED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * <li> CREATED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * <li> WF_LOCKED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * </ul>
 *
 * @package Bitrix\Iblock
 **/
class ElementTable extends \Bitrix\Main\ORM\Data\DataManager
{
    const TYPE_TEXT = 'text';
    const TYPE_HTML = 'html';
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
     * Returns validators for NAME field.
     *
     * @return array
     */
    public static function validateName()
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
     * Returns validators for CODE field.
     *
     * @return array
     */
    public static function validateCode()
    {
    }
    /**
     * Returns validators for TAGS field.
     *
     * @return array
     */
    public static function validateTags()
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
     * Add iblock element.
     *
     * @param array $data			Element data.
     * @return ORM\Data\AddResult
     */
    public static function add(array $data)
    {
    }
    /**
     * Updates iblock element by primary key.
     *
     * @param mixed $primary		Element primary key.
     * @param array $data			Element data.
     * @return ORM\Data\UpdateResult
     */
    public static function update($primary, array $data)
    {
    }
    /**
     * Deletes iblock element by primary key.
     *
     * @param mixed $primary		Element primary key.
     * @return ORM\Data\DeleteResult
     */
    public static function delete($primary)
    {
    }
}