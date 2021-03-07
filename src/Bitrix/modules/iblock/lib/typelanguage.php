<?php

namespace Bitrix\Iblock;

/**
 * Class TypeLanguageTable
 *
 * Fields:
 * <ul>
 * <li> IBLOCK_TYPE_ID string(50) mandatory
 * <li> LANGUAGE_ID char(2) mandatory
 * <li> NAME string(100) mandatory
 * <li> SECTIONS_NAME string(100) optional
 * <li> ELEMENTS_NAME string(100) optional
 * <li> LANGUAGE reference to {@link \Bitrix\Main\Localization\LanguageTable}
 * </ul>
 *
 * @package Bitrix\Iblock
 */
class TypeLanguageTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for IBLOCK_TYPE_ID field.
     *
     * @return array
     */
    public static function validateIblockTypeId()
    {
    }
    /**
     * Returns validators for LANGUAGE_ID field.
     *
     * @return array
     */
    public static function validateLanguageId()
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
     * Returns validators for SECTIONS_NAME field.
     *
     * @return array
     */
    public static function validateSectionsName()
    {
    }
    /**
     * Returns validators for ELEMENTS_NAME field.
     *
     * @return array
     */
    public static function validateElementsName()
    {
    }
    /**
     * Deletes information blocks type messages.
     * and language messages from TypeLanguageTable
     *
     * @param string $iblockTypeId Iblock type identifier.
     *
     * @return \Bitrix\Main\Entity\EventResult
     */
    public static function deleteByIblockTypeId($iblockTypeId)
    {
    }
}