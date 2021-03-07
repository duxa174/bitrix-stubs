<?php

namespace Bitrix\Sender\Transport;

/**
 * Class Transport
 * @package Bitrix\Sender\Transport
 */
class Adapter implements \Bitrix\Sender\Transport\iBase, \Bitrix\Sender\Transport\iLimitation
{
    /** @var  iBase $transport Transport. */
    protected $transport;
    /** @var  Adapter[] $list List. */
    protected static $list;
    /** @var  boolean $startResult Start result. */
    protected $startResult = null;
    /** @var  boolean $isStarted Is started. */
    protected $isStarted = false;
    /** @var  boolean $isEnded Is ended. */
    protected $isEnded = false;
    /** @var  iLimiter[] $limiters Limiters. */
    protected $limiters = null;
    /** @var  integer $sendCount Count of send. */
    protected $sendCount = 0;
    /**
     * Get instance.
     *
     * @param string $code Code.
     *
     * @return Adapter
     */
    public static function getInstance($code)
    {
    }
    /**
     * Create.
     *
     * @param string $code Code.
     * @return static
     * @throws ArgumentException
     */
    public static function create($code)
    {
    }
    /**
     * Transport constructor.
     *
     * @param iBase $transport Transport.
     */
    public function __construct(\Bitrix\Sender\Transport\iBase $transport)
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
     * Set count of send.
     *
     * @param integer $sendCount Count of send.
     * @return $this
     */
    public function setSendCount($sendCount)
    {
    }
    /**
     * Get count of send.
     *
     * @return integer
     */
    public function getSendCount()
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
     * Send message.
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
    /**
     * Destroy.
     */
    public function __destroy()
    {
    }
    /**
     * Get send duration in seconds.
     *
     * @param Adapter|null $message Message.
     * @return integer
     */
    public function getDuration($message = null)
    {
    }
    /**
     * Has limiters.
     *
     * @return bool
     */
    public function hasLimiters()
    {
    }
    /**
     * Get limiters.
     *
     * @param Message\iBase $message Message.
     * @return iLimiter[]
     */
    public function getLimiters(\Bitrix\Sender\Message\iBase $message = null)
    {
    }
    /**
     * Check limit exceeding.
     *
     * @param Message\iBase $message Message.
     * @return bool
     */
    public function isLimitsExceeded(\Bitrix\Sender\Message\iBase $message = null)
    {
    }
}