<?php

namespace Bitrix\Sender\Integration\Crm\ReturnCustomer;

/**
 * Class TransportBase
 * @package Bitrix\Sender\Integration\Crm\ReturnCustomer;
 */
class TransportBase implements \Bitrix\Sender\Transport\iBase
{
    const CODE = self::CODE_UNDEFINED;
    const CODE_RC_LEAD = 'rc_lead';
    const CODE_RC_DEAL = 'rc_deal';
    /** @var Message\Configuration $configuration Configuration. */
    protected $configuration;
    /** @var  Queue|null Queue. */
    protected $responsibleQueue;
    /**
     * Transport constructor.
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
     * Get configuration.
     *
     * @return string
     */
    public function loadConfiguration()
    {
    }
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
    protected function detectDealCategoryId($categoryId, \Bitrix\Crm\EntityManageFacility $facility)
    {
    }
    protected function getLastDealCategoryId(\Bitrix\Crm\EntityManageFacility $facility)
    {
    }
}