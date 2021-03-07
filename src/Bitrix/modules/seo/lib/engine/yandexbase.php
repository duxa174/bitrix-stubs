<?php

namespace Bitrix\Seo\Engine;

class YandexBase extends \Bitrix\Seo\Engine\BitrixEngine
{
    const QUERY_USER = 'https://login.yandex.ru/info';
    protected $engineId = 'yandex_generic';
    /**
     * Returns URL to authorize app
     *
     * @return string Url
     */
    public function getAuthUrl()
    {
    }
    /**
     * Creates OAuth interface object instance
     *
     * @return \CYandexOAuthInterface
     */
    public function getInterface()
    {
    }
    public function clearSitesSettings()
    {
    }
    public function setAuthSettings($settings = null)
    {
    }
    public function checkAuthExpired()
    {
    }
    public function getAuth($code)
    {
    }
    /**
     * Returns current Yandex user data
     *
     * @return array
     *
     * @throws SystemException
     * @throws YandexException
     */
    public function getCurrentUser()
    {
    }
    /**
     * Returns HttpClient object with query result
     *
     * @param string $scope Url to call
     * @param string $method HTTP method (GET/POST/PUT supported)
     * @param array|null $data Post data
     * @param bool $skipRefreshAuth Skip authorization refresh
     *
     * @returns \Bitrix\Main\Web\HttpClient
     * @throws SystemException
     */
    protected function query($scope, $method = "GET", $data = null, $skipRefreshAuth = false)
    {
    }
    protected function prepareQueryResult(array $result)
    {
    }
}