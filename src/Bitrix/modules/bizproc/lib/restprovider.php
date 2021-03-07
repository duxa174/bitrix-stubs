<?php

namespace Bitrix\Bizproc;

/**
 * Class RestProviderTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> APP_ID string(128) mandatory
 * <li> APP_NAME text mandatory
 * <li> CODE string(128) mandatory
 * <li> TYPE(30) string mandatory
 * <li> HANDLER string(1000) mandatory
 * <li> NAME text mandatory
 * <li> DESCRIPTION text optional
 * </ul>
 *
 * @package Bitrix\Bizproc
 */
class RestProviderTable extends \Bitrix\Main\Entity\DataManager
{
    const TYPE_SMS = 'SMS';
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
     * Returns validators for TYPE field.
     *
     * @return array
     */
    public static function validateType()
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
    /**
     * Get supported provider types.
     * @return array
     */
    public static function getTypesList()
    {
    }
}