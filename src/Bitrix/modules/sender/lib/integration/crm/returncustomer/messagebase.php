<?php

namespace Bitrix\Sender\Integration\Crm\ReturnCustomer;

/**
 * Class MessageBase
 * @package Bitrix\Sender\Integration\Crm\ReturnCustomer
 */
class MessageBase implements \Bitrix\Sender\Message\iBase, \Bitrix\Sender\Message\iReturnCustomer
{
    const CODE = self::CODE_UNDEFINED;
    const CODE_RC_LEAD = 'rc_lead';
    const CODE_RC_DEAL = 'rc_deal';
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