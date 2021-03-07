<?php

namespace Bitrix\Rest\Preset;

/**
 * Class IntegrationTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ELEMENT_CODE string(256) mandatory
 * <li> TITLE string(256) mandatory
 * <li> METHOD string(64) optional
 * <li> PASSWORD_ID int optional
 * <li> SCOPE string optional
 * <li> QUERY string optional
 * <li> OUTGOING_EVENTS string optional
 * <li> OUTGOING_NEEDED string(1) optional
 * <li> WIDGET_NEEDED string(1) optional
 * <li> WIDGET_HANDLER_URL string(2048) optional
 * <li> WIDGET_LIST string optional
 * <li> APPLICATION_TOKEN string(50) optional
 * <li> APPLICATION_NEEDED string(1) optional
 * <li> BOT_ID int optional
 * <li> BOT_HANDLER_URL string optional
 * </ul>
 *
 **/
class IntegrationTable extends \Bitrix\Main\Entity\DataManager
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
     * Returns validators for USER_ID field.
     *
     * @return array
     */
    public static function validateUser()
    {
    }
    /**
     * Returns validators for ELEMENT_CODE field.
     *
     * @return array
     */
    public static function validateElementCode()
    {
    }
    /**
     * Returns validators for TITLE field.
     *
     * @return array
     */
    public static function validateTitle()
    {
    }
    /**
     * Returns validators for PASSWORD_ID field.
     *
     * @return array
     */
    public static function validatePassword()
    {
    }
    /**
     * Returns validators for APP_ID field.
     *
     * @return array
     */
    public static function validateApp()
    {
    }
    /**
     * Returns validators for OUTGOING_NEEDED field.
     *
     * @return array
     */
    public static function validateOutgoingQueryNeeded()
    {
    }
    /**
     * Returns validators for OUTGOING_HANDLER_URL field.
     *
     * @return array
     */
    public static function validateOutgoingHandlerUrl()
    {
    }
    /**
     * Returns validators for WIDGET_NEEDED field.
     *
     * @return array
     */
    public static function validateWidgetNeeded()
    {
    }
    /**
     * Returns validators for WIDGET_HANDLER_URL field.
     *
     * @return array
     */
    public static function validateWidgetHandlerUrl()
    {
    }
    /**
     * Returns validators for APPLICATION_TOKEN field.
     *
     * @return array
     */
    public static function validateApplicationToken()
    {
    }
    /**
     * Returns validators for APPLICATION_NEEDED field.
     *
     * @return array
     */
    public static function validateApplicationNeeded()
    {
    }
    /**
     * Returns validators for APPLICATION_ONLY_API field.
     *
     * @return array
     */
    public static function validateApplicationOnlyApi()
    {
    }
    /**
     * Returns validators for BOT_HANDLER_URL field.
     *
     * @return array
     */
    public static function validateBotHandlerUrl()
    {
    }
}