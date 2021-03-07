<?php

namespace Bitrix\Sender\Dispatch;

/**
 * Class MethodDefered
 * @package Bitrix\Sender\Dispatch
 */
class MethodDefered implements \Bitrix\Sender\Dispatch\iMethod
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