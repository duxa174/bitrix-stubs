<?php

namespace Bitrix\Seo\Analytics;

abstract class Account extends \Bitrix\Seo\Retargeting\Account
{
    /**
     * Get expenses.
     *
     * @param $accountId
     * @param Date|null $dateFrom
     * @param Date|null $dateTo
     * @return Retargeting\Response
     */
    public abstract function getExpenses($accountId, \Bitrix\Main\Type\Date $dateFrom = null, \Bitrix\Main\Type\Date $dateTo = null);
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
     * Return true if it has accounts.
     *
     * @return bool
     */
    public function hasAccounts()
    {
    }
    /**
     * @return bool
     */
    public function hasPublicPages()
    {
    }
    /**
     * @param $accountId
     * @param array $params
     * @param array $publicPageIds
     * @return Result
     */
    public abstract function updateAnalyticParams($accountId, array $params, array $publicPageIds = []);
    /**
     * @param $accountId
     * @return Result
     */
    public function getPublicPages($accountId)
    {
    }
}