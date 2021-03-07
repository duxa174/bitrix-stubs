<?php

namespace Bitrix\Seo\Analytics\Services;

class AccountYandex extends \Bitrix\Seo\Analytics\Account implements \Bitrix\Seo\Retargeting\IRequestDirectly
{
    const TYPE_CODE = 'yandex';
    const ERROR_CODE_REPORT_OFFLINE = 100201;
    protected $currency;
    /**
     * Get list.
     *
     * @return Response
     */
    public function getList()
    {
    }
    /**
     * Return true if it has accounts.
     *
     * @return bool
     */
    public function hasAccounts()
    {
    }
    /**
     * @return array|null
     * @throws \Bitrix\Main\ArgumentException
     */
    public function getProfile()
    {
    }
    /**
     * @param $accountId
     * @param Date|null $dateFrom
     * @param Date|null $dateTo
     * @return Response
     */
    public function getExpenses($accountId = null, \Bitrix\Main\Type\Date $dateFrom = null, \Bitrix\Main\Type\Date $dateTo = null)
    {
    }
    /**
     * @param $accountId
     * @param array $params
     * @param array $publicPageIds
     * @return Response
     */
    public function updateAnalyticParams($accountId, array $params, array $publicPageIds = [])
    {
    }
    protected function getCurrency()
    {
    }
    /**
     * @param $status
     * @return Error
     */
    protected function getReportErrorByHttpStatus($status)
    {
    }
    /**
     * @param string $data
     * @return array
     */
    protected function parseReportData($data)
    {
    }
    /**
     * @return string
     */
    protected function getYandexServerAdress()
    {
    }
    /**
     * @return string
     */
    protected function getAuthToken()
    {
    }
    /**
     * @return \Bitrix\Seo\Retargeting\AdsHttpClient
     */
    protected function getClient()
    {
    }
}