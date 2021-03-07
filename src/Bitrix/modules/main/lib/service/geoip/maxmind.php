<?php

namespace Bitrix\Main\Service\GeoIp;

/**
 * Class MaxMind
 * @package Bitrix\Main\Service\GeoIp
 * @link https://www.maxmind.com
 */
final class MaxMind extends \Bitrix\Main\Service\GeoIp\Base
{
    /**
     * @return string Title of handler.
     */
    public function getTitle()
    {
    }
    /**
     * @return string Handler description.
     */
    public function getDescription()
    {
    }
    /**
     * @param string $ipAddress Ip address
     * @param string $userId user identifier obtained from www.maxmind.com
     * @param string $licenseKey
     * @return Main\Result
     */
    protected function sendRequest($ipAddress, $userId, $licenseKey)
    {
    }
    /**
     * @return HttpClient
     */
    protected static function getHttpClient()
    {
    }
    /**
     * Languages supported by handler ISO 639-1
     * @return array
     */
    public function getSupportedLanguages()
    {
    }
    /**
     * @param string $ipAddress Ip address
     * @param string $lang Language identifier
     * @return Result | null
     */
    public function getDataResult($ipAddress, $lang = '')
    {
    }
    /**
     * Is this handler installed and ready for using.
     * @return bool
     */
    public function isInstalled()
    {
    }
    /**
     * @param array $postFields  Admin form posted fields during saving process.
     * @return array Field CONFIG for saving to DB in admin edit form.
     */
    public function createConfigField(array $postFields)
    {
    }
    /**
     * @return array Set of fields description for administration purposes.
     */
    public function getConfigForAdmin()
    {
    }
    /**
     * @return ProvidingData Geolocation information witch handler can return.
     */
    public function getProvidingData()
    {
    }
}