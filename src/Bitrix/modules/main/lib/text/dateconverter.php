<?php

namespace Bitrix\Main\Text;

class DateConverter
{
    /**
     * Creates Date object from Text (return array of result object)
     * 
     * Examples: "end of next week", "tomorrow morning", "friday 25.10"
     *
     * @param string $text
     * @param integer $limit
     * @return \Bitrix\Main\Text\DateConverterResult[]
     */
    public static function decode($text, $limit = 0)
    {
    }
    /**
     * Creates Date object from metrics (private method for self::decode)
     *
     * @param int $type Type of metric
     * @param array $metric Params of metric
     * @param array $metricModificator List of metric modificators
     * @param \Bitrix\Main\Type\DateTime $date If not specified, the modified date is got from the current date.
     * @return \Bitrix\Main\Type\DateTime
     *
     */
    private static function createDateUsingMetrics($type, $metric, &$metricModificator = array(), \Bitrix\Main\Type\DateTime $date = null)
    {
    }
    /**
     * Creates Date object of the day of the method week (private function for self::createDateUsingMetrics)
     *
     * @param string $nameOfday name of the day (monday, tuesday, etc)
     * @param \Bitrix\Main\Type\DateTime $date If not specified, the modified date is got from the current date.
     * @return \Bitrix\Main\Type\DateTime
     *
     */
    private static function getDateOfDayOfCurrentWeek($nameOfday, \Bitrix\Main\Type\DateTime $date = null)
    {
    }
    /**
     * @param $text
     * @param $position
     * @return string
     */
    private static function getMatchWord($text, $position)
    {
    }
    private static function getTextForReplace($text, $metrics, $metricModifier)
    {
    }
    private static function checkModifierPosition($metrics, $metricModifier)
    {
    }
    private static function findFirstOccurrence($haystack, $needle, $offset = 0)
    {
    }
}