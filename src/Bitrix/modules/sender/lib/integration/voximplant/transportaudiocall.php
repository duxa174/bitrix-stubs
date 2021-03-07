<?php

namespace Bitrix\Sender\Integration\VoxImplant;

/**
 * Class TransportCall
 * @package Bitrix\Sender\Integration\VoxImplant
 */
class TransportAudioCall implements \Bitrix\Sender\Transport\iBase, \Bitrix\Sender\Transport\iDuration, \Bitrix\Sender\Transport\iLimitation
{
    const CODE = self::CODE_AUDIO_CALL;
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
     * @param Message\Configuration $configuration Configuration.
     * @return void
     */
    public function saveConfiguration(\Bitrix\Sender\Message\Configuration $configuration)
    {
    }
    /**
     * Start.
     * @return void
     */
    public function start()
    {
    }
    /**
     * Send.
     *
     * @param Message\Adapter $message Message.
     *
     * @return bool
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function send(\Bitrix\Sender\Message\Adapter $message)
    {
    }
    /**
     * End.
     * @return void
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
    /**
     * Get count limiter
     * @return Limiter
     */
    protected function getCountLimiter()
    {
    }
}