<?php

namespace Bitrix\Sender\Runtime;

/**
 * Class Timer
 * @package Bitrix\Sender\Runtime
 */
class Timer
{
    /** @var  integer|null $timeout Timeout. */
    protected $timeout;
    /** @var  integer|null $timeAtStart Time at start. */
    protected $timeAtStart;
    /** @var  integer|null $limit Limit. */
    protected $limit;
    /** @var  integer $current Current. */
    protected $current = 0;
    /** @var  bool $isManualIncrement Limit inc is manual. */
    protected $isManualIncrement = false;
    /**
     * Timer constructor.
     *
     * @param integer|null $timeout Timeout.
     * @param integer|null $limit Limit.
     */
    public function __construct($timeout = null, $limit = null)
    {
    }
    /**
     * Return true if timer is elapsed.
     *
     * @return bool
     */
    public function isElapsed()
    {
    }
    /**
     * Enable manual increment.
     *
     * @return $this
     */
    public function enableManualIncrement()
    {
    }
    /**
     * Increment current value of limit.
     *
     * @return $this
     */
    public function increment()
    {
    }
    /**
     * Set limit.
     *
     * @param integer $limit Limit.
     * @return $this
     */
    public function setLimit($limit)
    {
    }
    /**
     * Set timeout.
     *
     * @param integer $timeout Timeout.
     * @return $this
     */
    public function setTimeout($timeout)
    {
    }
    /**
     * Start time watch.
     *
     * @return $this
     */
    public function startTime()
    {
    }
    /**
     * Check timeout.
     *
     * @return bool
     */
    public function isTimeout()
    {
    }
    /**
     * Check limits.
     *
     * @return bool
     */
    public function isLimitExceeded()
    {
    }
}