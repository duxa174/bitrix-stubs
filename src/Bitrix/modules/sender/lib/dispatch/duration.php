<?php

namespace Bitrix\Sender\Dispatch;

/**
 * Class Duration
 * @package Bitrix\Sender\Dispatch
 */
class Duration
{
    /** @var Entity\Letter $letter Letter. */
    private $letter;
    /** @var DurationCountBased $durationCountBased Count based duration. */
    private $durationCountBased;
    /** @var DurationDateBased $durationDateBased Date based duration. */
    private $durationDateBased;
    /**
     * Constructor.
     *
     * @param Entity\Letter $letter Letter.
     */
    public function __construct(\Bitrix\Sender\Entity\Letter $letter)
    {
    }
    /**
     * Get date.
     *
     * @return DateTime
     */
    public function getDate()
    {
    }
    /**
     * Get count.
     *
     * @return integer
     */
    protected function getCount()
    {
    }
    /**
     * Get interval in seconds.
     *
     * @return integer
     */
    public function getInterval()
    {
    }
    /**
     * Get formatted interval.
     *
     * @return string
     */
    public function getFormatted()
    {
    }
    /**
     * Get formatted minimal interval.
     *
     * @return string
     */
    public static function getFormattedMinimalInterval()
    {
    }
    /**
     * Get formatted maximal interval.
     *
     * @return string
     */
    public static function getFormattedMaximalInterval()
    {
    }
    /**
     * Get minimal interval in seconds.
     *
     * @return integer
     */
    public static function getMinimalInterval()
    {
    }
    /**
     * Get maximal interval in seconds.
     *
     * @return integer
     */
    public static function getMaximalInterval()
    {
    }
    /**
     * Get warn interval in seconds.
     *
     * @return integer
     */
    public static function getWarnInterval()
    {
    }
    /**
     * Get formatted interval.
     *
     * @return string
     */
    public function getFormattedInterval()
    {
    }
    /**
     * Format date.
     *
     * @param DateTime $dateTime Date.
     * @return string
     */
    public function format(\Bitrix\Main\Type\DateTime $dateTime = null)
    {
    }
}