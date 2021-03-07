<?php

namespace Bitrix\Sale\TradingPlatform;

/**
 * Class Timer
 * @package Bitrix\Sale\TradingPlatform
 */
class Timer
{
    protected $finishTime;
    protected $timeLimit;
    /**
     * Constructor.
     * @param int $newTimeLimit Timelimit seconds.
     */
    public function __construct($newTimeLimit = 0, $increaseTimeLimit = true)
    {
    }
    /**
     * Checks if time is over.
     * @param int $reserveTime Insurance time.
     * @return bool
     */
    public function check($reserveTime = 0)
    {
    }
}