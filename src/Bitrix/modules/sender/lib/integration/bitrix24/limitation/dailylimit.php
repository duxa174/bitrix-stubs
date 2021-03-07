<?php

namespace Bitrix\Sender\Integration\Bitrix24\Limitation;

/**
 * Class DailyLimit
 * @package Bitrix\Sender\Integration\Bitrix24\Limitation
 */
class DailyLimit
{
    /**	@var static $instance Instance */
    protected static $instance;
    /**
     * Return true if installation is portal.
     *
     * @return static
     */
    public static function instance()
    {
    }
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get current.
     *
     * @return integer
     */
    public function getCurrent()
    {
    }
    /**
     * Get limit.
     *
     * @return integer
     */
    public function getLimit()
    {
    }
    /**
     * Set limit.
     *
     * @param int $limit Limit.
     * @return void
     */
    public function setLimit($limit)
    {
    }
    /**
     * Increment sent mails.
     *
     * @return void
     */
    public static function increment()
    {
    }
    /**
     * Increment error mails.
     *
     * @return void
     */
    public static function incrementError()
    {
    }
}