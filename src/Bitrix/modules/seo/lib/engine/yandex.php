<?php

namespace Bitrix\Seo\Engine;

class Yandex extends \Bitrix\Seo\Engine\YandexBase implements \Bitrix\Seo\IEngine
{
    const ENGINE_ID = 'yandex';
    const SERVICE_URL = "https://webmaster.yandex.ru/api/v2";
    const API_BASE_URL = "https://api.webmaster.yandex.net/v3/user/";
    const API_HOSTS_URL = "hosts/";
    const API_SUMMARY_URL = "summary/";
    const API_SAMPLES_URL = "links/external/samples/";
    const API_POPULAR_URL = "search-queries/popular/";
    const API_VERIFICATION_URL = "verification/";
    const API_ORIGINAL_TEXTS_URL = "original-texts/";
    const HOSTS_SERVICE = "host-list";
    const HOST_VERIFY = "verify-host";
    const HOST_INFO = "host-information";
    const HOST_TOP_QUERIES = "top-queries";
    const HOST_ORIGINAL_TEXTS = "original-texts";
    const HOST_INDEXED = "indexed-urls";
    const HOST_EXCLUDED = "excluded-urls";
    const ORIGINAL_TEXT_MIN_LENGTH = 500;
    const ORIGINAL_TEXT_MAX_LENGTH = 32000;
    const ORIGINAL_TEXT_SHOW_COUNT = 50;
    const QUERY_USER = 'https://login.yandex.ru/info';
    const VERIFIED_STATE_VERIFIED = "VERIFIED";
    const VERIFIED_STATE_WAITING = "WAITING";
    const VERIFIED_STATE_FAILED = "VERIFICATION_FAILED";
    const VERIFIED_STATE_NEVER_VERIFIED = "NEVER_VERIFIED";
    const VERIFIED_STATE_IN_PROGRESS = "IN_PROGRESS";
    const INDEXING_STATE_OK = "OK";
    private static $verificationTypes = array('DNS', 'HTML_FILE', 'META_TAG', 'WHOIS', 'TXT_FILE');
    protected $engineId = 'yandex';
    protected $arServiceList = array();
    private $userId = NULL;
    private $hostIds = array();
    public function __construct()
    {
    }
    /**
     * Construct URL of service for REST request.
     * Glue base URL and params: user ID, host ID, service name and additional url-params
     * @param null $userId
     * @param null $hostId
     * @param null $service
     * @param null $params
     * @return string
     */
    private function getServiceUrl($userId = NULL, $hostId = NULL, $service = NULL, $params = NULL)
    {
    }
    // temporary hack
    public function getAuthSettings()
    {
    }
    /**
     * For webmaster API v3 we can use host_id instead URL. Request them onec and then them save in local variable.
     *
     * @param $domain - URL of domain
     * @return mixed
     */
    private function getHostId($domain)
    {
    }
    public function getFeeds()
    {
    }
    /**
     * Collect info about site by two different methods: info and statistic
     * @param $domain
     * @return array
     */
    public function getSiteInfo($domain)
    {
    }
    private function getSiteInfoGeneral($domain)
    {
    }
    private function getSiteInfoStats($domain)
    {
    }
    //	todo: we can add info about external links like a popular queries
    /**
     * Get info about popular queries for domain
     * @param $domain - URL of domain
     * @return array
     * @throws YandexException
     */
    public function getSiteInfoQueries($domain)
    {
    }
    private function processHosts()
    {
    }
    public function getOriginalTexts($domain)
    {
    }
    /**
     * Need to collect all items throuth limits
     *
     * @param $hostId
     * @param $params
     * @return mixed
     * @throws YandexException
     */
    private function getOriginalTextsRecursive($hostId, $params)
    {
    }
    /**
     * Send original text to webmaster
     *
     * @param $text
     * @param $domain
     * @return string
     * @throws YandexException
     */
    public function addOriginalText($text, $domain)
    {
    }
    /**
     * Add site to webmaster. After adding you need verify rights at this site.
     *
     * @param $domain
     * @return array
     * @throws YandexException
     */
    public function addSite($domain)
    {
    }
    /**
     * Just checking verify status of site and get UIN for verification
     * @param $domain
     * @return UIN if site not verified and FALSE if site already verify.
     * @throws YandexException
     */
    public function getVerifySiteUin($domain)
    {
    }
    public function verifySite($domain, $verType = 'HTML_FILE')
    {
    }
    /**
     * @deprecated by query
     * @param $scope
     * @param string $method
     * @param null $data
     * @param bool $skipRefreshAuth
     * @return \CHTTP
     */
    protected function queryOld($scope, $method = "GET", $data = NULL, $skipRefreshAuth = false)
    {
    }
    /**
     * Create HTTP client, set necessary headers and set request
     *
     * @param $scope - URL of service with additional params, if needed
     * @param string $method - may be POST, GET or DELETE
     * @param null $data
     * @param bool $skipRefreshAuth
     * @return HttpClient
     */
    protected function query($scope, $method = "GET", $data = NULL, $skipRefreshAuth = false)
    {
    }
}