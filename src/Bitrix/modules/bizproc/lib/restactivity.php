<?php

namespace Bitrix\Bizproc;

/**
 * Class RestActivityTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> APP_ID string(128) mandatory
 * <li> APP_NAME text mandatory
 * <li> CODE string(128) mandatory
 * <li> INTERNAL_CODE(32) string mandatory
 * <li> HANDLER string(1000) mandatory
 * <li> AUTH_USER_ID int optional default 0
 * <li> USE_SUBSCRIPTION bool optional default ''
 * <li> NAME text mandatory
 * <li> DESCRIPTION text optional
 * <li> PROPERTIES text optional
 * <li> RETURN_PROPERTIES text optional
 * <li> DOCUMENT_TYPE text optional
 * <li> FILTER text optional
 * <li> IS_ROBOT bool optional default 'N'
 * </ul>
 *
 * @package Bitrix\Bizproc
 */
class RestActivityTable extends \Bitrix\Main\Entity\DataManager
{
    /**
     * Returns path to the file which contains definition of the class.
     *
     * @return string
     */
    public static function getFilePath()
    {
    }
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
     * Returns validators for APP_ID field.
     *
     * @return array
     */
    public static function validateAppId()
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
     * Returns validators for HANDLER field.
     *
     * @return array
     */
    public static function validateHandler()
    {
    }
    /**
     * @return array Array of callbacks.
     */
    public static function getLocalizationSaveModifiers()
    {
    }
    /**
     * Returns validators for PROPERTIES and RETURN_PROPERTIES fields
     *
     * @return array
     */
    public static function validateProperties()
    {
    }
    /**
     * @param mixed $value Original value.
     * @return array Array to serialize.
     */
    public static function prepareLocalization($value)
    {
    }
    /**
     * @param mixed $field Activity field value.
     * @param string $langId Language ID.
     * @return string
     */
    public static function getLocalization($field, $langId)
    {
    }
}