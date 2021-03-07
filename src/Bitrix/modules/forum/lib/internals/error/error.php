<?php

namespace Bitrix\Forum\Internals\Error;

class Error
{
    /** @var int */
    protected $code;
    /** @var string */
    protected $message;
    /**
     * Creates new Error.
     * @param string $message Message of error.
     * @param int|string $code Code of error.
     */
    public function __construct($message, $code = 0)
    {
    }
    /**
     * Returns code of error.
     * @return int|string
     */
    public function getCode()
    {
    }
    /**
     * Returns message of error.
     * @return string
     */
    public function getMessage()
    {
    }
    public function __toString()
    {
    }
}