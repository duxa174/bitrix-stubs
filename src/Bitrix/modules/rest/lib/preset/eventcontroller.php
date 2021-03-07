<?php

namespace Bitrix\Rest\Preset;

/**
 * Class EventController
 * @package Bitrix\Rest\Preset
 */
class EventController
{
    private static $skipMode = false;
    private static $tmpAppList = [];
    private static $tmpUsesLangAppList = [];
    private static $tmpApList = [];
    private static $tmpApPermissionList = [];
    /**
     * Turn off all event in class.
     * @return bool
     */
    public static function disableEvents()
    {
    }
    /**
     * Turn on all event in class.
     * @return bool
     */
    public static function enableEvents()
    {
    }
    /**
     * Event on after add application. Create integration for external create local application.
     *
     * @param Event $event
     */
    public static function onAddApp(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Event on after add application lang. Create integration for external create local application lang.
     *
     * @param Event $event
     */
    public static function onAddAppLang(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Event on after add out-webhook. Create integration for external create out-webhook.
     *
     * @param Event $event
     */
    public static function onAfterAddEvent(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Event on after add webhook. Create integration for external create webhook.
     *
     * @param Event $event
     */
    public static function onAfterAddAp(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Event on after add webhook permission. Create integration for external create webhook permission.
     *
     * @param Event $event
     */
    public static function onAfterAddApPermission(\Bitrix\Main\Event $event)
    {
    }
}