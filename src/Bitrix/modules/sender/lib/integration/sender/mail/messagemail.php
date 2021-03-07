<?php

namespace Bitrix\Sender\Integration\Sender\Mail;

/**
 * Class MessageMail
 * @package Bitrix\Sender\Integration\Sender\Mail
 */
class MessageMail implements \Bitrix\Sender\Message\iBase, \Bitrix\Sender\Message\iMailable
{
    const CODE = self::CODE_MAIL;
    /** @var Message\Configuration $configuration Configuration. */
    protected $configuration;
    /** @var integer $configurationId Configuration ID. */
    protected $configurationId;
    protected $closureRefCountFix;
    /**
     * MessageMail constructor.
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
     * Get supported transports.
     *
     * @return array
     */
    public function getSupportedTransports()
    {
    }
    /**
     * Set configuration options
     * @return void
     */
    protected function setConfigurationOptions()
    {
    }
    /**
     * Load configuration.
     *
     * @param string|null $id ID.
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
     * @return Result|null
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
    /**
     * Remove php code from html
     * @param string $html Input html.
     * @return string
     */
    protected function removePhp($html)
    {
    }
    /**
     * Get main body.
     *
     * @return string
     */
    public function getMailBody()
    {
    }
    /**
     * Get template
     * @return array|null
     */
    protected function getTemplate()
    {
    }
    /**
     * Add option headers to headers
     * @param array $headers Headers.
     * @return array
     */
    protected static function fillHeadersByOptionHeaders(array $headers = array())
    {
    }
}