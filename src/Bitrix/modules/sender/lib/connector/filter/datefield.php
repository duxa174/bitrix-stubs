<?php

namespace Bitrix\Sender\Connector\Filter;

/**
 * Class DateField
 * @package Bitrix\Sender\Connector\Filter
 */
class DateField extends \Bitrix\Sender\Connector\Filter\AbstractField
{
    /**
     * Fetch field value.
     *
     * @param array $filterFields Filter fields.
     * @return array
     */
    public function fetchFieldValue($filterFields)
    {
    }
    /**
     * Apply filter.
     *
     * @param array $filter Filter.
     * @return void
     */
    public function applyFilter(array &$filter = array())
    {
    }
    /**
     * Get date from.
     *
     * @param string|null $defaultValue Default value.
     * @return null|string
     */
    public function getFrom($defaultValue = null)
    {
    }
    /**
     * Get date to.
     *
     * @param string|null $defaultValue Default value.
     * @return null|string
     */
    public function getTo($defaultValue = null)
    {
    }
    /**
     * Get days.
     *
     * @return int[]
     */
    public function getDays()
    {
    }
    /**
     * Get months.
     *
     * @return int[]
     */
    public function getMonths()
    {
    }
    /**
     * Get years.
     *
     * @return int[]
     */
    public function getYears()
    {
    }
    private function getCustomDateData($key)
    {
    }
    private function isMoreThanDaysAgo()
    {
    }
    private function isAfterDays()
    {
    }
    private function getDateDataByKey($key)
    {
    }
    private function getDate($defaultValue = null, $isFrom = true)
    {
    }
    private function isCustomDate()
    {
    }
    private function isAllowYears()
    {
    }
    private function getAllowYearName()
    {
    }
    private function getFilterYearLess($tag, $value, $operation = "=", $fromValue = null)
    {
    }
}