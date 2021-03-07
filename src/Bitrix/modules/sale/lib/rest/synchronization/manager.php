<?php

namespace Bitrix\Sale\Rest\Synchronization;

class Manager
{
    protected $action;
    protected $handlerExecuted;
    protected $client;
    protected $clientOAuth;
    protected $clientId;
    protected $clientSecret;
    protected $serviceUrl;
    protected $oauthKey;
    protected $accessToken;
    protected $refreshToken;
    /** @var  HttpRequest */
    protected $request;
    protected static $instance = null;
    const B24_APP_GRANT_TYPE = 'refresh_token';
    const ACTION_UNDEFINED = 'undefined';
    const ACTION_DELETED = 'deleted';
    const ACTION_IMPORT = 'import';
    const END_POINT = '/bitrix/services/sale/synchronizer/push.php';
    public static function getInstance()
    {
    }
    public function isActive()
    {
    }
    public function activate()
    {
    }
    public function deactivate()
    {
    }
    public function pushHandlerExecuted($name)
    {
    }
    public function isExecutedHandler($name)
    {
    }
    public function checkDefaultSettings()
    {
    }
    public function getClient()
    {
    }
    public function setSchemeServiceUrl($code)
    {
    }
    public function getSchemeServiceUrl()
    {
    }
    public function setServiceUrl($code)
    {
    }
    public function getServiceUrl()
    {
    }
    public function getClientId()
    {
    }
    public function getClientSecret()
    {
    }
    public function setAccessToken($accessToken)
    {
    }
    public function getAccessToken()
    {
    }
    public function setRefreshToken($refreshToken)
    {
    }
    public function getRefreshToken()
    {
    }
    public function setOauthKey($key)
    {
    }
    public function getOauthKey()
    {
    }
    public function setAction($action)
    {
    }
    public function getAction()
    {
    }
    public function getDefaultDeliverySystemId()
    {
    }
    public function setDefaultDeliverySystemId($code)
    {
    }
    public function getDefaultPaySystemId()
    {
    }
    public function setDefaultPaySystemId($code)
    {
    }
    public function getDefaultSiteId()
    {
    }
    public function setDefaultSiteId($code)
    {
    }
    public function getDefaultPersonTypeId()
    {
    }
    public function setDefaultPersonTypeId($code)
    {
    }
    public function getDefaultOrderStatusId()
    {
    }
    public function setDefaultOrderStatusId($code)
    {
    }
    public function getDefaultDeliveryStatusId()
    {
    }
    public function setDefaultDeliveryStatusId($code)
    {
    }
    public function getTradePlatformsXmlId($siteId)
    {
    }
    public function setTradePlatformsXmlId($siteId, $code)
    {
    }
    public function isMarked()
    {
    }
    public function marked($code)
    {
    }
}