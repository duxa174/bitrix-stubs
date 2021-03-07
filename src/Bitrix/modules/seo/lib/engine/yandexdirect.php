<?php

namespace Bitrix\Seo\Engine;

class YandexDirect extends \Bitrix\Seo\Engine\YandexBase implements \Bitrix\Seo\IEngine
{
    const ENGINE_ID = 'yandex_direct';
    const API_URL = YANDEX_DIRECT_API_URL;
    const METHOD_REGION_GET = 'GetRegions';
    const METHOD_CAMPAIGN_ADD = 'CreateOrUpdateCampaign';
    const METHOD_CAMPAIGN_UPDATE = 'CreateOrUpdateCampaign';
    const METHOD_CAMPAIGN_GET = 'GetCampaignsParams';
    const METHOD_CAMPAIGN_LIST = 'GetCampaignsList';
    const METHOD_CAMPAIGN_ARCHIVE = 'ArchiveCampaign';
    const METHOD_CAMPAIGN_UNARCHIVE = 'UnArchiveCampaign';
    const METHOD_CAMPAIGN_STOP = 'StopCampaign';
    const METHOD_CAMPAIGN_RESUME = 'ResumeCampaign';
    const METHOD_CAMPAIGN_DELETE = 'DeleteCampaign';
    const METHOD_BANNER_ADD = 'CreateOrUpdateBanners';
    const METHOD_BANNER_UPDATE = 'CreateOrUpdateBanners';
    const METHOD_BANNER_LIST = 'GetBanners';
    const METHOD_BANNER_MODERATE = 'ModerateBanners';
    const METHOD_BANNER_STOP = 'StopBanners';
    const METHOD_BANNER_RESUME = 'ResumeBanners';
    const METHOD_BANNER_ARCHIVE = 'ArchiveBanners';
    const METHOD_BANNER_UNARCHIVE = 'UnArchiveBanners';
    const METHOD_BANNER_DELETE = 'DeleteBanners';
    const METHOD_WORDSTAT_REPORT_CREATE = 'CreateNewWordstatReport';
    const METHOD_WORDSTAT_REPORT_DELETE = 'DeleteWordstatReport';
    const METHOD_WORDSTAT_REPORT_GET = 'GetWordstatReport';
    const METHOD_WORDSTAT_REPORT_LIST = 'GetWordstatReportList';
    const METHOD_FORECAST_REPORT_CREATE = 'CreateNewForecast';
    const METHOD_FORECAST_REPORT_DELETE = 'DeleteForecastReport';
    const METHOD_FORECAST_REPORT_GET = 'GetForecast';
    const METHOD_FORECAST_REPORT_LIST = 'GetForecastList';
    const METHOD_STAT_BANNER = 'GetBannersStat';
    const BOOL_YES = "Yes";
    const BOOL_NO = "No";
    const STATUS_NEW = "New";
    const STATUS_PENDING = "Pending";
    const PRIORITY_LOW = "Low";
    const PRIORITY_MEDIUM = "Medium";
    const PRIORITY_HIGH = "High";
    const TTL_WORDSTAT_REPORT = 3600;
    // session report lifetime
    const TTL_WORDSTAT_REPORT_EXT = 18000;
    // yandex report lifetime
    const TTL_FORECAST_REPORT = 3600;
    // session report lifetime
    const TTL_FORECAST_REPORT_EXT = 18000;
    // yandex report lifetime
    const MAX_WORDSTAT_REPORTS = 5;
    const MAX_FORECAST_REPORTS = 5;
    const MAX_CAMPAIGNS_BANNER_UPDATE = 10;
    const ERROR_NOT_FOUND = 27;
    const ERROR_NO_STATS = 2;
    const MAX_STAT_DAYS_DELTA = 7;
    const CAMPAIGN_LIMIT = 100;
    const ERROR_WRONG_CURRENCY = 245;
    const CACHE_DIR = '/seo/yandexdirect/';
    const CACHE_TTL = 86400;
    const CACHE_ID = "yandexdirect_client_cache";
    public $allowedCurrency = array('RUB', 'CHF', 'EUR', 'KZT', 'TRY', 'UAH', 'USD');
    protected $engineId = 'yandex_direct';
    protected $locale = NULL;
    public function __construct()
    {
    }
    public function getCurrentUser()
    {
    }
    /**
     * Sends request to create new campaign
     *
     * @param array $campaignParam Campaign params.
     *
     * @returns string XML_ID for newly created campaign
     * @throws SystemException
     * @throws YandexDirectException
     * @see YandexCampaignTable::createParam
     */
    public function addCampaign(array $campaignParam)
    {
    }
    /**
     * Sends request to update an existing campaign
     *
     * @param array $campaignParam Campaign params.
     *
     * @returns string XML_ID for newly created campaign
     * @throws SystemException
     * @throws YandexDirectException
     * @see YandexCampaignTable::createParam
     */
    public function updateCampaign(array $campaignParam)
    {
    }
    /**
     * Get campaigns by IDs (not all)
     *
     * @param mixed $campaignsId XML_ID or array of XML_IDs
     *
     * @return array with campaign data
     * @throws SystemException
     * @throws YandexDirectException
     */
    public function getCampaign($campaignsId)
    {
    }
    //	get ALL campaigns for current client
    public function getCampaignList()
    {
    }
    public function archiveCampaign($campaignId)
    {
    }
    public function unArchiveCampaign($campaignId)
    {
    }
    public function resumeCampaign($campaignId)
    {
    }
    public function stopCampaign($campaignId)
    {
    }
    public function deleteCampaign($campaignId)
    {
    }
    /**
     * Sends request to create new banner
     *
     * @param array $bannerParam Banner params.
     *
     * @returns string XML_ID for newly created banner
     * @throws SystemException
     * @throws YandexDirectException
     * @see YandexBannerTable::createParam
     */
    public function addBanner(array $bannerParam)
    {
    }
    /**
     * Sends request to update an existing banner
     *
     * @param array $bannerParam Banner params.
     *
     * @returns string XML_ID for newly created banner
     * @throws SystemException
     * @throws YandexDirectException
     * @see YandexBannerTable::createParam
     */
    public function updateBanner(array $bannerParam)
    {
    }
    public function getBanners($bannerId)
    {
    }
    public function getCampaignBanners($campaignId)
    {
    }
    public function moderateBanners($campaignId, array $bannerIDs)
    {
    }
    public function stopBanners($campaignId, array $bannerIDs)
    {
    }
    public function resumeBanners($campaignId, array $bannerIDs)
    {
    }
    public function archiveBanners($campaignId, array $bannerIDs)
    {
    }
    public function unArchiveBanners($campaignId, array $bannerIDs)
    {
    }
    public function deleteBanners($campaignId, array $bannerIDs)
    {
    }
    /**
     * Returns Yandex regions list
     *
     * @return array of regions
     * @throws SystemException
     * @see https://tech.yandex.ru/direct/doc/dg-v4/reference/GetRegions-docpage/
     */
    public function getRegions()
    {
    }
    public function getClientsSettings()
    {
    }
    public function createWordstatReport(array $phrase, $geo = NULL)
    {
    }
    public function deleteWordstatReport($reportId)
    {
    }
    public function getWordstatReport($reportId)
    {
    }
    public function getWordstatReportList()
    {
    }
    public function createForecastReport(array $phrase, $geo = NULL)
    {
    }
    public function deleteForecastReport($reportId)
    {
    }
    public function getForecastReport($reportId)
    {
    }
    public function getForecastReportList()
    {
    }
    /**
     * Sends request for banner stats.
     *
     * @param array $params Stats query params.
     *
     * @return array
     * @throws YandexDirectException
     * @throws \Bitrix\Main\SystemException
     *
     * @see https://tech.yandex.ru/direct/doc/dg-v4/live/GetBannersStat-docpage/
     */
    public function getBannerStats(array $params)
    {
    }
    /**
     * Returns HttpClient object with query result
     *
     * @param string $scope
     * @param string $method Method
     * @param array $param array of query data
     * @param bool $skipRefreshAuth Skip authorization refresh. Doesn't work with Yandex.
     * @return HttpClient
     * @throws SystemException
     * @throws \Exception
     */
    protected function query($scope, $method = "GET", $param = NULL, $skipRefreshAuth = false)
    {
    }
    public function finance_query($method, $masterToken, $operationNum, $param = array(), $skipRefreshAuth = false)
    {
    }
    public function updateCampaignManual($campaignId = NULL)
    {
    }
    public function updateBannersManual($campaignId, $bannerId = NULL)
    {
    }
    public static function updateAgent()
    {
    }
}