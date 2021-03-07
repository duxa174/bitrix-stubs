<?php

class CSaleDiscountCouponMailComponent extends \CBitrixComponent
{
    const DAY_LIMIT_TYPE = 'days';
    const WEEK_LIMIT_TYPE = 'weeks';
    const MONTH_LIMIT_TYPE = 'months';
    protected $isNewDiscount = \false;
    /**
     * @param $params
     * @override
     * @return array
     */
    public function onPrepareComponentParams($params)
    {
    }
    /**
     * @override
     * @throws Exception
     */
    protected function checkModules()
    {
    }
    /**
     * @param $type
     *
     * @return bool
     */
    protected function checkTypeLimit($type)
    {
    }
    /**
     * @override
     * @throws Exception
     */
    protected function prepareData()
    {
    }
    /**
     * @return int
     */
    protected function getDiscountId()
    {
    }
    /**
     * Start Component
     */
    public function executeComponent()
    {
    }
}