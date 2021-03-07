<?php

namespace Bitrix\Translate\Controller;

/**
 * Timer class.
 */
class Timer implements \Bitrix\Translate\Controller\ITimeLimit
{
    /** @var int seconds */
    private $timeLimit = 15;
    /** @var float seconds */
    private $startTime = -1;
    /**
     * @param int $timeLimit Timeout in seconds.
     */
    public function __construct($timeLimit = -1)
    {
    }
    /**
     * Start up timer.
     *
     * @param int $startingTime Starting time.
     *
     * @return self
     */
    public function startTimer($startingTime = null)
    {
    }
    /**
     * Tells true if time limit reached.
     *
     * @return boolean
     */
    public function hasTimeLimitReached()
    {
    }
    /**
     * Gets limitation time in seconds.
     * @return int
     */
    public function getTimeLimit()
    {
    }
    /**
     * Sets limitation time in seconds.
     *
     * @param int $timeLimit Timeout in seconds.
     *
     * @return self
     */
    public function setTimeLimit($timeLimit)
    {
    }
}