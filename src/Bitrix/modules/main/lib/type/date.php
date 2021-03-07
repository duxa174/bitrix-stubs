<?php

namespace Bitrix\Main\Type;

class Date
{
    /** @var \DateTime */
    protected $value;
    /**
     * @param string $date String representation of date.
     * @param string $format PHP date format. If not specified, the format is got from the current culture.
     *
     * @throws Main\ObjectException
     */
    public function __construct($date = null, $format = null)
    {
    }
    /**
     * @param string $format
     * @param string $time
     * @return array|bool
     */
    protected function parse($format, $time)
    {
    }
    /**
     * Formats date value to string.
     *
     * @param string $format PHP date format.
     *
     * @return string
     */
    public function format($format)
    {
    }
    /**
     * Produces the copy of the object.
     *
     * @return void
     */
    public function __clone()
    {
    }
    /**
     * Performs dates arithmetic.
     *
     * Each duration period is represented by an integer value followed by a period
     * designator. If the duration contains time elements, that portion of the
     * specification is preceded by the letter T.
     * Period Designators: Y - years, M - months, D - days, W - weeks, H - hours,
     * M - minutes, S - seconds.
     * Examples: two days - 2D, two seconds - T2S, six years and five minutes - 6YT5M.
     * The unit types must be entered from the largest scale unit on the left to the
     * smallest scale unit on the right.
     * Use first "-" char for negative periods.
     * OR
     * Relative period.
     * Examples: "+5 weeks", "12 day", "-7 weekdays", '3 months - 5 days'
     *
     * @param string $interval Time interval to add.
     *
     * @return $this
     */
    public function add($interval)
    {
    }
    /**
     * Sets the current date of the DateTime object to a different date.
     * @param int $year
     * @param int $month
     * @param int $day
     * 
     * @return $this
     */
    public function setDate($year, $month, $day)
    {
    }
    private function tryToCreateIntervalByDesignators($interval)
    {
    }
    /**
     * Returns Unix timestamp from date.
     *
     * @return int
     */
    public function getTimestamp()
    {
    }
    /**
     * Returns difference between dates.
     *
     * @param DateTime $time
     * @return \DateInterval
     */
    public function getDiff(\Bitrix\Main\Type\DateTime $time)
    {
    }
    /**
     * Converts a date to the string.
     *
     * @param Context\Culture $culture Culture contains date format.
     *
     * @return string
     */
    public function toString(\Bitrix\Main\Context\Culture $culture = null)
    {
    }
    /**
     * Converts a date to the string with default culture format setting.
     *
     * @return string
     */
    public function __toString()
    {
    }
    /**
     * Returns a date format from the culture in the php format.
     *
     * @param Context\Culture $culture Optional culture.
     *
     * @return string
     */
    public static function getFormat(\Bitrix\Main\Context\Culture $culture = null)
    {
    }
    /**
     * Returns short date culture format.
     *
     * @param Context\Culture $culture Culture.
     *
     * @return string
     */
    protected static function getCultureFormat(\Bitrix\Main\Context\Culture $culture = null)
    {
    }
    /**
     * Converts date format from culture to php format.
     *
     * @param string $format Format string.
     *
     * @return mixed
     */
    public static function convertFormatToPhp($format)
    {
    }
    /**
     * Checks the string for correct date (by trying to create Date object).
     *
     * @param string $time String representation of date.
     * @param string $format PHP date format. If not specified, the format is got from the current culture.
     *
     * @return bool
     */
    public static function isCorrect($time, $format = null)
    {
    }
    /**
     * Creates Date object from PHP \DateTime object.
     *
     * @param \DateTime $datetime Source object.
     *
     * @return static
     */
    public static function createFromPhp(\DateTime $datetime)
    {
    }
    /**
     * Creates Date object from Unix timestamp.
     *
     * @param int $timestamp Source timestamp.
     *
     * @return static
     */
    public static function createFromTimestamp($timestamp)
    {
    }
    /**
     * Creates Date object from Text (return array of result object)
     * Examples: "end of next week", "tomorrow morning", "friday 25.10"
     *
     * @param string $text
     * @return DateTime|null
     */
    public static function createFromText($text)
    {
    }
}