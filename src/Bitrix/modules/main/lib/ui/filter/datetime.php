<?php

namespace Bitrix\Main\UI\Filter;

class DateTime
{
    /** @var MainType\Date */
    protected $date;
    /** @var MainType\DateTime */
    protected $dateTime;
    /** @var ?number */
    protected $timestamp;
    /**
     * DateTime constructor.
     * @param string $timestamp
     */
    public function __construct($timestamp = "")
    {
    }
    /**
     * Adjusts time relative current timezone offset
     * @param MainType\DateTime $dateTime
     * @return int timestamp
     */
    public static function adjustTime(\Bitrix\Main\Type\DateTime $dateTime)
    {
    }
    /**
     * Gets month from date
     * @return string
     */
    public function month()
    {
    }
    /**
     * Gets year
     * @return string
     */
    public function year()
    {
    }
    /**
     * Gets quarter number
     * @return int
     */
    public function quarter()
    {
    }
    /**
     * Gets quarter start datetime
     * @return string
     */
    public function quarterStart()
    {
    }
    /**
     * Gets quarter end dateTime
     * @return string
     */
    public function quarterEnd()
    {
    }
    /**
     * Gets datetime string with offset.
     * @param string $offset
     * @return string
     */
    public function offset($offset)
    {
    }
    /**
     * Gets datetime string
     * @return string
     */
    public function toString()
    {
    }
    /**
     * Gets timestamp
     * @return number
     */
    public function getTimestamp()
    {
    }
}