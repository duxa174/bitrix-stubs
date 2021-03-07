<?php

namespace Bitrix\Seo\Adv;

/**
 * Class YandexCampaignTable
 *
 * Local mirror for Yandex.Direct campaigns
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> ENGINE_ID int mandatory
 * <li> XML_ID string(255) mandatory
 * <li> LAST_UPDATE datetime optional
 * <li> SETTINGS string optional
 * </ul>
 *
 * @package Bitrix\Seo
 **/
class YandexCampaignTable extends \Bitrix\Seo\AdvEntity
{
    const ENGINE = 'yandex_direct';
    const STRATEGY_WEEKLY_BUDGET = 'WeeklyBudget';
    const STRATEGY_WEEKLY_PACKET_OF_CLICKS = 'WeeklyPacketOfClicks';
    const STRATEGY_AVERAGE_CLICK_PRICE = 'AverageClickPrice';
    const MONEY_WARNING_VALUE_DEFAULT = 20;
    const MONEY_WARN_PLACE_INTERVAL_DEFAULT = 30;
    const CACHE_LIFETIME = 3600;
    public static $allowedWarnPlaceIntervalValues = array(15, 30, 60);
    public static $allowedMoneyWarningInterval = array(1, 50);
    public static $supportedStrategy = array("WEEKLY_BUDGET" => self::STRATEGY_WEEKLY_BUDGET, "WEEKLY_PACKET_OF_CLICKS" => self::STRATEGY_WEEKLY_PACKET_OF_CLICKS, "AVERAGE_CLICK_PRICE" => self::STRATEGY_AVERAGE_CLICK_PRICE);
    public static $strategyConfig = array(self::STRATEGY_WEEKLY_BUDGET => array('WeeklySumLimit' => array('type' => 'float', 'mandatory' => true), 'MaxPrice' => array('type' => 'float', 'mandatory' => false)), self::STRATEGY_WEEKLY_PACKET_OF_CLICKS => array('ClicksPerWeek' => array('type' => 'int', 'mandatory' => true), 'MaxPrice' => array('type' => 'float', 'mandatory' => false), 'AveragePrice' => array('type' => 'float', 'mandatory' => false)), self::STRATEGY_AVERAGE_CLICK_PRICE => array('AveragePrice' => array('type' => 'float', 'mandatory' => true), 'WeeklySumLimit' => array('type' => 'float', 'mandatory' => false)));
    private static $engine = null;
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
     * Returns link to transport engine object.
     *
     * @return Engine\YandexDirect|null
     */
    public static function getEngine()
    {
    }
    /**
     * Makes fields validation and adds new Yandex.Direct campaign.
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
     * Makes fields validation and updates Yandex.Direct campaign.
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
     * Deletes Yandex.Direct campaign.
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
     * Deletes all campaign banners.
     *
     * @param Entity\Event $event Event data.
     *
     * @return void
     *
     * @throws Main\ArgumentException
     */
    public static function onAfterDelete(\Bitrix\Main\Entity\Event $event)
    {
    }
    /**
     * Checks campaign data before sending it to Yandex
     *
     * $data array format:
     *
     * <ul>
     * <li>ID
     * <li>XML_ID
     * <li>NAME
     * <li>SETTINGS<ul>
     *    <li>FIO
     *    <li>StartDate
     *    <li>Strategy<ul>
     *        <li>StrategyName
     *        <li>MaxPrice
     *        <li>AveragePrice
     *        <li>WeeklySumLimit
     *        <li>ClicksPerWeek
     *    </ul>
     *    <li>EmailNotification<ul>
     *        <li>Email
     *        <li>WarnPlaceInterval
     *        <li>MoneyWarningValue
     *    </ul>
     *  </ul>
     * </ul>
     *
     * @param Engine\YandexDirect $engine Engine object.
     * @param array $data Campaign data.
     * @param Entity\EventResult $result Event result object.
     *
     * @return array
     * @see http://api.yandex.ru/direct/doc/reference/CreateOrUpdateCampaign.xml
     */
    protected static function createParam(\Bitrix\Seo\Engine\YandexDirect $engine, array $data, \Bitrix\Main\Entity\EventResult $result)
    {
    }
}