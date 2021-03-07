<?php

namespace Bitrix\Report\VisualConstructor\Fields\Valuable;

/**
 * Class TimePeriod
 * @package Bitrix\Report\VisualConstructor\Fields\Valuable
 */
class TimePeriod extends \Bitrix\Report\VisualConstructor\Fields\Valuable\BaseValuable
{
    const JS_EVENT_ON_SELECT = 'onSelect';
    const FILTER_PERIOD_TIME = 'FILTER';
    const QUARTER_PERIOD_TIME = 'QUARTER';
    const YEAR_PERIOD_TIME = 'YEAR';
    const MONTH_PERIOD_TIME = 'MONTH';
    const THIS_YEAR_PERIOD_TIME = 'THIS_YEAR';
    const THIS_QUARTER_PERIOD_TIME = 'THIS_QUARTER';
    const THIS_MONTH_PERIOD_TIME = 'THIS_MONTH';
    const THIS_DAY_PERIOD_TIME = 'THIS_DAY';
    const LAST_90_DAYS_PERIOD_TIME = 'LAST_90_DAYS';
    const LAST_60_DAYS_PERIOD_TIME = 'LAST_60_DAYS';
    const LAST_30_DAYS_PERIOD_TIME = 'LAST_30_DAYS';
    const LAST_7_DAYS_PERIOD_TIME = 'LAST_7_DAYS';
    const DEFAULT_TIME_PERIOD_TYPE = self::FILTER_PERIOD_TIME;
    const DEFAULT_YEAR_LIST_START = 2017;
    private $filterId;
    /**
     * Time period field constructor.
     *
     * @param string $key Unique Id.
     * @param null $filterId Filter id which value will apply as time period FILTER value.
     */
    public function __construct($key, $filterId = null)
    {
    }
    /**
     * Load field component with label or timeperiod template.
     *
     * @return void
     */
    public function printContent()
    {
    }
    /**
     * @return DateTime[]
     */
    public function getDefaultConfigValue()
    {
    }
    /**
     * @return string
     */
    public function getFilterId()
    {
    }
    /**
     * Fiter id setter.
     *
     * @param string $id Filter id.
     * @return void
     */
    public function setFilterId($id)
    {
    }
    /**
     * Conver value to array which will save in db.
     *
     * @param array $config Configuration which must normalise.
     * @return array
     */
    protected function normalise($config)
    {
    }
    /**
     * Convert field value to array with keys start, end.
     *
     * @return array
     */
    public function getValueAsPeriod()
    {
    }
    /**
     * Conver Filter value to time period  field value.
     *
     * @return array
     */
    private function prepareTimePeriodForFilter()
    {
    }
    /**
     * Prepare time period value for selected quaerter.
     *
     * @param array $value Value of this field.
     * @return array
     */
    private function prepareTimePeriodForQuarter($value)
    {
    }
    /**
     * Prepare time period value for selected year.
     *
     * @param array $value Value of this field.
     * @return array
     */
    private function prepareTimePeriodForYear($value)
    {
    }
    /**
     * Prepare time period value for selected month.
     *
     * @param array $value Value of this field.
     * @return array
     */
    private function prepareTimePeriodForMonth($value)
    {
    }
    /**
     * Return this year diapason.
     *
     * @return array
     */
    private function prepareTimePeriodForThisYear()
    {
    }
    /**
     * Return this month diapason.
     *
     * @return array
     */
    private function prepareTimePeriodForThisMonth()
    {
    }
    /**
     * Return this quarter diapason.
     *
     * @return array
     */
    private function prepareTimePeriodForThisQuarter()
    {
    }
    /**
     * Return date time diapason where exis last $dayCount days.
     *
     * @param int $dayCount Days count existed in returned time diapason.
     * @return array
     */
    private function prepareTimePeriodForLastDays($dayCount = 0)
    {
    }
    /**
     * @return Options
     */
    private function getFilterOptions()
    {
    }
    /**
     * @return string[]
     */
    public function getTypeList()
    {
    }
    /**
     * @return string[] of month with translates.
     */
    public function getMonthList()
    {
    }
    /**
     * @return string[] of quarter.
     */
    public function getQuarterList()
    {
    }
    /**
     * @return string[] of years in time period.
     */
    public function getYearList()
    {
    }
    /**
     * @return string
     */
    public function getValueForHuman()
    {
    }
    /**
     * @return \DateTime
     */
    public function getDateTime()
    {
    }
    /**
     * @return int
     */
    public function getCurrentYear()
    {
    }
    /**
     * @return int
     */
    public function getCurrentMonth()
    {
    }
    /**
     * @return int
     */
    public function getCurrentQuarter()
    {
    }
}