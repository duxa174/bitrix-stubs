<?php

namespace Bitrix\Sender\Integration\Sender\WebHook;

/**
 * Class TransportWebHook
 * @package Bitrix\Sender\Integration\Sender\WebHook
 */
class TransportWebHook implements \Bitrix\Sender\Transport\iBase, \Bitrix\Sender\Transport\iLimitation
{
    const CODE = self::CODE_WEB_HOOK;
    const MAX_BUFFER_SIZE = 200;
    /** @var Message\Configuration $configuration Configuration. */
    protected $configuration;
    /** @var Transport\CountLimiter $limiter Limiter. */
    protected $limiter;
    /** @var HttpClient $httpClient Http client. */
    protected $httpClient = array();
    /** @var array $buffer Buffer. */
    protected $buffer = array('uri' => null, 'list' => array());
    /**
     * TransportWebHook constructor.
     */
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
     * Load configuration.
     *
     * @return Message\Configuration
     */
    public function loadConfiguration()
    {
    }
    /**
     * Save configuration.
     *
     * @param Message\Configuration $configuration Configuration.
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
     * @param Message\Adapter $message Message.
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
    protected function resetBuffer()
    {
    }
    protected function flushBuffer()
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