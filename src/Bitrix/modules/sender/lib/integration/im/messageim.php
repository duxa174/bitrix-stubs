<?php

namespace Bitrix\Sender\Integration\Im;

/**
 * Class MessageIm
 * @package Bitrix\Sender\Integration\Im
 */
class MessageIm implements \Bitrix\Sender\Message\iBase, \Bitrix\Sender\Message\iMailable
{
    const CODE = self::CODE_IM;
    /** @var Message\Configuration $configuration Configuration. */
    protected $configuration;
    /**
     * MessageSms constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get name.
     * @return string
     */
    public function getName()
    {
    }
    public function getCode()
    {
    }
    public function getSupportedTransports()
    {
    }
    protected function setConfigurationOptions()
    {
    }
    /**
     * Load configuration.
     *
     * @param integer|null $id ID.
     *
     * @return Message\Configuration
     */
    public function loadConfiguration($id = null)
    {
    }
    /**
     * Save configuration.
     *
     * @param Message\Configuration $configuration Configuration.
     *
     * @return Result
     */
    public function saveConfiguration(\Bitrix\Sender\Message\Configuration $configuration)
    {
    }
    /**
     * Remove configuration.
     *
     * @param integer $id ID.
     * @return bool
     */
    public function removeConfiguration($id)
    {
    }
    /**
     * Copy configuration.
     *
     * @param integer|string|null $id ID.
     * @return Result|null
     */
    public function copyConfiguration($id)
    {
    }
}