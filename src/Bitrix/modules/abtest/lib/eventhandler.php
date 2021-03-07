<?php

namespace Bitrix\ABTest;

class EventHandler
{
    /**
     * Passes an A/B-test mode string from request to session
     *
     * @return void
     */
    public static function onPageStart()
    {
    }
    /**
     * Defines if site template should be overridden
     * 
     * @param \Bitrix\Main\Event $event Event.
     * @return string|null
     */
    public static function onGetCurrentSiteTemplate(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Defines if page file should be overridden
     * 
     * @param \Bitrix\Main\Event $event Event.
     * @return string|null
     */
    public static function onFileRewrite(\Bitrix\Main\Event $event)
    {
    }
    /**
     * Returns A/B-test related attribute types
     * 
     * @return array
     */
    public static function onGetAttributeTypes()
    {
    }
    /**
     * Sets A/B-test related attributes to conversion context
     * 
     * @param \Bitrix\Conversion\DayContext $conversionContext Conversion context.
     * @return void
     */
    public static function onConversionSetContextAttributes(\Bitrix\Conversion\DayContext $conversionContext)
    {
    }
    /**
     * Adds A/B-test related buttons to Control Panel
     * 
     * @return void
     */
    public static function onPanelCreate()
    {
    }
}