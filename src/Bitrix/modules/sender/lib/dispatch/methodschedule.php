<?php

namespace Bitrix\Sender\Dispatch;

class MethodSchedule implements \Bitrix\Sender\Dispatch\iMethod
{
    /** @var integer[] $monthsOfYear Months. */
    protected $monthsOfYear = array();
    /** @var integer[] $daysOfMonth Days. */
    protected $daysOfMonth = array();
    /** @var integer[] $daysOfWeek Week days. */
    protected $daysOfWeek = array();
    /** @var integer $hours Hour. */
    protected $hours = 0;
    /** @var integer $minutes Minutes. */
    protected $minutes = 0;
    /** @var Entity\Letter $letter Letter. */
    private $letter;
    /**
     * Constructor.
     *
     * @param Entity\Letter $letter Letter.
     */
    public function __construct(\Bitrix\Sender\Entity\Letter $letter)
    {
    }
    /**
     * Set days of month.
     *
     * @param integer[] $days Days.
     * @return $this
     */
    public function setDaysOfMonth(array $days)
    {
    }
    /**
     * Set days of week.
     *
     * @param integer[] $days Days.
     * @return $this
     */
    public function setDaysOfWeek(array $days)
    {
    }
    /**
     * Set month of year.
     *
     * @param integer[] $months Months.
     * @return $this
     */
    public function setMonthsOfYear(array $months)
    {
    }
    /**
     * Set time.
     *
     * @param string $hours Hours.
     * @param string $minutes Minutes.
     * @return $this
     */
    public function setTime($hours, $minutes)
    {
    }
    private function getDateTimeByData(array $months = [], array $days = [])
    {
    }
    private function checkDateTime(\Bitrix\Main\Type\DateTime $date = null)
    {
    }
    private function getDateTime($month = null, $day = null, $nextYear = false)
    {
    }
    /**
     * Get next date.
     *
     * @return DateTime
     * @throws NotImplementedException
     */
    public function getNextDate()
    {
    }
    /**
     * Apply method.
     *
     * @return void
     */
    public function apply()
    {
    }
    /**
     * Revoke method.
     *
     * @return void
     */
    public function revoke()
    {
    }
    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * Parse days of month.
     *
     * @param string $daysOfMonth Days of month.
     * @return array|null
     */
    public static function parseDaysOfMonth($daysOfMonth)
    {
    }
    /**
     * Parse days of week.
     *
     * @param string $daysOfWeek Days of week.
     * @return array|null
     */
    public static function parseDaysOfWeek($daysOfWeek)
    {
    }
    /**
     * Parse months of year.
     *
     * @param string $monthsOfYear Months of year.
     * @return array|null
     */
    public static function parseMonthsOfYear($monthsOfYear)
    {
    }
    /**
     * Parse times of day.
     *
     * @param string $time Time.
     * @return array|null
     */
    public static function parseTimesOfDay($time)
    {
    }
    /**
     * Get time list.
     *
     * @return array
     */
    public static function getTimeList()
    {
    }
}