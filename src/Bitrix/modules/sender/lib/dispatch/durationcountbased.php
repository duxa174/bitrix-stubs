<?php

namespace Bitrix\Sender\Dispatch;

/**
 * Class DurationCountBased
 * @package Bitrix\Sender\Dispatch
 */
class DurationCountBased
{
    /** @var Message\Adapter $message Message. */
    private $message;
    /** @var integer $count Count. */
    private $count;
    /**
     * Create instance.
     *
     * @param Message\Adapter $message Message.
     *
     * @return static
     */
    public static function create(\Bitrix\Sender\Message\Adapter $message)
    {
    }
    /**
     * Constructor.
     *
     * @param Message\Adapter $message Message.
     */
    public function __construct(\Bitrix\Sender\Message\Adapter $message)
    {
    }
    /**
     * Get interval in seconds.
     *
     * @param integer $count Count.
     * @return integer
     */
    public function getInterval($count)
    {
    }
    /**
     * Get interval in seconds.
     *
     * @param integer $count Count.
     * @return integer
     */
    public function getIntervalDefault($count)
    {
    }
    protected function getLimitUnit(\Bitrix\Sender\Transport\iLimiter $limiter)
    {
    }
    protected function getLimitTimeouts(\Bitrix\Sender\Transport\iLimiter $limiter)
    {
    }
    protected function getLimiters()
    {
    }
}