<?php

namespace Bitrix\Sender\Integration\MessageService\Sms;

/**
 * Class TransportSms
 * @package Bitrix\Sender\Integration\MessageService\Sms
 */
class TransportSms implements \Bitrix\Sender\Transport\iBase, \Bitrix\Sender\Transport\iLimitation
{
    const CODE = self::CODE_SMS;
    /** @var Message\Configuration $configuration Configuration. */
    protected $configuration;
    /** @var Transport\CountLimiter[] $limiters Limiters. */
    protected $limiters;
    /** @var HttpClient $httpClient Http client. */
    protected $httpClient = array();
    public function __construct()
    {
    }
    public function getName()
    {
    }
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
    public function loadConfiguration()
    {
    }
    public function saveConfiguration(\Bitrix\Sender\Message\Configuration $configuration)
    {
    }
    public function start()
    {
    }
    public function send(\Bitrix\Sender\Message\Adapter $message)
    {
    }
    public function end()
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
}