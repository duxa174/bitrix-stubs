<?php

namespace Bitrix\Sender\Transport;

/**
 * Interface iLimitable
 * @package Bitrix\Sender\Transport
 */
interface iLimitation
{
    /**
     * Get limiters.
     *
     * @param Message\iBase $message Message.
     * @return iLimiter[]
     */
    public function getLimiters(\Bitrix\Sender\Message\iBase $message = null);
}