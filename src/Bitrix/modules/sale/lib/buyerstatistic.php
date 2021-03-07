<?php

namespace Bitrix\Sale;

class BuyerStatistic
{
    /**
     * Executes the query and returns selection by parameters of the query. This function is an alias to the Query object functions
     *
     * @return Main\DB\Result
     * @throws \Bitrix\Main\ArgumentException
     */
    public static function getList($filter)
    {
    }
    /**
     * Fill statistic for user for certain site and currency.
     * The function'll update values if user entry exists or it'll create new if user entry doesn't exist
     *
     * @param $userId
     * @param $currency
     * @param $lid
     *
     * @return Main\Result
     */
    public static function calculate($userId, $currency, $lid)
    {
    }
    /**
     * Collect statistic (last order date, count of full paid orders, count of partially paid orders and sum of paid payments) for user, certain site and currency.
     *
     * @param $userId
     * @param $currency
     * @param $lid
     *
     * @return Result
     */
    protected static function collectUserData($userId, $currency, $lid)
    {
    }
}