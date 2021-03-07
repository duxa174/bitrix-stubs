<?php

namespace Bitrix\Seo\Engine;

/**
 * Class YandexDirectLive
 *
 * @deprecated
 */
class YandexDirectLive extends \Bitrix\Seo\Engine\YandexDirect implements \Bitrix\Seo\IEngine
{
    const API_URL = YANDEX_DIRECT_LIVE_API_URL;
    const METHOD_STAT_BANNER = 'GetBannersStat';
    const MAX_STAT_DAYS_DELTA = 7;
    const ERROR_WRONG_CURRENCY = 245;
    public $allowedCurrency = array('RUB', 'CHF', 'EUR', 'KZT', 'TRY', 'UAH', 'USD');
    /**
     * Sends request for banner stats.
     *
     * @param array $params Stats query params.
     *
     * @return array
     * @throws YandexDirectException
     * @throws \Bitrix\Main\SystemException
     *
     * @see https://tech.yandex.ru/direct/doc/dg-v4/live/GetBannersStat-docpage/
     */
    public function getBannerStats(array $params)
    {
    }
}