<?php

namespace Bitrix\Iblock;

/**
 * Class TypeTable
 *
 * Fields:
 * <ul>
 * <li> ID string(50) mandatory
 * <li> SECTIONS bool optional default 'Y'
 * <li> EDIT_FILE_BEFORE string(255) optional
 * <li> EDIT_FILE_AFTER string(255) optional
 * <li> IN_RSS bool optional default 'N'
 * <li> SORT int optional default 500
 * <li> LANG_MESSAGE reference to {@link \Bitrix\Iblock\TypeLanguageTable}
 * </ul>
 *
 * @package Bitrix\Iblock
 */
class TypeTable extends \Bitrix\Main\ORM\Data\DataManager
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
     * Returns validators for ID field.
     *
     * @return array
     * @noinspection PhpUnused
     */
    public static function validateId()
    {
    }
    /**
     * Returns validators for EDIT_FILE_BEFORE field.
     *
     * @return array
     * @noinspection PhpUnused
     */
    public static function validateEditFileBefore()
    {
    }
    /**
     * Returns validators for EDIT_FILE_AFTER field.
     *
     * @return array
     * @noinspection PhpUnused
     */
    public static function validateEditFileAfter()
    {
    }
    public static function onAfterAdd(\Bitrix\Main\ORM\Event $event)
    {
    }
    public static function onAfterUpdate(\Bitrix\Main\ORM\Event $event)
    {
    }
    /**
     * Deletes information blocks of given type
     * and language messages from TypeLanguageTable
     *
     * @param ORM\Event $event Contains information about iblock type being deleted.
     *
     * @return void
     */
    public static function onDelete(\Bitrix\Main\ORM\Event $event)
    {
    }
    private static function cleanCache() : void
    {
    }
}