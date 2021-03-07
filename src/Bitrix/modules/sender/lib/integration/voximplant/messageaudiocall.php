<?php

namespace Bitrix\Sender\Integration\VoxImplant;

/**
 * Class MessageCall
 * @package Bitrix\Sender\Integration\VoxImplant
 */
class MessageAudioCall implements \Bitrix\Sender\Message\iBase, \Bitrix\Sender\Message\iMailable, \Bitrix\Sender\Message\iAudible
{
    const CODE = self::CODE_AUDIO_CALL;
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
    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
    }
    /**
     * Get supported transports.
     *
     * @return array
     */
    public function getSupportedTransports()
    {
    }
    /**
     * Set configuration options
     *
     * @return void
     */
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
     * Check value of audio field and prepare it for DB
     * @param string $optionCode Field code.
     * @param string $newValue New field value.
     * @return bool|string
     * @throws \Bitrix\Main\ArgumentException
     * @throws \Bitrix\Main\ArgumentNullException
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     */
    public function getAudioValue($optionCode, $newValue)
    {
    }
}