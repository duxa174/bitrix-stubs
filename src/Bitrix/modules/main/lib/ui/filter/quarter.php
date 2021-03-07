<?php

namespace Bitrix\Main\UI\Filter;

/**
 * Works with quarters
 * @package Bitrix\Main\UI\Filter
 */
class Quarter
{
    const Q1 = 1;
    const Q2 = 2;
    const Q3 = 3;
    const Q4 = 4;
    const Q1_START = 1;
    const Q1_END = 3;
    const Q2_START = 4;
    const Q2_END = 6;
    const Q3_START = 7;
    const Q3_END = 9;
    const Q4_START = 10;
    const Q4_END = 12;
    /**
     * Gets current number of quarter
     * @return int
     */
    public static function getCurrent()
    {
    }
    /**
     * Gets number of quarter by Bitrix\Main\Type\Date object
     * @param Date $date
     * @return int
     */
    public static function get(\Bitrix\Main\Type\Date $date)
    {
    }
    /**
     * Gets start date of quarter
     * @param int $quarter
     * @param int $year
     * @return string
     */
    public static function getStartDate($quarter, $year)
    {
    }
    /**
     * Gets end date of quarter
     * @param int $quarter
     * @param int $year
     * @return string
     */
    public static function getEndDate($quarter, $year)
    {
    }
}