<?php

namespace Bitrix\Sender\Integration\Sender\WebHook;

/**
 * Class MessageWebHook
 * @package Bitrix\Sender\Integration\Sender\WebHook
 */
class MessageWebHook implements \Bitrix\Sender\Message\iBase
{
    const CODE = self::CODE_WEB_HOOK;
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
     * Get supported transports.
     *
     * @return array
     */
    public function getSupportedTransports()
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
     * Copy configuration.
     *
     * @param integer|string|null $id ID.
     * @return Result|null
     */
    public function copyConfiguration($id)
    {
    }
}