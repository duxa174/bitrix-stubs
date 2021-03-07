<?php

namespace Bitrix\Im\Model;

/**
 * Class AppTable
 * 
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> MODULE_ID string(50) mandatory
 * <li> BOT_ID int optional
 * <li> APP_ID string(128) optional
 * <li> CODE string(255) mandatory
 * <li> ICON_FILE_ID string(255) mandatory
 * <li> CONTEXT string(128) optional
 * <li> IFRAME string(255) optional
 * <li> IFRAME_WIDTH int optional
 * <li> IFRAME_HEIGHT int optional
 * <li> IFRAME_POPUP bool optional default 'N'
 * <li> JS string(255) optional
 * <li> HIDDEN bool optional default 'N'
 * <li> EXTRANET_SUPPORT bool optional default 'N'
 * <li> LIVECHAT_SUPPORT bool optional default 'N'
 * <li> CLASS string(255) optional
 * <li> METHOD_LANG_GET string(255) optional
 * </ul>
 *
 * @package Bitrix\Im
 **/
class AppTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for MODULE_ID field.
     *
     * @return array
     */
    public static function validateModuleId()
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
     * Returns validators for HASH field.
     *
     * @return array
     */
    public static function validateHash()
    {
    }
    /**
     * Returns validators for CODE field.
     *
     * @return array
     */
    public static function validateIconCode()
    {
    }
    /**
     * Returns validators for ICON_FILE_ID field.
     *
     * @return array
     */
    public static function validateIconFileId()
    {
    }
    /**
     * Returns validators for CONTEXT field.
     *
     * @return array
     */
    public static function validateContext()
    {
    }
    /**
     * Returns validators for IFRAME field.
     *
     * @return array
     */
    public static function validateIframe()
    {
    }
    /**
     * Returns validators for JS field.
     *
     * @return array
     */
    public static function validateJs()
    {
    }
    /**
     * Returns validators for CLASS field.
     *
     * @return array
     */
    public static function validateClass()
    {
    }
    /**
     * Returns validators for METHOD_LANG_GET field.
     *
     * @return array
     */
    public static function validateMethodLangGet()
    {
    }
}