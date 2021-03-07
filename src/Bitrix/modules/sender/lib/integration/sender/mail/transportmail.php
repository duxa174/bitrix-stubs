<?php

namespace Bitrix\Sender\Integration\Sender\Mail;

/**
 * Class TransportMail
 * @package Bitrix\Sender\Integration\Sender\Mail
 */
class TransportMail implements \Bitrix\Sender\Transport\iBase, \Bitrix\Sender\Transport\iDuration, \Bitrix\Sender\Transport\iLimitation
{
    const CODE = self::CODE_MAIL;
    /** @var Message\Configuration $configuration Configuration. */
    protected $configuration;
    /** @var Mail\Context $mailContext Mail context. */
    protected $mailContext;
    /** @var Mail\Address $mailAddress Mail address. */
    protected $mailAddress;
    /**
     * TransportMail constructor.
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
     *
     * @return Result|null
     */
    public function saveConfiguration(\Bitrix\Sender\Message\Configuration $configuration)
    {
    }
    /**
     * Start.
     *
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
     */
    public function send(\Bitrix\Sender\Message\Adapter $message)
    {
    }
    /**
     * End.
     *
     * @return void
     */
    public function end()
    {
    }
    /**
     * Get send duration in seconds.
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
    protected function getSenderLinkProtocol()
    {
    }
    protected function canTrackMails()
    {
    }
    protected function getMailContext()
    {
    }
    /**
     * Get clean address.
     *
     * @param string $address Address.
     * @return string|null
     */
    protected function getCleanMailAddress($address)
    {
    }
}