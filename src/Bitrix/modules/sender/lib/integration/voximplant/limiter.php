<?php

namespace Bitrix\Sender\Integration\VoxImplant;

/**
 * Class Limiter
 * @package Bitrix\Sender\Integration\VoxImplant
 */
class Limiter implements \Bitrix\Sender\Transport\iLimiter
{
    /** @var array $parameters Parameters. */
    private $parameters = array();
    /**
     * Limiter constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get max.
     *
     * @return integer
     */
    public function getLimit()
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
     * Get caption.
     *
     * @return string|null
     */
    public function getCaption()
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
     * Get unit name.
     *
     * @return string
     */
    public function getUnitName()
    {
    }
    /**
     * Get unit.
     * Examples:
     * "14 d" is equals 14 days;
     * "d" is equals 1 day.
     *
     * @return string
     */
    public function getUnit()
    {
    }
}