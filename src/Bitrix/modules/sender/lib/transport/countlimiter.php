<?php

namespace Bitrix\Sender\Transport;

/**
 * Class CountLimiter
 * @package Bitrix\Sender\Transport
 */
class CountLimiter implements \Bitrix\Sender\Transport\iLimiter
{
    /** @var string $name Name. */
    private $name;
    /** @var string $caption Caption. */
    private $caption;
    /** @var array $parameters Parameters. */
    private $parameters = array();
    /** @var integer $limit Limit.  */
    private $limit;
    /** @var callable $current Current. */
    private $current;
    /** @var integer $interval Interval. */
    private $interval;
    /** @var string $unit Unit. */
    private $unit;
    /** @var string $unit Unit. */
    private $unitName;
    /**
     * Create instance.
     *
     * @return static
     */
    public static function create()
    {
    }
    private static function parseUnit($unit)
    {
    }
    /**
     * Create unit interval.
     *
     * @param string $unit Unit.
     * @return integer
     */
    public static function getUnitInterval($unit)
    {
    }
    /**
     * Limitation constructor.
     */
    public function __construct()
    {
    }
    /**
     * With name.
     *
     * @param string $name Name.
     * @return $this
     */
    public function withName($name)
    {
    }
    /**
     * With caption.
     *
     * @param string $caption Caption.
     * @return $this
     */
    public function withCaption($caption)
    {
    }
    /**
     * With limit.
     *
     * @param integer $limit Limit.
     * @return $this
     */
    public function withLimit($limit)
    {
    }
    /**
     * With time interval in seconds.
     *
     * @param integer $interval Time interval.
     * @return $this
     */
    public function withInterval($interval)
    {
    }
    /**
     * With unit.
     *
     * @param string $unit Unit.
     * @return $this
     */
    public function withUnit($unit)
    {
    }
    /**
     * With unit name.
     *
     * @param string $unitName Unit.
     * @return $this
     */
    public function withUnitName($unitName)
    {
    }
    /**
     * Set current.
     *
     * @param callable $callable Callable.
     * @return $this
     * @throws ArgumentException
     */
    public function withCurrent($callable)
    {
    }
    /**
     * Get initial limit.
     *
     * @return integer
     */
    public function getInitialLimit()
    {
    }
    /**
     * Get limit rate.
     *
     * @return integer
     */
    public function getLimit()
    {
    }
    /**
     * Get unit.
     *
     * @return string
     */
    public function getUnit()
    {
    }
    /**
     * Get unit name.
     *
     * @return string
     */
    public function getUnitName()
    {
    }
    /**
     * Get caption.
     *
     * @return string
     */
    public function getCaption()
    {
    }
    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
    }
    /**
     * Get text.
     *
     * @return string
     */
    public function getText()
    {
    }
    /**
     * Get parameter.
     *
     * @param string $name Name.
     * @return mixed|null
     */
    public function getParameter($name)
    {
    }
    /**
     * Set parameter.
     *
     * @param string $name Name.
     * @param mixed $value Value.
     * @return $this
     */
    public function setParameter($name, $value)
    {
    }
    /**
     * Inc current limit rate.
     *
     * @param integer $amount Amount.
     * @return $this
     * @throws SystemException
     */
    public function inc($amount = 1)
    {
    }
    /**
     * Get current limit rate.
     *
     * @return integer
     */
    public function getAvailable()
    {
    }
    /**
     * Get current limit rate.
     *
     * @return integer
     */
    public function getCurrent()
    {
    }
    /**
     * Set current limit rate.
     *
     * @param integer $value Value.
     * @return $this
     */
    private function setCurrent($value)
    {
    }
    /**
     * Set timestamp of current period.
     *
     * @param integer $value Value.
     * @return $this
     */
    private function setTimestamp($value)
    {
    }
    /**
     * Get timestamp of current period.
     *
     * @return int
     */
    public function getTimestamp()
    {
    }
    private function getCurrentTimestamp()
    {
    }
    private function getCounterOptionName()
    {
    }
    private function getDateOptionName()
    {
    }
}