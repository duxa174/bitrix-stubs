<?php

namespace Bitrix\Sender\Integration\VoxImplant;

/**
 * Class TransportCall
 * @package Bitrix\Sender\Integration\VoxImplant
 */
class TransportCall implements \Bitrix\Sender\Transport\iBase, \Bitrix\Sender\Transport\iDuration, \Bitrix\Sender\Transport\iLimitation
{
    const CODE = self::CODE_CALL;
    /** @var Message\Configuration $configuration Configuration. */
    protected $configuration;
    /** @var Transport\CountLimiter $limiter Limiter. */
    protected $limiter;
    /** @var HttpClient $httpClient Http client. */
    protected $httpClient = array();
    public function __construct()
    {
    }
    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
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
     * Get supported recipient types.
     *
     * @return integer[]
     */
    public function getSupportedRecipientTypes()
    {
    }
    /**
     * Get configuration.
     *
     * @return string
     */
    public function loadConfiguration()
    {
    }
    /**
     * Save configuration.
     *
     * @param Message\Configuration $configuration
     */
    public function saveConfiguration(\Bitrix\Sender\Message\Configuration $configuration)
    {
    }
    /**
     * Start.
     */
    public function start()
    {
    }
    /**
     * Send.
     *
     * @param Message\Adapter $message
     *
     * @return bool
     */
    public function send(\Bitrix\Sender\Message\Adapter $message)
    {
    }
    /**
     * End.
     */
    public function end()
    {
    }
    /**
     * Get send duration in seconds.
     * Calc: length(message text based) + magic(connection time) / limit(because calls is parallel).
     *
     * @param Message\Adapter|null $message Message.
     *
     * @return float
     */
    public function getDuration(\Bitrix\Sender\Message\Adapter $message = null)
    {
    }
    /**
     * Get limiters.
     *
     * @param Message\iBase $message Message.
     * @return Transport\iLimiter[]
     */
    public function getLimiters(\Bitrix\Sender\Message\iBase $message = null)
    {
    }
    protected function getCountLimiter()
    {
    }
}