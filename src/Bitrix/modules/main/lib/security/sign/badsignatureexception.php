<?php

namespace Bitrix\Main\Security\Sign;

/**
 * Class BadSignatureException
 * @since 14.0.7
 * @package Bitrix\Main\Security\Sign
 */
class BadSignatureException extends \Bitrix\Main\SystemException
{
    /**
     * Creates new exception object for signing purposes.
     *
     * @param string $message Message.
     * @param \Exception $previous Previous exception.
     */
    public function __construct($message = "", \Exception $previous = null)
    {
    }
}