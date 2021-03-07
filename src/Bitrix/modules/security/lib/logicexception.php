<?php

namespace Bitrix\Security;

/**
 * Class LogicException
 * @since 14.0.6
 * @package Bitrix\Security
 */
class LogicException extends \Bitrix\Main\SystemException
{
    protected $locMessage = null;
    /**
     * Creates new logic exception object.
     *
     * @param string $message The Exception message to throw.
     * @param string $locMessageKey The Exception message localization key. Helpful for output message directly to user.
     * @param int $code The Exception code.
     * @param string $file The filename where the exception is thrown.
     * @param int $line The line number where the exception is thrown.
     * @param \Exception $previous The previous exception used for the exception chaining.
     */
    public function __construct($message = '', $locMessageKey = '', $code = 0, $file = '', $line = 0, \Exception $previous = null)
    {
    }
    /**
     * Returns localized message
     *
     * @return string
     */
    public function getLocMessage()
    {
    }
}