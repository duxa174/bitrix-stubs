<?php

namespace Bitrix\Sender\Dispatch;

/**
 * Class Method
 * @package Bitrix\Sender\Dispatch
 */
class Method implements \Bitrix\Sender\Dispatch\iMethod
{
    const DEFERED = 'defered';
    const TIME = 'time';
    const SCHEDULE = 'schedule';
    /** @var Entity\Letter $letter Letter. */
    private $letter;
    /** @var iMethod $method Method. */
    private $method;
    /**
     * Constructor.
     *
     * @param Entity\Letter $letter Letter.
     */
    public function __construct(\Bitrix\Sender\Entity\Letter $letter)
    {
    }
    /**
     * Check change possibility.
     *
     * @return bool
     */
    public function canChange()
    {
    }
    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * Set defer method.
     *
     * @return void
     */
    public function defer()
    {
    }
    /**
     * Set time method.
     *
     * @param DateTime $dateTime Date.
     * @return void
     */
    public function time(\Bitrix\Main\Type\DateTime $dateTime)
    {
    }
    /**
     * Set time method with current time.
     *
     * @return void
     */
    public function now()
    {
    }
    /**
     * Set method.
     *
     * @param iMethod $method Method.
     */
    public function set(\Bitrix\Sender\Dispatch\iMethod $method)
    {
    }
    /**
     * Get method.
     *
     * @return iMethod
     */
    public function get()
    {
    }
    /**
     * Apply method.
     *
     * @return void
     */
    public function apply()
    {
    }
    /**
     * Revoke method.
     *
     * @return void
     */
    public function revoke()
    {
    }
}