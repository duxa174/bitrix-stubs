<?php

namespace Bitrix\Seo\Adv;

/**
 * Class YandexBannerTable
 *
 * Local mirror for Yandex.Direct banners
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ENGINE_ID int mandatory
 * <li> XML_ID string(255) mandatory
 * <li> LAST_UPDATE datetime optional
 * <li> SETTINGS string optional
 * <li> CAMPAIGN_ID int mandatory
 * <li> GROUP_ID int optional - Yandex.Direct supports groups only in Live version, so we add this entity but won't use it right now
 * <li> AUTO_QUANTITY char(1) optional
 * </ul>
 *
 * @package Bitrix\Seo
 **/
class YandexBannerTable extends \Bitrix\Seo\AdvEntity
{
    const ENGINE = 'yandex_direct';
    const MAX_TITLE_LENGTH = 35;
    const MAX_TEXT_LENGTH = 81;
    const CACHE_LIFETIME = 3600;
    const MARKED = 'D';
    private static $engine = null;
    protected static $priorityList = array(-1 => \Bitrix\Seo\Engine\YandexDirect::PRIORITY_LOW, 0 => \Bitrix\Seo\Engine\YandexDirect::PRIORITY_MEDIUM, 1 => \Bitrix\Seo\Engine\YandexDirect::PRIORITY_HIGH);
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
     * Returns link to transport engine object.
     *
     * @return Engine\YandexDirect|null
     */
    public static function getEngine()
    {
    }
    /**
     * Makes fields validation and adds new Yandex.Direct banner.
     *
     * @param Entity\Event $event Event data.
     *
     * @return Entity\EventResult
     *
     * @throws Engine\YandexException
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    public static function onBeforeAdd(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Makes fields validation and updates Yandex.Direct banner.
     *
     * @param Entity\Event $event Event data.
     *
     * @return Entity\EventResult
     *
     * @throws Engine\YandexException
     * @throws Main\ArgumentException
     * @throws Main\ArgumentNullException
     */
    public static function onBeforeUpdate(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Deletes Yandex.Direct banner.
     *
     * @param Entity\Event $event Event data.
     *
     * @return void
     *
     * @throws Engine\YandexException
     * @throws Main\ArgumentException
     */
    public static function onDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Checks banner data before sending it to Yandex.
     *
     * $data array format:
     *
     * <ul>
     * <li>ID
     * <li>XML_ID
     * <li>NAME
     * <li>SETTINGS<ul>
     *    <li>BannerID
     *    <li>CampaignID *
     *    <li>Title *
     *    <li>Text *
     *    <li>Href *
     *    <li>Geo - comma-separated list of yandex location IDs
     *    <li>Phrases *
     *    <li>MinusKeywords
     *  </ul>
     * </ul>
     *
     * @param Engine\YandexDirect $engine Engine object.
     * @param array $data Banner data.
     * @param Entity\EventResult $result Event result object.
     *
     * @return array
     * @see http://api.yandex.ru/direct/doc/reference/CreateOrUpdateBanner.xml
     */
    protected static function createParam(\Bitrix\Seo\Engine\YandexDirect $engine, array $data, \Bitrix\Main\Entity\EventResult $result)
    {
    }
    public static function markStopped(array $idList)
    {
    }
    public static function markResumed(array $idList)
    {
    }
    public static function unMarkStopped(array $idList)
    {
    }
    public static function unMarkResumed(array $idList)
    {
    }
}