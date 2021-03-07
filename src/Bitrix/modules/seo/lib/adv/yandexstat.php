<?php

namespace Bitrix\Seo\Adv;

/**
 * Class YandexStatTable
 *
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> CAMPAIGN_ID int mandatory
 * <li> BANNER_ID int mandatory
 * <li> DATE_DAY date mandatory
 * <li> SUM double optional
 * <li> SUM_SEARCH double optional
 * <li> SUM_CONTEXT double optional
 * <li> CLICKS int optional
 * <li> CLICKS_SEARCH int optional
 * <li> CLICKS_CONTEXT int optional
 * <li> SHOWS int optional
 * <li> SHOW_SEARCH int optional
 * <li> SHOW_CONTEXT int optional
 * </ul>
 *
 * @package Bitrix\Seo
 **/
class YandexStatTable extends \Bitrix\Main\Entity\DataManager
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
    public static function getBannerStat($bannerId, $dateStart, $dateFinish)
    {
    }
    public static function getCampaignStat($campaignId, $dateStart, $dateFinish)
    {
    }
    public static function loadBannerStat($bannerId, $dateStart, $dateFinish)
    {
    }
    public static function loadCampaignStat($campaignId, $dateStart, $dateFinish)
    {
    }
    protected function loadStat(\Bitrix\Seo\Engine\YandexDirect $directEngine, $campaignXmlId, $dateStart, $dateFinish, $skipCurrency = false)
    {
    }
    protected function processStatsResult($campaignId, array $result, \Bitrix\Seo\Engine\YandexDirect $directEngine)
    {
    }
    public static function getMissedPeriods(array $stats, $dateStart, $dateFinish)
    {
    }
}