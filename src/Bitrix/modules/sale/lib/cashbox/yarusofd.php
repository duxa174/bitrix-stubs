<?php

namespace Bitrix\Sale\Cashbox;

/**
 * Class YarusOfd
 * @package Bitrix\Sale\Cashbox
 */
class YarusOfd extends \Bitrix\Sale\Cashbox\Ofd
{
    const HEADER_TOKEN_NAME = 'Ofdapitoken';
    const ACTIVE_URL = 'https://api.ofd-ya.ru/ofdapi/v1/getChequeLink';
    const TEST_URL = 'https://testapi.ofd-ya.ru/ofdapi/v1/getChequeLink';
    /**
     * @return string
     */
    protected function getUrl()
    {
    }
    /**
     * @return array
     */
    protected function getLinkParamsMap()
    {
    }
    /**
     * @return string
     */
    public static function getName()
    {
    }
    /**
     * @param $data
     * @return string
     * @throws Main\ArgumentException
     */
    public function generateCheckLink($data)
    {
    }
    /**
     * @param $data
     * @return mixed
     * @throws Main\ArgumentException
     */
    private function getQueryString($data)
    {
    }
    /**
     * @param $queryString
     * @return bool|array
     */
    private function sendQuery($queryString)
    {
    }
    /**
     * @return array
     */
    public static function getSettings()
    {
    }
}