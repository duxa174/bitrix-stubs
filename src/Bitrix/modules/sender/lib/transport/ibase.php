<?php

namespace Bitrix\Sender\Transport;

/**
 * Interface iBase
 * @package Bitrix\Sender\Transport
 */
interface iBase
{
    const CODE_MAIL = 'mail';
    const CODE_WEB_HOOK = 'web_hook';
    const CODE_SMS = 'sms';
    const CODE_IM = 'im';
    const CODE_CALL = 'call';
    const CODE_AUDIO_CALL = 'audio_call';
    const CODE_UNDEFINED = '';
    const EVENT_NAME = 'onSenderTransportList';
    /**
     * Get name.
     *
     * @return string
     */
    public function getName();
    /**
     * Get code.
     *
     * @return string
     */
    public function getCode();
    /**
     * Get supported recipient types.
     *
     * @return array
     */
    public function getSupportedRecipientTypes();
    /**
     * Load configuration.
     *
     * @return Message\Configuration
     */
    public function loadConfiguration();
    /**
     * Save configuration.
     *
     * @param Message\Configuration $configuration Configuration.
     * @return void
     */
    public function saveConfiguration(\Bitrix\Sender\Message\Configuration $configuration);
    /**
     * Start.
     * @return void
     */
    public function start();
    /**
     * Send message.
     *
     * @param Message\Adapter $message Message.
     *
     * @return bool
     */
    public function send(\Bitrix\Sender\Message\Adapter $message);
    /**
     * End.
     * @return void
     */
    public function end();
}