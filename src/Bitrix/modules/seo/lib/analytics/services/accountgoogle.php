<?php

namespace Bitrix\Seo\Analytics\Services;

class AccountGoogle extends \Bitrix\Seo\Analytics\Account
{
    const TYPE_CODE = 'google';
    public function getList()
    {
    }
    public function getProfile()
    {
    }
    /**
     * @param $accountId
     * @param Date|null $dateFrom
     * @param Date|null $dateTo
     * @return Retargeting\Response
     */
    public function getExpenses($accountId, \Bitrix\Main\Type\Date $dateFrom = null, \Bitrix\Main\Type\Date $dateTo = null)
    {
    }
    /**
     * Get expenses report.
     *
     * @param $accountId
     * @param Date|null $dateFrom
     * @param Date|null $dateTo
     * @return Result
     * @throws NotImplementedException
     */
    public function getExpensesReport($accountId, \Bitrix\Main\Type\Date $dateFrom = null, \Bitrix\Main\Type\Date $dateTo = null)
    {
    }
    /**
     * Return true if it has expenses report.
     *
     * @return bool
     */
    public function hasExpensesReport()
    {
    }
    /**
     * @param $accountId
     * @param array $params
     * @param array $publicPageIds
     * @return Result
     */
    public function updateAnalyticParams($accountId, array $params, array $publicPageIds = [])
    {
    }
}