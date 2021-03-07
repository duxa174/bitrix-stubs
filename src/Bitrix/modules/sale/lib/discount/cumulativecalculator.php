<?php

namespace Bitrix\Sale\Discount;

final class CumulativeCalculator
{
    const TYPE_ORDER_ARCHIVED = 2;
    const TYPE_ORDER_NON_ARCHIVED = 3;
    const TYPE_COUNT_PERIOD_ALL_TIME = 'all_time';
    const TYPE_COUNT_PERIOD_INTERVAL = 'interval';
    const TYPE_COUNT_PERIOD_RELATIVE = 'relative';
    private $userId;
    private $siteId;
    private $sumConfiguration = array();
    public function __construct($userId, $siteId)
    {
    }
    public function setSumConfiguration(array $sumConfiguration)
    {
    }
    public function calculate()
    {
    }
    private function createFilterBySumConfiguration($sumConfiguration)
    {
    }
    private function sumOrders($filter, $orderType)
    {
    }
}