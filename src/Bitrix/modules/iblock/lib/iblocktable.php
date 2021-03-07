<?php

namespace Bitrix\Iblock;

/**
 * Class IblockTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> TIMESTAMP_X datetime
 * <li> IBLOCK_TYPE_ID string(50) mandatory
 * <li> CODE string(50) optional
 * <li> NAME string(255) mandatory
 * <li> ACTIVE bool optional default 'Y'
 * <li> SORT int optional default 500
 * <li> LIST_PAGE_URL string(255) optional
 * <li> DETAIL_PAGE_URL string(255) optional
 * <li> SECTION_PAGE_URL string(255) optional
 * <li> CANONICAL_PAGE_URL string(255) optional
 * <li> PICTURE int optional
 * <li> DESCRIPTION text optional
 * <li> DESCRIPTION_TYPE enum ('text', 'html') optional default 'text'
 * <li> XML_ID string(255) optional
 * <li> TMP_ID string(40) optional <b>internal use only</b>
 * <li> INDEX_ELEMENT bool optional default 'Y'
 * <li> INDEX_SECTION bool optional default 'N'
 * <li> WORKFLOW bool optional default 'Y'
 * <li> BIZPROC bool optional default 'N'
 * <li> SECTION_CHOOSER enum ('L', 'D' or 'P') optional default 'L'
 * <li> LIST_MODE enum ('S' or 'C') optional default ''
 * <li> RIGHTS_MODE enum ('S' or 'E') optional default 'S'
 * <li> SECTION_PROPERTY bool optional default 'N'
 * <li> PROPERTY_INDEX enum ('N', 'Y', 'I') optional default 'N'
 * <li> VERSION enum (1 or 2) optional default 1
 * <li> LAST_CONV_ELEMENT int optional default 0 <b>internal use only</b>
 * <li> SOCNET_GROUP_ID int optional <b>internal use only</b>
 * <li> EDIT_FILE_BEFORE string(255) optional
 * <li> EDIT_FILE_AFTER string(255) optional
 * <li> TYPE reference to {@link \Bitrix\Iblock\TypeTable}
 * </ul>
 *
 * @package Bitrix\Iblock
 */
class IblockTable extends \Bitrix\Main\ORM\Data\DataManager
{
    const PROPERTY_STORAGE_COMMON = 1;
    const PROPERTY_STORAGE_SEPARATE = 2;
    const RIGHTS_SIMPLE = 'S';
    const RIGHTS_EXTENDED = 'E';
    const PROPERTY_INDEX_DISABLE = 'N';
    const PROPERTY_INDEX_ENABLE = 'Y';
    const PROPERTY_INDEX_INVALID = 'I';
    const LIST_MODE_SEPARATE = 'S';
    const LIST_MODE_COMBINED = 'C';
    const SECTION_CHOOSER_SELECT = 'L';
    const SECTION_CHOOSER_DROPDOWNS = 'D';
    const SECTION_CHOOSER_PATH = 'P';
    /* deprecated constants */
    const SELECT = self::SECTION_CHOOSER_SELECT;
    const DROPDOWNS = self::SECTION_CHOOSER_DROPDOWNS;
    const PATH = self::SECTION_CHOOSER_PATH;
    const SIMPLE = self::RIGHTS_SIMPLE;
    const EXTENDED = self::RIGHTS_EXTENDED;
    const SEPARATE = self::LIST_MODE_SEPARATE;
    const COMBINED = self::LIST_MODE_COMBINED;
    const INVALID = self::PROPERTY_INDEX_INVALID;
    const DATA_CLASS_NAMESPACE = 'Bitrix\\Iblock\\Elements';
    const DATA_CLASS_PREFIX = 'Element';
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
     * @throws \Bitrix\Main\SystemException
     */
    public static function getMap()
    {
    }
    /**
     * @param int|Iblock $iblockApiCode
     *
     * @return ElementEntity|false
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function compileEntity($iblockApiCode)
    {
    }
    /**
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    public static function compileAllEntities()
    {
    }
    /**
     * Returns validators for IBLOCK_TYPE_ID field.
     *
     * @return array
     */
    public static function validateIblockTypeId()
    {
    }
    /**
     * Returns validators for LID field.
     *
     * @return array
     */
    public static function validateLid()
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
     * Returns validators for NAME field.
     *
     * @return array
     */
    public static function validateName()
    {
    }
    /**
     * Returns validators for LIST_PAGE_URL field.
     *
     * @return array
     */
    public static function validateListPageUrl()
    {
    }
    /**
     * Returns validators for DETAIL_PAGE_URL field.
     *
     * @return array
     */
    public static function validateDetailPageUrl()
    {
    }
    /**
     * Returns validators for SECTION_PAGE_URL field.
     *
     * @return array
     */
    public static function validateSectionPageUrl()
    {
    }
    /**
     * Returns validators for CANONICAL_PAGE_URL field.
     *
     * @return array
     */
    public static function validateCanonicalPageUrl()
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
     * Returns validators for EDIT_FILE_BEFORE field.
     *
     * @return array
     */
    public static function validateEditFileBefore()
    {
    }
    /**
     * Returns validators for EDIT_FILE_AFTER field.
     *
     * @return array
     */
    public static function validateEditFileAfter()
    {
    }
}