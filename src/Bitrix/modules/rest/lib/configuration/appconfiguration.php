<?php

namespace Bitrix\Rest\Configuration;

class AppConfiguration
{
    private static $entityList = ['REST_APPLICATION' => 100];
    private static $accessManifest = ['total', 'app'];
    public static function getEntityList()
    {
    }
    public static function getManifestList(\Bitrix\Main\Event $event)
    {
    }
    public static function onEventExportController(\Bitrix\Main\Event $event)
    {
    }
    public static function onEventClearController(\Bitrix\Main\Event $event)
    {
    }
    public static function onEventImportController(\Bitrix\Main\Event $event)
    {
    }
    private static function checkAccessImport(\Bitrix\Main\Event $event)
    {
    }
    /**
     *
     * @param $type string of event
     * @return boolean
     */
    private static function checkRequiredParams($type)
    {
    }
    //region application
    private static function importApp($item)
    {
    }
    private static function clearApp($option)
    {
    }
    public static function exportApp($step, $setting)
    {
    }
    //end region application
}