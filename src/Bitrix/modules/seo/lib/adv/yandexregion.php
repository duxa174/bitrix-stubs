<?php

namespace Bitrix\Seo\Adv;

/**
 * Class YandexGroupTable
 *
 * Local mirror for Yandex.Direct banner groups
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ENGINE_ID int mandatory
 * <li> XML_ID string(255) mandatory
 * <li> LAST_UPDATE datetime optional
 * <li> SETTINGS string optional
 * <li> PARENT_ID int optional
 * </ul>
 *
 * @package Bitrix\Seo
 **/
class YandexRegionTable extends \Bitrix\Seo\AdvEntity
{
    const ENGINE = 'yandex_direct';
    const CACHE_LIFETIME = 2592000;
    const OPTION_LAST_UPDATE = 'yandex_direct_region_last_update';
    private static $engine = null;
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
    public static function getEngine()
    {
    }
    public static function getList(array $parameters = array())
    {
    }
    public static function updateDatabase()
    {
    }
    protected static function updateDatabaseItem(array &$regionMap, $regionId)
    {
    }
    protected static function clearDatabase()
    {
    }
    protected static function needDatabaseUpdate()
    {
    }
    public static function setLastUpdate($v = null)
    {
    }
    public static function getLastUpdate()
    {
    }
}