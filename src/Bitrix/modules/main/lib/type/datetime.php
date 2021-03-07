<?php

namespace Bitrix\Main\Type;

class DateTime extends \Bitrix\Main\Type\Date
{
    /**
     * @param string $time String representation of datetime.
     * @param string $format PHP datetime format. If not specified, the format is got from the current culture.
     * @param \DateTimeZone $timezone Optional timezone object.
     *
     * @throws Main\ObjectException
     */
    public function __construct($time = null, $format = null, \DateTimeZone $timezone = null)
    {
    }
    public static function secondsToOffset($seconds)
    {
    }
    /**
     * Converts date to string, using Culture and global timezone settings.
     *
     * @param Context\Culture $culture Culture contains datetime format.
     *
     * @return string
     */
    public function toString(\Bitrix\Main\Context\Culture $culture = null)
    {
    }
    /**
     * Returns timezone object.
     *
     * @return \DateTimeZone
     */
    public function getTimeZone()
    {
    }
    /**
     * Sets timezone object.
     *
     * @param \DateTimeZone $timezone Timezone object.
     *
     * @return DateTime
     */
    public function setTimeZone(\DateTimeZone $timezone)
    {
    }
    /**
     * Sets default timezone.
     *
     * @return DateTime
     */
    public function setDefaultTimeZone()
    {
    }
    /**
     * @param int $hour Hour value.
     * @param int $minute Minute value.
     * @param int $second Second value.
     * @param int $microseconds Microseconds value.
     *
     * @return DateTime
     */
    public function setTime($hour, $minute, $second = 0, $microseconds = 0)
    {
    }
    /**
     * Changes time from server time to user time using global timezone settings.
     *
     * @return DateTime
     */
    public function toUserTime()
    {
    }
    /**
     * Creates DateTime object from local user time using global timezone settings and default culture.
     *
     * @param string $timeString Full or short formatted time.
     *
     * @return DateTime
     */
    public static function createFromUserTime($timeString)
    {
    }
    /**
     * Returns long (including time) date culture format.
     *
     * @param Context\Culture $culture Culture.
     *
     * @return string
     */
    protected static function getCultureFormat(\Bitrix\Main\Context\Culture $culture = null)
    {
    }
    /**
     * Creates DateTime object from PHP \DateTime object.
     *
     * @param \DateTime $datetime Source object.
     *
     * @return static
     */
    public static function createFromPhp(\DateTime $datetime)
    {
    }
    /**
     * Creates DateTime object from Unix timestamp.
     *
     * @param int $timestamp Source timestamp.
     *
     * @return static
     */
    public static function createFromTimestamp($timestamp)
    {
    }
    /**
     * Creates DateTime object from string.
     * NULL will be returned on failure.
     * @param string $timeString Full formatted time.
     * @param string $format PHP datetime format. If not specified, the format is got from the current culture.
     * @return DateTime|null
     */
    public static function tryParse($timeString, $format = null)
    {
    }
}