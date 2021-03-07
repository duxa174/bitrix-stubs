<?php

namespace Bitrix\Sender\Dispatch;

/**
 * Class DurationDateBased
 * @package Bitrix\Sender\Dispatch
 */
class DurationDateBased
{
    /** @var Entity\Letter $letter Letter. */
    private $letter;
    /**
     * Constructor.
     *
     * @param Entity\Letter $letter Letter.
     */
    public function __construct(\Bitrix\Sender\Entity\Letter $letter)
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
     * Get elapsed interval in seconds.
     *
     * @return integer
     */
    private function getElapsedInterval()
    {
    }
}