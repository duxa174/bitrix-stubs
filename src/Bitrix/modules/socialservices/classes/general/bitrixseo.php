<?php

class CBitrixSeoOAuthInterface extends \CBitrixServiceOAuthInterface
{
    const SERVICE_ID = "bitrixseo";
    const URL = \BITRIXSEO_URL;
    protected $transport = \null;
    protected $scope = array('seo');
    public function __construct($appID = \false, $appSecret = \false, $code = \false)
    {
    }
    public function getTransport()
    {
    }
    public function getClientInfo()
    {
    }
    public function getClientList()
    {
    }
    public function clearClientAuth($engine, $clientId = \null)
    {
    }
    public function addCampaign($engine, array $campaignParams)
    {
    }
    public function updateCampaign($engine, array $campaignParams)
    {
    }
    public function getCampaign($engine, array $campaignParams)
    {
    }
    public function getCampaignList($engine)
    {
    }
    public function archiveCampaign($engine, $campaignId)
    {
    }
    public function unArchiveCampaign($engine, $campaignId)
    {
    }
    public function resumeCampaign($engine, $campaignId)
    {
    }
    public function stopCampaign($engine, $campaignId)
    {
    }
    public function deleteCampaign($engine, $campaignId)
    {
    }
    public function addBanner($engine, array $bannerParam)
    {
    }
    public function updateBanner($engine, array $bannerParam)
    {
    }
    public function getBannerList($engine, $filter)
    {
    }
    public function moderateBanners($engine, $filter)
    {
    }
    public function stopBanners($engine, $filter)
    {
    }
    public function resumeBanners($engine, $filter)
    {
    }
    public function archiveBanners($engine, $filter)
    {
    }
    public function unArchiveBanners($engine, $filter)
    {
    }
    public function deleteBanners($engine, $filter)
    {
    }
    public function getRegions($engine)
    {
    }
    /**
     * Get yandex direct clients settings and info
     * @param $engine
     * @return bool|mixed
     */
    public function getClientsSettings($engine)
    {
    }
    public function createWordstatReport($engine, $queryData)
    {
    }
    public function deleteWordstatReport($engine, $reportId)
    {
    }
    public function getWordstatReport($engine, $reportId)
    {
    }
    public function getWordstatReportList($engine)
    {
    }
    public function createForecastReport($engine, $queryData)
    {
    }
    public function deleteForecastReport($engine, $reportId)
    {
    }
    public function getForecastReport($engine, $reportId)
    {
    }
    public function getForecastReportList($engine)
    {
    }
    public function getBannerStats($engine, array $params)
    {
    }
}
class CBitrixSeoTransport extends \CBitrixServiceTransport
{
    const METHOD_CLIENT_INFO = 'seo.client.info';
    const METHOD_CLIENT_LIST = 'seo.client.list';
    const METHOD_CLIENT_AUTH_CLEAR = 'seo.client.auth.clear';
    const METHOD_CAMPAIGN_ADD = 'seo.campaign.add';
    const METHOD_CAMPAIGN_UPDATE = 'seo.campaign.update';
    const METHOD_CAMPAIGN_GET = 'seo.campaign.get';
    const METHOD_CAMPAIGN_LIST = 'seo.campaign.list';
    const METHOD_CAMPAIGN_ARCHIVE = 'seo.campaign.archive';
    const METHOD_CAMPAIGN_UNARCHIVE = 'seo.campaign.unarchive';
    const METHOD_CAMPAIGN_RESUME = 'seo.campaign.resume';
    const METHOD_CAMPAIGN_STOP = 'seo.campaign.stop';
    const METHOD_CAMPAIGN_DELETE = 'seo.campaign.delete';
    const METHOD_BANNER_ADD = 'seo.banner.add';
    const METHOD_BANNER_UPDATE = 'seo.banner.update';
    const METHOD_BANNER_LIST = 'seo.banner.list';
    const METHOD_BANNER_MODERATE = 'seo.banner.moderate';
    const METHOD_BANNER_ARCHIVE = 'seo.banner.archive';
    const METHOD_BANNER_UNARCHIVE = 'seo.banner.unarchive';
    const METHOD_BANNER_RESUME = 'seo.banner.resume';
    const METHOD_BANNER_STOP = 'seo.banner.stop';
    const METHOD_BANNER_DELETE = 'seo.banner.delete';
    const METHOD_REGION_GET = 'seo.region.get';
    const METHOD_CLIENTS_GET = 'seo.clients.get';
    const METHOD_REPORT_WORDSTAT_CREATE = 'seo.report.wordstat.create';
    const METHOD_REPORT_WORDSTAT_DELETE = 'seo.report.wordstat.delete';
    const METHOD_REPORT_WORDSTAT_GET = 'seo.report.wordstat.get';
    const METHOD_REPORT_WORDSTAT_LIST = 'seo.report.wordstat.list';
    const METHOD_REPORT_FORECAST_CREATE = 'seo.report.forecast.create';
    const METHOD_REPORT_FORECAST_DELETE = 'seo.report.forecast.delete';
    const METHOD_REPORT_FORECAST_GET = 'seo.report.forecast.get';
    const METHOD_REPORT_FORECAST_LIST = 'seo.report.forecast.list';
    const METHOD_STAT_GET = 'seo.stat.get';
    public function __construct($clientId, $clientSecret)
    {
    }
    public function getClientInfo()
    {
    }
    public function getClientList()
    {
    }
    public function clearClientAuth($engine, $clientId = \null)
    {
    }
}