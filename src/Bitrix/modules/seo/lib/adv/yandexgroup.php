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
 * <li> CAMPAIGN_ID int mandatory
 * </ul>
 *
 * @package Bitrix\Seo
 **/
class YandexGroupTable extends \Bitrix\Seo\AdvEntity
{
    const ENGINE = 'yandex_direct';
    public static function getFilePath()
    {
    }
    public static function getTableName()
    {
    }
    public static function getMap()
    {
    }
}