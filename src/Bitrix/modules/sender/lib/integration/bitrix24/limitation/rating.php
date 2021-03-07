<?php

namespace Bitrix\Sender\Integration\Bitrix24\Limitation;

/**
 * Class Rating
 * @package Bitrix\Sender\Integration\Bitrix24\Limitation
 */
class Rating
{
    /** @var int $base Base count of mail. */
    protected static $base = 1000;
    /**
     * Regulate: downgrade or block.
     *
     * @return void
     */
    public static function regulate()
    {
    }
    /**
     * Calculate.
     *
     * @return void
     */
    public static function calculate()
    {
    }
    /**
     * Upgrade.
     *
     * @return void
     */
    public static function upgrade()
    {
    }
    /**
     * Downgrade.
     *
     * @param bool $isNotify Is notify.
     * @return void
     */
    public static function downgrade($isNotify = true)
    {
    }
    /**
     * Block.
     *
     * @return void
     */
    public static function block()
    {
    }
    /**
     * Is blocked.
     *
     * @return bool
     */
    public static function isBlocked()
    {
    }
    /**
     * Get downgrade rate.
     *
     * @return float
     */
    public static function getDownRate()
    {
    }
    /**
     * Get downgrade rate.
     *
     * @return float
     */
    public static function getBlockRate()
    {
    }
    /**
     * Get initial limit.
     *
     * @return int
     */
    public static function getInitialLimit()
    {
    }
    /**
     * Get max limit.
     *
     * @return float
     */
    public static function getMaxLimit()
    {
    }
    /**
     * Get limit multiplier.
     *
     * @return float
     */
    public static function getLimitMultiplier()
    {
    }
    /**
     * Get ratio.
     *
     * @param integer $daysLeft Days left.
     * @return float
     */
    protected static function getRatio($daysLeft = 0)
    {
    }
    /**
     * Get parameter.
     *
     * @param string $name Name.
     * @param mixed $defaultValue Default value.
     * @return mixed
     */
    protected static function getParam($name, $defaultValue = 0)
    {
    }
    /**
     * Set parameter.
     *
     * @param string $name Name.
     * @param mixed $value Value.
     * @return void
     */
    protected static function setParam($name, $value)
    {
    }
    /**
     * Set notify text.
     *
     * @param string $code Code.
     * @return string
     */
    public static function getNotifyText($code)
    {
    }
}