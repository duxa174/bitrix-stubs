<?php

namespace Bitrix\Sender\Stat;

class Filter
{
    const PERIOD_WEEK = 7;
    const PERIOD_MONTH = 30;
    const PERIOD_MONTH_3 = 90;
    const PERIOD_MONTH_6 = 180;
    const PERIOD_MONTH_12 = 365;
    protected $values = array('authorId' => null, 'chainId' => null, 'mailingId' => null, 'postingId' => null, 'periodFrom' => null, 'periodTo' => null, 'period' => null);
    public function __construct(array $values = array())
    {
    }
    public function set($name, $value = null)
    {
    }
    public function get($name)
    {
    }
    public function getNames()
    {
    }
    public function getMappedArray(array $map, array $filter = array())
    {
    }
    public function clear()
    {
    }
    protected function setPeriod($period = self::PERIOD_MONTH)
    {
    }
}