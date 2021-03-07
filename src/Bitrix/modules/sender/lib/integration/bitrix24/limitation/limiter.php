<?php

namespace Bitrix\Sender\Integration\Bitrix24\Limitation;

/**
 * Class Limiter
 * @package Bitrix\Sender\Integration\Bitrix24\Limitation
 */
class Limiter
{
    /** @var  Transport\iLimiter[] $limiters */
    protected static $limiters;
    /**
     * Return true if installation is portal.
     *
     * @return Transport\iLimiter[]
     */
    public static function getList()
    {
    }
    /**
     * Get monthly limiter percentage.
     *
     * @return int
     */
    public static function getMonthlyLimitPercentage()
    {
    }
    /**
     * Set monthly limiter percentage.
     *
     * @param int $value Value.
     * @return void
     */
    public static function setMonthlyLimitPercentage($value)
    {
    }
    /**
     * Return monthly limiter.
     *
     * @return Transport\CountLimiter
     */
    public static function getMonthly()
    {
    }
    /**
     * Return daily limiter.
     *
     * @return Transport\iLimiter
     */
    protected static function getDaily()
    {
    }
}