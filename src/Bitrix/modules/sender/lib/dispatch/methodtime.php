<?php

namespace Bitrix\Sender\Dispatch;

class MethodTime implements \Bitrix\Sender\Dispatch\iMethod
{
    /** @var DateTime $dateTime Date. */
    protected $dateTime;
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
     * Apply method.
     *
     * @param DateTime $dateTime Date.
     */
    public function setDateTime(\Bitrix\Main\Type\DateTime $dateTime)
    {
    }
    /**
     * Apply method.
     *
     * @return DateTime
     */
    public function getDateTime()
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
    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
    }
}