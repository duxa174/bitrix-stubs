<?php

namespace Bitrix\Sender\Message;

/**
 * Class Adapter
 * @package Bitrix\Sender\Message
 */
class Adapter implements \Bitrix\Sender\Message\iBase
{
    /** @var  static[] $list List. */
    protected static $list;
    /** @var iBase $message Message. */
    protected $message;
    /** @var  Tester $tester tester. */
    protected $tester;
    /** @var Configuration $configuration Configuration. */
    protected $configuration;
    /** @var Transport\Adapter $transport Transport. */
    protected $transport;
    /** @var array $fields Fields. */
    protected $fields = array();
    /** @var string|null $siteId Site ID. */
    protected $siteId = null;
    /** @var array|null $siteData Site data. */
    protected $siteData = null;
    /** @var string $recipientCode Recipient code. */
    protected $recipientCode;
    /** @var string $recipientId Recipient ID. */
    protected $recipientId;
    /** @var string $recipientType Recipient type. */
    protected $recipientType;
    /** @var [] $recipientData Recipient data. */
    protected $recipientData;
    /** @var Tracker $readTracker Read tracker. */
    protected $readTracker;
    /** @var Tracker $clickTracker Click tracker. */
    protected $clickTracker;
    /** @var Tracker $unsubTracker Unsubscribe tracker. */
    protected $unsubTracker;
    /**
     * Get instance.
     *
     * @param string $code Message code.
     * @return static
     * @throws ArgumentException
     */
    public static function getInstance($code)
    {
    }
    /**
     * Create instance.
     *
     * @param string $code Code.
     * @return static
     * @throws ArgumentException
     */
    public static function create($code)
    {
    }
    /**
     * Message constructor.
     *
     * @param iBase $message Message.
     */
    public function __construct(\Bitrix\Sender\Message\iBase $message)
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
     * Get transport.
     *
     * @return Transport\Adapter
     */
    public function getTransport()
    {
    }
    /**
     * Set transport.
     *
     * @param Transport\Adapter $transport Transport.
     * @return void
     */
    public function setTransport(\Bitrix\Sender\Transport\Adapter $transport)
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
     * Get ID.
     *
     * @return string
     */
    public function getId()
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
     * Get supported recipient types.
     *
     * @return integer[]
     */
    public function getSupportedRecipientTypes()
    {
    }
    /**
     * Is support testing.
     *
     * @return Tester
     */
    public function getTester()
    {
    }
    /**
     * Load configuration.
     *
     * @param string|null $id ID.
     * @return Configuration
     */
    public function loadConfiguration($id = null)
    {
    }
    /**
     * Set configuration data.
     *
     * @param array $data Data.
     * @return void
     */
    public function setConfigurationData(array $data)
    {
    }
    /**
     * Get configuration.
     *
     * @return Configuration
     */
    public function getConfiguration()
    {
    }
    /**
     * Save configuration.
     *
     * @param Configuration $configuration Configuration.
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
    /**
     * Get field.
     *
     * @param string $key Key.
     * @return mixed|string|null
     */
    public function getField($key)
    {
    }
    /**
     * Get fields.
     *
     * @return array
     */
    public function getFields()
    {
    }
    /**
     * Set fields.
     *
     * @param array $fields Fields.
     * @return void
     */
    public function setFields(array $fields)
    {
    }
    /**
     * Replace fields in content.
     *
     * @param string $content Content.
     * @param string $replaceChar Replace char.
     * @return string
     */
    public function replaceFields($content = "", $replaceChar = '#')
    {
    }
    /**
     * Get to.
     *
     * @return string
     */
    public function getTo()
    {
    }
    /**
     * Get recipient code.
     *
     * @return string
     */
    public function getRecipientCode()
    {
    }
    /**
     * Set recipient code.
     *
     * @param string $code Code.
     * @return void
     */
    public function setRecipientCode($code)
    {
    }
    /**
     * Get recipient ID.
     *
     * @return string
     */
    public function getRecipientId()
    {
    }
    /**
     * Set recipient ID.
     *
     * @param string $id Recipient ID.
     * @return void
     */
    public function setRecipientId($id)
    {
    }
    /**
     * Get recipient type.
     *
     * @return string
     */
    public function getRecipientType()
    {
    }
    /**
     * Set recipient type.
     *
     * @param string $type Type.
     * @return void
     */
    public function setRecipientType($type)
    {
    }
    /**
     * Get recipient data.
     *
     * @return array
     */
    public function getRecipientData()
    {
    }
    /**
     * Set recipient data.
     *
     * @param array $data Data.
     * @return void
     */
    public function setRecipientData(array $data)
    {
    }
    /**
     * Get read tracker.
     *
     * @return Tracker
     */
    public function getReadTracker()
    {
    }
    /**
     * Get click tracker.
     *
     * @return Tracker
     */
    public function getClickTracker()
    {
    }
    /**
     * Get unsub tracker.
     *
     * @return Tracker
     */
    public function getUnsubTracker()
    {
    }
    /**
     * Send.
     *
     * @return bool
     */
    public function send()
    {
    }
    /**
     * Get send duration.
     *
     * @return integer
     */
    public function getSendDuration()
    {
    }
    /**
     * Set site ID.
     *
     * @param string $id ID.
     * @return void
     */
    public function setSiteId($id = null)
    {
    }
    /**
     * Get site ID.
     *
     * @return string
     */
    public function getSiteId()
    {
    }
    /**
     * Get charset.
     *
     * @return string
     */
    public function getCharset()
    {
    }
    /**
     * Get site ID.
     *
     * @return string
     */
    public function getSiteName()
    {
    }
    /**
     * Get site server name.
     *
     * @return string
     */
    public function getSiteServerName()
    {
    }
    /**
     * Get site data.
     * @param int $id Id.
     * @return array
     * @throws ArgumentException
     * @throws \Bitrix\Main\ObjectPropertyException
     * @throws \Bitrix\Main\SystemException
     */
    private function getSiteData($id)
    {
    }
    /**
     * Is ads.
     *
     * @return bool
     */
    public function isAds()
    {
    }
    /**
     * Is mailing.
     *
     * @return bool
     */
    public function isMailing()
    {
    }
    /**
     * Is return customer.
     *
     * @return bool
     */
    public function isReturnCustomer()
    {
    }
    /**
     * Return true if is hidden.
     *
     * @return bool
     */
    public function isHidden()
    {
    }
    /**
     * Is available.
     *
     * @return bool
     */
    public function isAvailable()
    {
    }
    /**
     * Return true if it has statistics.
     *
     * @return bool
     */
    public function hasStatistics()
    {
    }
    /**
     *  Check value of audio field and prepare it for DB
     * @param string $optionCode Field code.
     * @param string $newValue New field value.
     * @return bool|string
     */
    public function getAudioValue($optionCode, $newValue)
    {
    }
    public function onBeforeStart()
    {
    }
    public function onAfterEnd()
    {
    }
    /**
     * @inheritDoc
     */
    public function getEntityCode()
    {
    }
}