<?php

namespace Bitrix\Main\Service\GeoIp;

/**
 * Class SypexGeo
 * @package Bitrix\Main\Service\GeoIp
 * @link http://sypexgeo.net
 */
final class SypexGeo extends \Bitrix\Main\Service\GeoIp\Base
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
     * @param string $ip Ip address
     * @param string $key license key.
     * @return Main\Result
     */
    protected function sendRequest($ip, $key)
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
     * @param string $ip Ip address
     * @param string $lang Language identifier
     * @return Result | null
     */
    public function getDataResult($ip, $lang = '')
    {
    }
    /**
     * @param array $postFields $_POST
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