<?php

namespace Bitrix\Rest\OAuth;

class Client
{
    const SERVICE_URL = BITRIXREST_URL;
    const SERVICE_PATH = "/rest/";
    const METHOD_METHODS = 'methods';
    const METHOD_BATCH = 'batch';
    const METHOD_APPLICATION_ADD = 'application.add';
    const METHOD_APPLICATION_UPDATE = 'application.update';
    const METHOD_APPLICATION_DELETE = 'application.delete';
    const METHOD_APPLICATION_INSTALL = 'application.install';
    const METHOD_APPLICATION_INSTALL_SUBSCRIPTION = 'application.install.subscription';
    const METHOD_APPLICATION_UNINSTALL = 'application.uninstall';
    const METHOD_APPLICATION_STAT = 'application.stat';
    const METHOD_APPLICATION_LIST = 'application.list';
    const METHOD_APPLICATION_USAGE = 'application.usage.add';
    const METHOD_APPLICATION_VERSION_UPDATE = 'application.version.update';
    const METHOD_APPLICATION_VERSION_DELETE = 'application.version.delete';
    const METHOD_REST_AUTHORIZE = 'rest.authorize';
    const METHOD_REST_CHECK = 'rest.check';
    const METHOD_REST_CODE = 'rest.code';
    const METHOD_REST_EVENT_CALL = 'rest.event.call';
    const HTTP_SOCKET_TIMEOUT = 10;
    const HTTP_STREAM_TIMEOUT = 10;
    protected $clientId;
    protected $clientSecret;
    protected $licenseKey;
    public function __construct($clientId, $clientSecret, $licenseKey)
    {
    }
    protected function prepareRequestData($additionalParams)
    {
    }
    protected function prepareRequest($additionalParams, $licenseCheck = false)
    {
    }
    protected function prepareResponse($result)
    {
    }
    protected function getHttpClient()
    {
    }
    protected function getRequestUrl($methodName)
    {
    }
    /**
     * Low-level function for REST method call. Returns method response.
     *
     * @param string $methodName Method name.
     * @param array|null $additionalParams Method params.
     * @param bool|false $licenseCheck Send license key in request (will be sent automatically on verification_needed error).
     *
     * @return bool|mixed
     *
     * @throws SystemException
     */
    public function call($methodName, $additionalParams = null, $licenseCheck = false)
    {
    }
    public function batch($actions)
    {
    }
    public function addApplication(array $applicationSettings)
    {
    }
    public function updateApplication(array $applicationSettings)
    {
    }
    public function deleteApplication(array $applicationSettings)
    {
    }
    public function installApplication(array $applicationSettings)
    {
    }
    public function unInstallApplication(array $applicationSettings)
    {
    }
    public function getAuth($clientId, $scope, array $additionalParams = array())
    {
    }
    public function checkAuth($accessToken)
    {
    }
    public function getCode($clientId, $state, $additionalParams)
    {
    }
    public function getApplicationList()
    {
    }
    public function sendApplicationUsage(array $usage)
    {
    }
    public function sendEvent(array $eventItems)
    {
    }
}