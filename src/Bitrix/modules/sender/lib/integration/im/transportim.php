<?php

namespace Bitrix\Sender\Integration\Im;

/**
 * Class TransportIm
 * @package Bitrix\Sender\Integration\Im
 */
class TransportIm implements \Bitrix\Sender\Transport\iBase
{
    const CODE = self::CODE_IM;
    /** @var Message\Configuration $configuration Configuration. */
    protected $configuration;
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
}