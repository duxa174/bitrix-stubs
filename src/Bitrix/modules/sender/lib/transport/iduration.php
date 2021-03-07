<?php

namespace Bitrix\Sender\Transport;

/**
 * Interface iTransportDuration
 * @package Bitrix\Sender\Transport
 */
interface iDuration
{
    /**
     * Get send duration in seconds.
     *
     * @param Message\Adapter|null $message Message.
     *
     * @return float
     */
    public function getDuration(\Bitrix\Sender\Message\Adapter $message = null);
}