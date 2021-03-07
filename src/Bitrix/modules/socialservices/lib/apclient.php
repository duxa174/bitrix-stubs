<?php

namespace Bitrix\Socialservices;

class ApClient
{
    const SERVER_ENCODING = 'utf-8';
    const ERROR_WRONG_ANSWER = 'WRONG_ANWSER';
    const METHOD_BATCH = 'batch';
    const HTTP_SOCKET_TIMEOUT = 10;
    const HTTP_STREAM_TIMEOUT = 10;
    protected $connection = null;
    protected $errorCollection = null;
    protected static $requiredKeys = array('ENDPOINT');
    public static function init()
    {
    }
    public static function initById($connectionId)
    {
    }
    public function __construct(array $connection)
    {
    }
    public function getConnection()
    {
    }
    /**
     * Low-level function for REST method call. Returns method response including paging params and error messages.
     *
     * @param string $methodName Method name.
     * @param array|null $additionalParams Method params.
     *
     * @return bool|mixed
     *
     * @throws ArgumentException
     * @throws ArgumentNullException
     * @throws SystemException
     */
    public function call($methodName, $additionalParams = null)
    {
    }
    public function batch($actions)
    {
    }
    public function getErrorCollection()
    {
    }
    protected function getHttpClient()
    {
    }
    protected function getRequestUrl($methodName)
    {
    }
    protected function prepareRequestData($additionalParams)
    {
    }
    protected function prepareRequest($additionalParams)
    {
    }
    protected function prepareResponse($result)
    {
    }
    protected function checkConnection(array $connection)
    {
    }
}