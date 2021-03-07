<?php

namespace Bitrix\Seo\Engine;

class Google extends \Bitrix\Seo\Engine implements \Bitrix\Seo\IEngine
{
    const ENGINE_ID = 'google';
    const SCOPE_BASE = 'https://www.googleapis.com/auth/webmasters';
    const SCOPE_USER = 'https://www.googleapis.com/auth/userinfo.profile';
    const SCOPE_VERIFY = 'https://www.googleapis.com/auth/siteverification.verify_only';
    const SCOPE_FEED_SITES = 'sites';
    const SCOPE_FEED_CRAWLISSUES = 'crawlissues/';
    const SCOPE_FEED_MESSAGES = 'messages/';
    const SCOPE_DOMAIN_PROTOCOL = 'http://';
    const QUERY_BASE = 'https://www.googleapis.com/webmasters/v3/';
    const QUERY_USER = 'https://www.googleapis.com/oauth2/v3/userinfo';
    const QUERY_VERIFY = 'https://www.googleapis.com/siteVerification/v1/webResource?verificationMethod=FILE';
    const QUERY_VERIFY_TOKEN = 'https://www.googleapis.com/siteVerification/v1/token';
    protected $engineId = 'google';
    protected $scope = null;
    public function getScope()
    {
    }
    public function getAuthUrl()
    {
    }
    public function getInterface()
    {
    }
    public function setAuthSettings($settings = null)
    {
    }
    public function checkAuthExpired($bGetNew)
    {
    }
    public function refreshAuth()
    {
    }
    public function getAuth($code)
    {
    }
    public function getCurrentUser()
    {
    }
    public function getFeeds()
    {
    }
    public function addSite($domain, $dir = '/')
    {
    }
    public function verifyGetToken($domain, $dir)
    {
    }
    public function verifySite($domain, $dir)
    {
    }
    protected function queryJson($scope, $method = "GET", $data = null, $bSkipRefreshAuth = false)
    {
    }
    protected function query($scope, $method = "GET", $data = null, $bSkipRefreshAuth = false, $contentType = 'application/json')
    {
    }
}