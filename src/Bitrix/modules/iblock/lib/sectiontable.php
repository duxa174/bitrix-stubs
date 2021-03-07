<?php

namespace Bitrix\Iblock;

/**
 * Class SectionTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TIMESTAMP_X datetime mandatory default 'CURRENT_TIMESTAMP'
 * <li> MODIFIED_BY int optional
 * <li> DATE_CREATE datetime optional
 * <li> CREATED_BY int optional
 * <li> IBLOCK_ID int mandatory
 * <li> IBLOCK_SECTION_ID int optional
 * <li> ACTIVE bool optional default 'Y'
 * <li> GLOBAL_ACTIVE bool optional default 'Y'
 * <li> SORT int optional default 500
 * <li> NAME string(255) mandatory
 * <li> PICTURE int optional
 * <li> LEFT_MARGIN int optional
 * <li> RIGHT_MARGIN int optional
 * <li> DEPTH_LEVEL int optional
 * <li> DESCRIPTION string optional
 * <li> DESCRIPTION_TYPE enum ('text', 'html') optional default 'text'
 * <li> SEARCHABLE_CONTENT string optional
 * <li> CODE string(255) optional
 * <li> XML_ID string(255) optional
 * <li> TMP_ID string(40) optional
 * <li> DETAIL_PICTURE int optional
 * <li> SOCNET_GROUP_ID int optional
 * <li> IBLOCK reference to {@link \Bitrix\Iblock\IblockTable}
 * <li> PARENT_SECTION reference to {@link \Bitrix\Iblock\SectionTable}
 * <li> CREATED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * <li> MODIFIED_BY_USER reference to {@link \Bitrix\Main\UserTable}
 * </ul>
 *
 * @package Bitrix\Iblock
 **/
class SectionTable extends \Bitrix\Main\ORM\Data\DataManager
{
    /**
     * Returns DB table name for entity
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
     * Returns validators for TMP_ID field.
     *
     * @return array
     */
    public static function validateTmpId()
    {
    }
    /**
     * Add iblock section.
     *
     * @param array $data			Section data.
     * @return ORM\Data\AddResult
     */
    public static function add(array $data)
    {
    }
    /**
     * Updates iblock section by primary key.
     *
     * @param mixed $primary		Section primary key.
     * @param array $data			Section data.
     * @return ORM\Data\UpdateResult
     */
    public static function update($primary, array $data)
    {
    }
    /**
     * Deletes iblock section by primary key.
     *
     * @param mixed $primary		Section primary key.
     * @return ORM\Data\DeleteResult
     */
    public static function delete($primary)
    {
    }
}