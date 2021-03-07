<?php

namespace Bitrix\Sale\Internals;

class SiteCurrencyTable extends \Bitrix\Main\Entity\DataManager
{
    private static $cache = array();
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    /**
     * Returns site currency data.
     *
     * @param string $siteId		Site id.
     * @return bool|array
     */
    public static function getCurrency($siteId)
    {
    }
    /**
     * Returns site currency.
     *
     * @param string $siteId				Site id.
     * @return string
     */
    public static function getSiteCurrency($siteId)
    {
    }
    public static function onAfterAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onAfterUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    public static function onAfterDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
}