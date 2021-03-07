<?php

namespace Bitrix\Sender\Integration\MessageService\Sms;

/**
 * Class MessageSms
 * @package Bitrix\Sender\Integration\MessageService\Sms
 */
class MessageSms implements \Bitrix\Sender\Message\iBase, \Bitrix\Sender\Message\iMailable
{
    const CODE = self::CODE_SMS;
    /** @var Message\Configuration $configuration Configuration. */
    protected $configuration;
    /** @var integer $configurationId Configuration ID. */
    protected $configurationId;
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
    /**
     * Get sms sender.
     *
     * @return string
     */
    public function getSmsSender()
    {
    }
}